<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/tutorial', function () {
    return view('index');
});

Route::get('/diseases', function () {
    return view('disease');
});
Route::get('/donts', function(){
    return view('donts');
});