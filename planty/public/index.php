<?php

use Illuminate\Http\Request;

// Set memory limit to 256MB
ini_set('memory_limit', '256M');
set_time_limit(60); // Set waktu eksekusi maksimum menjadi 60 detik

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
