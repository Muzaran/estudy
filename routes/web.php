<?php

use App\Models\Posts;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// membuat class manual


Route::get('/', function () {
    return view('home', ['title' => 'Halaman Home', 'nama' => 'Muhamad Zaky Nugraha Aulia Rahmat']);
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



Route::get('/posts', function () {
    return view('posts', ['title' => 'Halaman Blog', 'posts' => Posts:: all()

]);
});



Route::get('/posts/{post:slug}', function(Posts $post) { 
   
    
    // $post = Posts::find($slug);
    //     return view('post', ['title' => 'Single post', 'post' => $post]);
    //$post = Posts::find($slug);
        return view('post', ['title' => 'Single post', 'post' => $post]);
    
});

Route::get('/authors/{user:username}', function(User $user) { 
   
        return view('posts', ['title' => count($user->posts) . ' Artikels by : '. $user->name, 'posts' => $user->posts]);
    
});