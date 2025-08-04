<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/my-blog');
});

Route::get('/', function () {
    return redirect('/my-blog');
});

Route::get('/my-blog/{post}', [PostController::class, 'show'])->name('my-single-post');
Route::get('/my-blog', [PostController::class, 'posts'])->name('all-my-posts');
Route::get('/add-post', [PostController::class, 'createPost'])->name('add-post');
Route::post('/add-post', [PostController::class, 'store'])->name('store-post');
Route::delete('/my-blog/{post}', [PostController::class, 'deletePost'])->name('delete-post');
Route::get('/api/posts', [PostController::class, 'getPosts'])->name('get-posts');
