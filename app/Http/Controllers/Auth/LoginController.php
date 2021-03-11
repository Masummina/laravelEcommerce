<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('Auth.login');
    }
    public function authenticate(LoginRequest $request){
      $data = $request->only('email', 'password');

         if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
