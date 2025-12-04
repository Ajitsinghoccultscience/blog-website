<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    //makee array where those not start with /admin will be redirected
    
    // Skip redirection if path starts with /admin
    if (!preg_match('#^/admin(/|$)#', $uri)) {
        // Skip if it's a file (e.g., ends in .css, .js, .jpg, .xml, etc.)
        if (!preg_match('/\.[a-zA-Z0-9]+$/', $uri) && substr($uri, -1) !== '/') {
            $query = $_SERVER['QUERY_STRING'];
            $redirect = $uri . '/';
            if (!empty($query)) {
                $redirect .= '?' . $query;
            }
            header("Location: $redirect", true, 301);
            exit;
        }
    }


}


use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
