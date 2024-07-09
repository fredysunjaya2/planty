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

Route::get('/productDetail', function(){
    return view('product_detail');
});

Route::get('/paymentDetail', function(){
    return view('payment_detail');
});