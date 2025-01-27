<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('/product', function(){
    return view('products');
});