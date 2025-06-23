<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Staff;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use App\Library\Agurooz\AguroozEncryption;
use App\Library\Agurooz\AguroozConfig;
use Illuminate\Support\Facades\Http;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
            'username' => 'required|string|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'username' => $request->username,
        //     'password' => Hash::make($request->password),
        //     'role_id' => 4,
        // ]);


        // for agurooz request
        $username = $request->username;
        $name = $request->name;
        $user_id = $request->id;
        $email = $request->email;
        $password = $request->password;

        $secretKey = AguroozConfig::$client_key_front; // Pastikan panjang key 32 karakter
        $secretBackKey = AguroozConfig::$client_key_back;
        // $lms_staff_id = $user->agurooz_id;

        // if(!$lms_staff_id){
        $data = ['name' => $name, 'password' => $password, "email" => $email, "username" => $username . "@" . AguroozConfig::$institution_code, "institution_code" => AguroozConfig::$institution_code];
        // }else{
        //     $data = ["agurooz_institution_staff_id" => $lms_staff_id,
        //     "institution_code" => AguroozConfig::$institution_code];
        // }

        // Agurooz
        $encrypted = AguroozEncryption::encryptData($data, $secretKey);
        $signature = AguroozEncryption::generateSignature(AguroozConfig::$institution_code, $secretBackKey);

        $data = array(
            'institution_code' => AguroozConfig::$institution_code,
            'encrypted_data' => $encrypted,
            'signature' => $signature
        );

        $final_url = AguroozConfig::$agurooz_url . "api/register-api-student"; // buat guru

        $response = Http::post($final_url, $data)->json();
        dd($response);
        if (!$response['error']) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role_id' => 4,
            ]);

            event(new Registered($user));
            Auth::login($user);
            return redirect(route('welcome', absolute: false));
        } else {
            return redirect()->back();
        }
        // End Of Agurooz
    }
}
