<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;



Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/privada', 'privada')->middleware('auth')->name('privada');
Route::view('publica', 'publica')->name('publica');

// INICIO DE SESIÓN Y REGISTRO
Route::post('/validationRegister', [LoginController::class, 'validationRegister'])->name('validationRegister');
Route::post('/validationLogin', [LoginController::class, 'validationLogin'])->name('validationLogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

