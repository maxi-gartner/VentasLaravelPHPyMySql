<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('home');
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/', function () { return view('admin'); });


Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/users', [App\Http\Controllers\UsersReadController::class, 'index'])->name('users.index')->middleware('auth');