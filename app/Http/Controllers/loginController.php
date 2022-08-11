<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function registro(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');
    }
}
