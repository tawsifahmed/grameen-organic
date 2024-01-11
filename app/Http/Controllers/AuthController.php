<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('auth.create');
    }



    public function login()
    {
        // this is path of the login page
        return view('auth.login');
    }

    public function signup(){
        return view('auth.signup');
    }

    public function verification(){
        return view('auth.verification');
    }

    public function welcomeDashboard(){
        return view('auth.welcomeDashboard');
    }
    
}
