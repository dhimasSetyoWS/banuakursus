<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Library\Agurooz\AguroozConfig;
use App\Library\Agurooz\AguroozEncryption;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
            'errorAPI' => session('errorAPI'),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {

        $request->authenticate(); // login dlu, jika gagal maka agurooz request tidak akan di eksekusi

        // Agurooz Request
        $data = [
            'username' => Auth::user()->username . "@" . AguroozConfig::$institution_code,
            'institution_code' => AguroozConfig::$institution_code
        ];

        $encrypted = AguroozEncryption::encryptData($data, AguroozConfig::$client_key_front);
        $signature = AguroozEncryption::generateSignature(AguroozConfig::$institution_code, AguroozConfig::$client_key_back);

        $data = array(
            'institution_code' => AguroozConfig::$institution_code,
            'encrypted_data' => $encrypted,
            'signature' => $signature,
        );
        $final_url = AguroozConfig::$agurooz_url . "api/login-without-password";
        $response = Http::post($final_url, $data)->body();
        $response = json_decode($response, false);

        if (!$response->status_app) { //cek jika error
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->intended(route('login'))->with('errorAPI', 'Gagal Terhubung ke API, Silahkan Contact <a href="https://agurooz.com" class="underline">Agurooz</a>');
        }
        // generate session jika berhasil
        $data = $response->data;
        $request->session()->put('agurooz_token' , $data->token);
        $request->session()->regenerate();
        if (Auth::user()->role_id != 4) { // cek role jika dia bukan murid, maka masuk ke dashboard
            return redirect()->intended(route('dashboard', Auth::user()->id, absolute: false));
        }
        return redirect()->intended(route('welcome', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
