<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){

        return view('auth.login');
    }
    public function doLogin(LoginRequest $loginRequest)
    {
         $credentials = $loginRequest->validated();

         if(Auth::attempt($credentials)){

            $loginRequest->session()->regenerate();
            return redirect()->intended(route('people.index'));
         }
         return to_route('auth.login')->withErrors([
            'email' => "Email invalid"

         ])->onlyInput('email');
    }
    public function logout()
    {
        Auth::logout();
        return to_route('auth.login');
    }
}
