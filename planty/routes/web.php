<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/diseases', function () {
    return view('disease');
});