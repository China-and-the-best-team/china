<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);
Route::post('/post', [PostController::class, 'store']);

Route::get('/where-to-go', function () {
    return view('where-to-go');
});

Route::get('/register', function () {
    return view('reg');
});

Route::get('/post', function () {
    return view('post-create');
});
