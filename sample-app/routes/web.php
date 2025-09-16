<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductControlle; 
Route::get('/', function () {
    return redirect('/product');
});
Route::resource('product', \App\Http\Controllers\ProductController::class);
