<?php

use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;

Route::namespace('Posts')->name('posts.')->group(function(){
    Route::get('/', [PostController::class, 'index'])->name('index');
});
