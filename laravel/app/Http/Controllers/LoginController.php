<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Login;

class LoginController
{
    public function getLogin()
    {
        $login = Login::all();
        return view('Login',['Login'=>$login]);
    }
}
