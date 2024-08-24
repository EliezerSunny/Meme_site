<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
 //   return view('welcome');
//});


Route::get('/', [PostController::class, 'index'])->name('/');


Route::get('/add_post', [PostController::class, 'addpost'])->name('add_post');
Route::post('/add_post', [PostController::class, 'uploadpost'])->name('upload_post');


Route::get('/edit_post', [PostController::class, 'editpost'])->name('edit_post');
Route::put('/edit_post/{posts}', [PostController::class, 'updatepost'])->name('update_post');





Route::get('/add_post_comment', [PostController::class, 'addpostcomment'])->name('add_post_comment');
Route::post('/upload_post_comment', [PostController::class, 'uploadpostcomment'])->name('upload_post_comment');


Route::get('/edit_post_comment', [PostController::class, 'editpostcomment'])->name('edit_post_comment');
Route::put('/edit_post_comment/{postcomments}', [PostController::class, 'updatepostcomment'])->name('update_post_comment');
