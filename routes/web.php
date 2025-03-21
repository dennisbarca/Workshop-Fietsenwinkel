<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('page.home');

Route::get('/signup', [AuthController::class, 'registerView'])->name('register');
Route::post('/signup', [AuthController::class, 'register'])->name('auth.register');

Route::get('/signin', [AuthController::class, 'loginView'])->name('login');
Route::post('/signin', [AuthController::class, 'login'])->name('auth.login');

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
