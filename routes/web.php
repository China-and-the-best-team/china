<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegController;

Route::get('/register', [RegController::class, 'index']);
Route::post('/register', [RegController::class, 'register']);

