<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('admin')->group(function(){
    Route::get('/', function () {
        return view('admin.index');
    });
});
Route::prefix('siswa')->group(function(){
    Route::get('/', function () {
        return view('siswa.index');
    });
});