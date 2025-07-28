<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-blog/{id}', [PostController::class, 'show'])->name('my-single-post');
Route::get('/my-blog', [PostController::class, 'posts'])->name('all-my-posts');
Route::get('/api/posts', [PostController::class, 'getPosts'])->name('get-posts');
