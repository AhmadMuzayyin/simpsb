<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin
'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
});
