<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;
use App\Library\Agurooz\AguroozConfig;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Library\Agurooz\AguroozEncryption;
use Illuminate\Validation\Rules;

class AdminController extends Controller
{
    //
    public function showTeacher()
    {
        return Inertia::render('Dashboard/Page/Admin/ListTeacher');
    }
    public function showStudent()
    {
        return Inertia::render('Dashboard/Page/Admin/ListStudent');
    }
    public function task()
    {
        return Inertia::render('Dashboard/Page/Admin/Task');
    }
    public function task_create()
    {
        return Inertia::render('Dashboard/Page/Task/AddTask');
    }
    public function article()
    {
        return Inertia::render('Dashboard/Page/Admin/Article');
    }
    public function article_create()
    {
        return Inertia::render('Dashboard/Page/Article/AddArticle');
    }


    public function store_teacher(Request $request) {
        $username = $request->username;
        $name = $request->name;
        $user_id = $request->id;
        $email = $request->email;
        $password = $request->password;
        $secretKey = AguroozConfig::$client_key_front; // Pastikan panjang key 32 karakter
        $secretBackKey = AguroozConfig::$client_key_back;

        $data = ['name' => $name, 'password' => $password, "email" => $email, "username" => $username, "institution_code" => AguroozConfig::$institution_code];

        // Agurooz
        $encrypted = AguroozEncryption::encryptData($data, $secretKey);
        $signature = AguroozEncryption::generateSignature(AguroozConfig::$institution_code, $secretBackKey);

        $data = array(
            'institution_code' => AguroozConfig::$institution_code,
            'encrypted_data' => $encrypted,
            'signature' => $signature
        );

        $final_url = AguroozConfig::$agurooz_url . "api/register-api"; // buat guru
        $response = Http::post($final_url, $data)->json();
        if (!$response['error']) {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'role_id' => 3,
            ]);
            $this->showTeacher();
        } else {
            return redirect()->back()->with('error' , 'Ada Error | Silahkan Contact Agurooz.');
        }
    }
}
