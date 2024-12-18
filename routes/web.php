<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\ExchangeRateController;
Route::get('/', [ExchangeRateController::class, 'index']);
Route::get('/post', [PostController::class, 'index2']);
Route::post('/post', [PostController::class, 'store']);

Route::get('/register', [RegController::class, 'index']);
Route::post('/register', [RegController::class, 'register']);

Route::get('/post/{id}', [PostController::class, 'index_post']);
