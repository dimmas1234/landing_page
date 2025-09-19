<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/login', [AuthController::class, 'login'])->name('login');

// halaman tujuan setelah login
Route::get('/crud', function () {
    return view('crud'); // bikin file resources/views/dashboard.blade.php
})->name('crud');
