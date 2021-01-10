<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\{Auth, Route};

Route::get(
    '/',
    [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']
)->name('index');

Route::get(
    '/home',
    [App\Http\Controllers\HomeController::class, 'index']
)->name('home');

Route::get('hotels', [SearchController::class, 'index'])->name('hotels');
Auth::routes();
