<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');})->name('home');

Auth::routes();

Route::get('/usersList', [App\Http\Controllers\UsersController::class, 'List'])->name('Administración de usuarios');
Route::get('/usersRoles', [App\Http\Controllers\UsersRolesController::class, 'Roles'])->name('Administración de usuarios');