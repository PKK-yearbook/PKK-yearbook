<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login.login');
    }

    public function landing_page(){
        return view('landing_page.landing_page');
    }
}
