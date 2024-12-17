<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::resource('user', UserController::class)
    ->only(['edit', 'update'])
    ->middleware('auth');
