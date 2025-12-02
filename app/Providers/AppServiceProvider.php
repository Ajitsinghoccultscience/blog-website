<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\CategoryComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share categories with all views that use the custom navbar
        View::composer('components.custom-navbar', CategoryComposer::class);
        
        // Also share categories with the homepage layout to ensure they're available everywhere
        View::composer('layouts.homepage', CategoryComposer::class);
        
        // Share categories with error views (404, etc.) to ensure navbar works properly
        View::composer('errors.*', CategoryComposer::class);
    }
}
