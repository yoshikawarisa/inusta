<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DogsController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\QuestionCommentsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostCommentsController;

//ユーザー機能
Route::get('/', [UsersController::class, 'index'])->name('users.index');  //登録の画面の話
Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');  //登録の画面の話
Route::post('/users', [UsersController::class, 'store'])->name('users.store'); //登録のバック-処理の話
Route::get('/users/edit', [UsersController::class, 'edit'])->name('users.edit');  //登録の画面の話
Route::put('/users', [UsersController::class, 'update'])->name('users.update'); //登録のバック-処理の話
Route::get('/login', [UsersController::class, 'loginForm'])->name('login');
Route::post('/login', [UsersController::class, 'login'])->name('users.login'); 
Route::post('/logout', [UsersController::class, 'logout'])->name('logout');

//犬プロフィール機能
Route::get('/dogs/index', [DogsController::class, 'index'])->name('dogs.index'); //犬一覧
Route::get('/dogs/create', [DogsController::class, 'create'])->name('dogs.create');
Route::post('/dogs', [DogsController::class, 'store'])->name('dogs.store'); //登録のバック-処理の話
Route::get('/dogs/{id}/edit', [DogsController::class, 'edit'])->name('dogs.edit');  //登録の画面の話
Route::put('/dogs/{id}', [DogsController::class, 'update'])->name('dogs.update'); //登録のバック-処理の話
Route::get('/dogs/{id}/show', [DogsController::class, 'show'])->name('dogs.show');  //登録の画面の話

//質問機能
Route::get('/questions/index', [QuestionsController::class, 'index'])->name('questions.index'); //質問一覧
Route::get('/questions/create', [QuestionsController::class, 'create'])->name('questions.create');
Route::post('/questions', [QuestionsController::class, 'store'])->name('questions.store'); //登録のバック-処理の話
Route::get('/questions/{id}/show', [QuestionsController::class, 'show'])->name('questions.show');  //登録の画面の話
Route::get('/questions/{id}/edit', [QuestionsController::class, 'edit'])->name('questions.edit');  //登録の画面の話
Route::put('/questions/{id}', [QuestionsController::class, 'update'])->name('questions.update'); //登録のバック-処理の話
Route::post('/questions/{id}/toggle-status', [QuestionsController::class, 'toggleStatus'])->name('questions.toggleStatus'); //

//質問ーコメント機能
Route::post('/questions/{questionId}/comments', [QuestionCommentsController::class, 'store'])->name('question_comments.store'); 
Route::delete('/question-comments/{comment}', 'QuestionCommentController@destroy')->name('question_comments.destroy');


//投稿機能
Route::get('/posts/index', [PostsController::class, 'index'])->name('posts.index'); //一覧
Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostsController::class, 'store'])->name('posts.store'); //登録のバック-処理の話
Route::get('/posts/{id}/show', [PostsController::class, 'show'])->name('posts.show');  //登録の画面の話
Route::get('/posts/{id}/edit', [PostsController::class, 'edit'])->name('posts.edit');  //登録の画面の話
Route::put('/posts/{id}', [PostsController::class, 'update'])->name('posts.update'); //登録のバック-処理の話

//投稿ーコメント機能
Route::post('/posts/{postId}/comments', [PostCommentsController::class, 'store'])->name('post_comments.store'); 
Route::delete('/comments/{id}', [PostCommentsController::class, 'destroy'])->name('post_comments.destroy');  //削除の話