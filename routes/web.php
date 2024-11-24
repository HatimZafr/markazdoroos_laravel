<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});