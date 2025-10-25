<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Blog routes
Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/post/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/about', [BlogController::class, 'about'])->name('blog.about');
