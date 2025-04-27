<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;



Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
