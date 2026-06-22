<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;

Route::get("/", [PageController::class, 'index'])->name('home');

Route::resource('posts', PostController::class);

