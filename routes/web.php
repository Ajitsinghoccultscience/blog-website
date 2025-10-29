<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\AuthController;

// Admin authentication routes (public) - MUST come before catch-all routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Admin routes (protected) - MUST come before catch-all routes
Route::prefix('admin')->name('admin.')->middleware('admin.auth')->group(function () {
    // Dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    // Category management routes
    Route::resource('categories', CategoryController::class);
    Route::post('categories/generate-slug', [CategoryController::class, 'generateSlug'])->name('categories.generate-slug');
    
    // Post management routes
    Route::resource('posts', PostController::class)->except(['show']);
    Route::post('posts/generate-slug', [PostController::class, 'generateSlug'])->name('posts.generate-slug');
    Route::post('posts/{post}/toggle-status', [PostController::class, 'toggleStatus'])->name('posts.toggle-status');
    Route::post('posts/upload-image', [PostController::class, 'uploadImage'])->name('posts.upload-image');
});

// Blog routes - MUST come after admin routes to avoid conflicts
Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('/about', [BlogController::class, 'about'])->name('blog.about');
Route::get('/search', [BlogController::class, 'search'])->name('blog.search');
Route::get('/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.post');
