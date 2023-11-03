<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    //login
    public function login(){
        return view('login');
    }

    //register
    public function register(){
        return view('register');
    }

}
