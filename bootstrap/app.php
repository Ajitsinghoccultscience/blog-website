<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'admin.auth' => \App\Http\Middleware\AdminAuth::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Redirect 404 errors to the 404 page route
        $exceptions->render(function (\Illuminate\Database\Eloquent\ModelNotFoundException $e, \Illuminate\Http\Request $request) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Resource not found.'], 404);
            }
            
            // Don't redirect if already on the 404 page to avoid redirect loops
            if ($request->path() !== '404') {
                return redirect()->route('blog.404');
            }
        });
        
        $exceptions->render(function (\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e, \Illuminate\Http\Request $request) {
            // Don't redirect sitemap.xml requests
            if ($request->path() === 'sitemap.xml') {
                return null; // Let Laravel handle it normally
            }
            
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Page not found.'], 404);
            }
            
            // Don't redirect if already on the 404 page to avoid redirect loops
            if ($request->path() !== '404') {
                return redirect()->route('blog.404');
            }
        });
    })->create();
