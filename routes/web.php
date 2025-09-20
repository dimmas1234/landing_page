<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('landing');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/login', function () {
    return view('login');
})->name('login');
