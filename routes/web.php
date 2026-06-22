<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get("/", function () {
    $title = 'Home';
    return view('welcome', compact('title'));
})->name('home');

Route::resource('posts', PostController::class);

