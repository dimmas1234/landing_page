<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // 🚀 Contoh sederhana (tanpa database)
        // Misalnya login berhasil kalau email & password cocok dengan ini
        if ($request->email === 'admin@example.com' && $request->password === '123456') {
            return redirect()->route('dashboard')->with('success', 'Login berhasil!');
        }

        // kalau gagal
        return back()->withErrors(['login' => 'Email atau password salah']);
    }
}
