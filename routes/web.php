<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); })->middleware('auth');
Route::get('/users', function () { return view('pages_user.users'); })->middleware('auth');
Route::get('/users/create', function () { return view('pages_user.create_user'); })->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
