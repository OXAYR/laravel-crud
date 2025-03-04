<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/product', [ProductController::class, 'create']);
Route::get('/product', [ProductController::class, 'getAll']);
Route::put('/product/{product}/edit', [ProductController::class, 'edit']);
Route::get('/product/{product}',  [ProductController::class, 'getSingleProduct']);
Route::delete('/product/{product}', [ProductController::class, 'delete']);