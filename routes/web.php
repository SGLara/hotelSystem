<?php

use Illuminate\Support\Facades\{Auth, Route};

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
