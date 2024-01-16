<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDaftarUlangController;
use App\Http\Controllers\AdminGaleriController;
use App\Http\Controllers\AdminInfoController;
use App\Http\Controllers\AdminKelasController;
use App\Http\Controllers\AdminSiswaBaruController;
use App\Http\Controllers\AdminUserAdminController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });
    Route::prefix('admin')->as('admin.')->group(function () { //admin
        Route::controller(AdminKelasController::class)->group(function () {
            Route::get('/kelas', 'index')->name('kelas.index');
            Route::post('/kelas/store', 'store')->name('kelas.store');
            Route::post('/kelas/{kelas}/update', 'update')->name('kelas.update');
            Route::get('/kelas/{kelas}', 'destroy')->name('kelas.destroy');
        });
        Route::controller(AdminSiswaBaruController::class)->group(function () {
            Route::get('/siswa', 'index')->name('siswa.index');
            Route::get('/siswa/{siswa}/confirmation', 'confirmation')->name('siswa.confirmation');
        });
        Route::controller(AdminDaftarUlangController::class)->group(function () {
            Route::get('/daftar_ulang', 'index')->name('daftar_ulang.index');
        });
        Route::controller(AdminGaleriController::class)->group(function () {
            Route::get('/galeri', 'index')->name('galeri.index');
            Route::post('/galeri/store', 'store')->name('galeri.store');
            Route::post('/galeri/{galeri}/update', 'update')->name('galeri.update');
            Route::get('/galeri/{galeri}/destroy', 'destroy')->name('galeri.destroy');
        });
        Route::controller(AdminInfoController::class)->group(function () {
            Route::get('/info', 'index')->name('info.index');
        });
        Route::controller(AdminUserAdminController::class)->group(function () {
            Route::get('/user', 'index')->name('user.index');
        });
    });
    Route::prefix('siswa')->group(function () { //siswa
        Route::controller(AdminKelasController::class)->group(function () {
            Route::get('/admin/kelas', 'index')->name('admin.kelas');
        });
    });
});
