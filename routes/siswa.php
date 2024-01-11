<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'siswa'])->prefix('siswa')->group(function () {
    Route::get('/', function () {
        return view('siswa.index');
    });
});
