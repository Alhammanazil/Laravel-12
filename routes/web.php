<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// home
Route::get('/home', function () {
    return view('home');
});

// about
Route::get('/about', function () {
    return view('about');
});
