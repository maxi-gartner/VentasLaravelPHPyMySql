<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('home');
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/', function () { return view('admin'); });


Route::get('/', [App\Http\Controllers\UsersReadController::class, 'index'])->name('admin.index')->middleware('auth');