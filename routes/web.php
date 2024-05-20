<?php

use Illuminate\Support\Facades\Route;

// Dashboard route
Route::get('/dashboard', function () {
    return view('pages.app.dashboard-simpadu', ['type_menu' => '']);
})->name('dashboard');

// Login route
Route::get('/', function () {
    return view('pages.auth.auth-login');
})->name('login');

// Register route
Route::get('/register', function() {
    return view('pages.auth.auth-register');
})->name('register');

Route::get('/forgot', function() {
    return view('pages.auth.auth-forgot-password');
})->name('forgot');


Route::get('/reset', function() {
    return view('pages.auth.auth-reset-password');
})->name('reset');