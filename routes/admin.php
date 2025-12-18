<?php

use App\Http\Controllers\admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\Homecontroller;
use App\Http\Middleware\AdminMiddleware;

Route::middleware(['auth', AdminMiddleware::class])
    ->prefix('admin') 
    // ->name('admin.') 
    ->group(function () {
        //ADMIN ROUTES HOME
        Route::get('/home', [Homecontroller::class, 'index'])->name('home');

        //ADMIN ROUTES ROLE
        Route::get('/role', [Homecontroller::class, 'roleLists'])->name('role');
        Route::get('/role/create', [Homecontroller::class, 'create'])->name('role.create');
        Route::post('/role/store', [Homecontroller::class, 'store'])->name('role.store');
        Route::delete('/role/delete/{id}', [Homecontroller::class, 'delete'])->name('role.delete');

        //ADMIN ROUTES CATEGORY
        Route::get('/category', [CategoryController::class, 'index'])->name('category.list');
        Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::delete('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

        //ADMIN ROUTES POSTS
        Route::get('/posts', [PostController::class, 'listPosts'])->name('posts.list');
        Route::post('/posts/update/{id}', [PostController::class, 'updatePost'])->name('posts.update');
        Route::get('/posts/detail/{id}', [PostController::class, 'detailPost'])->name('posts.detail');
        Route::delete('/posts/delete/{id}', [PostController::class, 'deletePost'])->name('posts.delete');
    });
