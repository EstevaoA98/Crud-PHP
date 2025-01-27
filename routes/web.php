<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/contact', [EventController::class, 'contact']);

Route::get('/product', [EventController::class,'products']);