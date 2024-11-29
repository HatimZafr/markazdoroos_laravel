<?php

use App\Models\Post;
use App\Models\Paket;

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page',
    'pakets' => Paket::with('doroos.dars') // Menarik semua Paket dengan relasi Doroos dan Dars terkait
            ->latest() // Urutkan berdasarkan yang terbaru
            ->take(3), // Paginate hasil
    ]);
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

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'verify'])->name('auth.verify');

Route::group(['middleware' => 'auth:admin'], function () {
    Route::get('/admin/home', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
});
Route::group(['middleware' => 'auth:user'], function () {
    Route::get('/user/home', [\App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');