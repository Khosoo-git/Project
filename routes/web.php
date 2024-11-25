<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get("/", [WebController::class,"index"])->name("home");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
