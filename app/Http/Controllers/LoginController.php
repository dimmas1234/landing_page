<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    // tampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('crud');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    // logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
