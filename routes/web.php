<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile', ['nama' => 'Muhamad Zaky Nugraha Aulia Rahmat' ]);
});

Route::get('/login', function () {
    return view('login');
});
