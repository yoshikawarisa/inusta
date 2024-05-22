<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DogsController;

Route::get('/', [UsersController::class, 'index'])->name('users.index');  //登録の画面の話
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');  //登録の画面の話
Route::post('/users', [UsersController::class, 'store'])->name('users.store'); //登録のバック-処理の話
Route::get('/users/edit', [UsersController::class, 'edit'])->name('users.edit');  //登録の画面の話
Route::put('/users', [UsersController::class, 'update'])->name('users.update'); //登録のバック-処理の話
Route::get('/login', [UsersController::class, 'loginForm'])->name('login');
Route::post('/login', [UsersController::class, 'login'])->name('users.login'); 
Route::post('/logout', [UsersController::class, 'logout'])->name('logout');

Route::get('/dogs/index', [DogsController::class, 'index'])->name('dogs.index'); //犬一覧