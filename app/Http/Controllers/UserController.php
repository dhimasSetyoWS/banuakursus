<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function delete($id) {
        User::destroy($id);
        return redirect()->back()->with('message' , 'Data Terhapus');
    }
}
