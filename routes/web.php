<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user', UserController::class)
    ->only(['edit', 'update'])
    ->middleware('auth');
Route::resource('products', ProductController::class);
