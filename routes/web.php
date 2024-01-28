<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/list-blog', 'blog')->name('blog');
    Route::get('/blog/{post:slug}', 'post')->name('post');
    Route::get('/galeri', 'galeri')->name('galeri');
});
require __DIR__ . '/auth.php';
require __DIR__ . '/home.php';
