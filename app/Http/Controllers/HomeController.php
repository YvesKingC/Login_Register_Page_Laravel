<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function homeBtn(){
        return view('HomePage');
    }
    function loginbtn(){
        return view('LoginPage');
    }
    function registerBtn(){
        return view('RegisterPage');
    }
}
