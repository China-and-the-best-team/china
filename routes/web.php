<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\ExchangeRateController;
Route::get('/', [ExchangeRateController::class, 'index']);
Route::get('/post', [PostController::class, 'index2']);
Route::post('/post', [PostController::class, 'store']);

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/post/{id}', [PostController::class, 'index_post']);
