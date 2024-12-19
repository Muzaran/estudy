<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Halaman Home']);
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Halaman Dashboard']);
});

Route::get('/profile', function () {
    return view('profile', [ 'title' => 'Halaman About','nama' => 'Muhamad Zaky Nugraha Aulia Rahmat' ]);
});

Route::get('/login', function () {
    return view('login', ['title' => 'Halaman Login']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Halaman Contact']);
});