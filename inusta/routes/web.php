<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DogsController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\QuestionCommentsController;
use App\Http\Controllers\PostsController;

Route::get('/', [UsersController::class, 'index'])->name('users.index');  //登録の画面の話
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');  //登録の画面の話
Route::post('/users', [UsersController::class, 'store'])->name('users.store'); //登録のバック-処理の話
Route::get('/users/edit', [UsersController::class, 'edit'])->name('users.edit');  //登録の画面の話
Route::put('/users', [UsersController::class, 'update'])->name('users.update'); //登録のバック-処理の話
Route::get('/login', [UsersController::class, 'loginForm'])->name('login');
Route::post('/login', [UsersController::class, 'login'])->name('users.login'); 
Route::post('/logout', [UsersController::class, 'logout'])->name('logout');


Route::get('/dogs/index', [DogsController::class, 'index'])->name('dogs.index'); //犬一覧
Route::get('/dogs/create', [DogsController::class, 'create'])->name('dogs.create');
Route::post('/dogs', [DogsController::class, 'store'])->name('dogs.store'); //登録のバック-処理の話
Route::get('/dogs/{id}/edit', [DogsController::class, 'edit'])->name('dogs.edit');  //登録の画面の話
Route::put('/dogs/{id}', [DogsController::class, 'update'])->name('dogs.update'); //登録のバック-処理の話
Route::get('/dogs/{id}/show', [DogsController::class, 'show'])->name('dogs.show');  //登録の画面の話

Route::get('/questions/index', [QuestionsController::class, 'index'])->name('questions.index'); //質問一覧
Route::get('/questions/create', [QuestionsController::class, 'create'])->name('questions.create');
Route::post('/questions', [QuestionsController::class, 'store'])->name('questions.store'); //登録のバック-処理の話
Route::get('/questions/{id}/show', [QuestionsController::class, 'show'])->name('questions.show');  //登録の画面の話
Route::get('/questions/{id}/edit', [QuestionsController::class, 'edit'])->name('questions.edit');  //登録の画面の話
Route::put('/questions/{id}', [QuestionsController::class, 'update'])->name('questions.update'); //登録のバック-処理の話

Route::post('/questions/{questionId}/comments', [QuestionCommentsController::class, 'store'])->name('question_comments.store'); 
Route::delete('/comments/{id}', [QuestionCommentsController::class, 'destroy'])->name('question_comments.destroy');  //削除の話

Route::get('/posts/index', [PostsController::class, 'index'])->name('posts.index'); //質問一覧