<?php

use App\Models\Post;
use App\Models\Paket;

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
    // Ambil semua Paket beserta Doroos dan Dars terkait
    return view('doroos', [
        'title' => 'Doroos Page',
        'pakets' => Paket::with('doroos.dars') // Menarik semua Paket dengan relasi Doroos dan Dars terkait
            ->latest() // Urutkan berdasarkan yang terbaru
            ->paginate(8), // Paginate hasil
    ]);
});



Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});