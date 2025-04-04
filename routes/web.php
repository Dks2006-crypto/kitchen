<?php

use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;

Route::namespace('Posts')->prefix('/')->name('posts.')->group(function(){
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/post/{id}/show', [PostController::class, 'show'])->name('detail');
});
