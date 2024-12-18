<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegController;

Route::get('/', [PostController::class, 'index']);
Route::post('/post', [PostController::class, 'store']);

