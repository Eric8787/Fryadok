<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\RegisterController;
use app\Http\Controllers\SessionsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
Route::get('/login', [SessionsController::class, 'create'])->name('login.index');