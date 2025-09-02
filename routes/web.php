<?php

use Illuminate\Support\Facades\Route;

//Route::controller()

Route::get('/', function () {
    return view('home');
});

Route::get('/books', function () {
    return view('books');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::fallback(function () {
    return view('404');
});
