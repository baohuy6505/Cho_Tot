<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PostController;

//ADMIN ROUTES POSTS
Route::get('/posts', [PostController::class, 'listPosts'])->name('posts.list');
Route::post('/posts/update/{id}',[PostController::class, 'updatePost'])->name('posts.update');
Route::get('/posts/detail/{id}',[PostController::class, 'detailPost'])->name('posts.detail');
Route::post('/posts/delete/{id}',[PostController::class, 'deletePost'])->name('posts.delete');