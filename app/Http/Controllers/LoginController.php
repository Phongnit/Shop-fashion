<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    // logincontroller?
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function forgot()
    {
        return view('forgot-password');
    }
}
