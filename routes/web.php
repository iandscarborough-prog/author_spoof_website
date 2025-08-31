<?php

use Illuminate\Support\Facades\Route;

//Route::controller()

Route::get('/', function () {
    return view('hello');
});

Route::get('/', function () {
    return view('home');
});

Route::fallback(function () {
    return view('404');
});
