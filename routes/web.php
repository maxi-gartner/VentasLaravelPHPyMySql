<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');})->name('home');

Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('administrador');