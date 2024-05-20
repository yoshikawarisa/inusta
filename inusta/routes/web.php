<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

//Dashboardボタンを押した時に表示させたいホーム画面へ飛ばすルーティング
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/posts/store', [UsersController::class, 'store'])->name('posts.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
