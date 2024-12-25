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

Route::get('/posts', function () {
    return view('posts', ['title' => 'Halaman Blog', 'posts' => [
        [
            'title' =>  'judul 1',
            'author' => 'M Zaky Nugraha A R',
            'body' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni ratione possimus velit, i
            ure facere labore vitae fugiat quo, sit exercitationem fuga minus, sed aut nisi ullam hic illo sequi a
            ccusantium distinctio veniam. Minus veniam doloribus harum voluptatibus sed, asperiores numquam ad 
            sunt sapiente aliquid voluptates at aspernatur est unde sint magni consectetur mollitia. Dignissimos,
             deleniti maxime? Magni aperiam placeat quam amet. Molestiae, mollitia illo maxime recusandae nisi amet 
             ipsa eveniet est facilis fugit ratione id corrupti expedita vitae quidem culpa odit nesciunt officia 
             deleniti autem. Iusto vitae, sapiente molestias, tenetur aspernatur harum totam rem aut exercitationem 
             laboriosam, sequi nobis eum veniam est vel repellendus nemo reiciendis incidunt? Nobis, molestiae porro'
        ],
        [
            'title' =>  'judul 2',
            'author' => 'M Zaky Nugraha A R',
            'body' => ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint magni ratione possimus velit, i
            ure facere labore vitae fugiat quo, sit exercitationem fuga minus, sed aut nisi ullam hic illo sequi a
            ccusantium distinctio veniam. Minus veniam doloribus harum voluptatibus sed, asperiores numquam ad 
            sunt sapiente aliquid voluptates at aspernatur est unde sint magni consectetur mollitia. Dignissimos,
             deleniti maxime? Magni aperiam placeat quam amet. Molestiae, mollitia illo maxime recusandae nisi amet 
             ipsa eveniet est facilis fugit ratione id corrupti expedita vitae quidem culpa odit nesciunt officia 
             deleniti autem. Iusto vitae, sapiente molestias, tenetur aspernatur harum totam rem aut exercitationem 
             laboriosam, sequi nobis eum veniam est vel repellendus nemo reiciendis incidunt? Nobis, molestiae porro'
        ]
    ]

]);
});