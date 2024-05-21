<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;


Route::get('/', [UsersController::class, 'index'])->name('users.index');  //登録の画面の話
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');  //登録の画面の話
Route::post('/users', [UsersController::class, 'store'])->name('users.store'); //登録のバック-処理の話
Route::get('/login', [UsersController::class, 'loginForm'])->name('users.login');
Route::post('/login', [UsersController::class, 'login'])->name('users.login'); 