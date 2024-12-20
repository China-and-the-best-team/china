<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExchangeRateController;
use App\Http\Controllers\CommentController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

Route::get('/', [ExchangeRateController::class, 'index']);
Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/post', [PostController::class, 'index2']);
Route::post('/post', [PostController::class, 'store']);
Route::get('/where-to-go', function(){
    $isLoggedIn = Auth::check();
    $posts = Post::groupBy('id', 'desc')->get();
    return view('where-to-go', compact('posts', 'isLoggedIn'));
})->name('where-to-go');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('show');
Route::post('/posts/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
