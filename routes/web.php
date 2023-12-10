<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Puclic routes
Route::get('/', [PostController::class, 'index'])->name('home');
