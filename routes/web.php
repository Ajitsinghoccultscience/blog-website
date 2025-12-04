<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\AuthController;
use App\Models\Post;
use App\Models\Category;

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

// Dynamic Sitemap - MUST come before catch-all route
Route::get('/sitemap.xml', function () {
    $posts = Post::where('is_published', true)
        ->orderBy('updated_at', 'desc')
        ->get();
    
    // Categories - commented out for now, will use in future
    // $categories = Category::where('is_active', true)
    //     ->orderBy('updated_at', 'desc')
    //     ->get();
    
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n" . view('sitemap', compact('posts'))->render();
    
    return response($xml)
        ->header('Content-Type', 'text/xml');
})->name('sitemap');

// 404 page route - MUST come before catch-all route
Route::get('/404', function () {
    return response()->view('errors.404', [], 404);
})->name('blog.404');

Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.post')->where('slug', '.*');
