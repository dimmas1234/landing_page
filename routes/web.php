<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('landing'); // kalau mau landing page
});

// Contact form
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard (hanya bisa diakses setelah login)
Route::get('/crud', function () {
    return view('crud');
})->middleware('auth');
