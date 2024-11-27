<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    
    return view('posts', [
        'title' => 'Blog', 
        'posts' => Post::filter(request(['search','category']))->latest()->paginate(9)->withQueryString()
    ]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category','author');
   return view('posts', ['title' => ' Article in '. $category->name , 'posts' => $category->posts]);
});

Route::get('/doroos', function () {
    return view('doroos', ['title' => 'Doroos Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});