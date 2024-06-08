<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
          return view('auth.login');

    }

    public function handleLogin(AuthRequest $request)
    {
    $credentials=$request->only('email','password');
    if(Auth::attempt($credentials))
    {
        return redirect()->intended('dashboard');
    }else{
        redirect()->back()->with('error','Paramètre de connexion non reconnu');
    }

         // return view('auth.login');

    }
}