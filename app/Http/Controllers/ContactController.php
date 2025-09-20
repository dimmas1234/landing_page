<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'message' => 'required|string|max:500',
        ]);

        // Untuk contoh: simpan ke log atau database
        // dd($request->all()); // debugging

        // Misalnya kirim email atau simpan ke database
        // Contact::create($request->all());

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
