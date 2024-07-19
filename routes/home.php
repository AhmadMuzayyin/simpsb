<?php

use App\Http\Controllers\AdminDaftarUlangController;
use App\Http\Controllers\AdminGaleriController;
use App\Http\Controllers\AdminInfoController;
use App\Http\Controllers\AdminKelasController;
use App\Http\Controllers\AdminPendaftaranController;
use App\Http\Controllers\AdminSiswaBaruController;
use App\Http\Controllers\AdminUserAdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SiswaDaftarUlangController;
use App\Http\Controllers\SiswaPendaftaranController;
use App\Http\Controllers\SiswaUploadDokumenController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });
    Route::prefix('admin')->as('admin.')->group(function () { //admin
        Route::controller(AdminKelasController::class)->group(function () {
            Route::get('/kelas', 'index')->name('kelas.index');
            Route::post('/kelas/store', 'store')->name('kelas.store');
            Route::post('/kelas/{kelas}/update', 'update')->name('kelas.update');
            Route::get('/kelas/{kelas}', 'destroy')->name('kelas.destroy');
        });
        Route::controller(AdminPendaftaranController::class)->group(function () {
            Route::get('/pendaftaran', 'index')->name('pendaftaran.index');
            Route::post('/pendaftaran/store', 'store')->name('pendaftaran.store');
            Route::post('/pendaftaran/{pendaftaran}/update', 'update')->name('pendaftaran.update');
            Route::get('/pendaftaran/{pendaftaran}/destroy', 'destroy')->name('pendaftaran.destroy');
        });
        Route::controller(AdminSiswaBaruController::class)->group(function () {
            Route::get('/siswa', 'index')->name('siswa.index');
            Route::get('/siswa/{siswa}/confirmation', 'confirmation')->name('siswa.confirmation');
            Route::get('/siswa/{siswa}/notconfirm', 'notconfirm')->name('siswa.notconfirm');
            Route::get('/siswa/{siswa}/perbaiki_data', 'perbaiki_data')->name('siswa.perbaiki_data');
            Route::get('/siswa/{siswa}/perbaiki_dokumen', 'perbaiki_dokumen')->name('siswa.perbaiki_dokumen');
            Route::get('/siswa/{siswa}/download', 'download')->name('siswa.download');
            Route::get('/siswa/{siswa}/dokumen_download', 'dokumen_download')->name('siswa.dokumen_download');
            Route::get('siswa/lulus/{siswa}', 'lulus')->name('siswa.lulus');
        });
        Route::controller(AdminDaftarUlangController::class)->group(function () {
            Route::get('/daftar_ulang', 'index')->name('daftar_ulang.index');
        });
        Route::controller(AlumniController::class)->as('alumni.')->group(function () {
            Route::get('alumni', 'index')->name('index');
            Route::get('alumni/download/{siswa}', 'download')->name('download');
        });
        Route::controller(AdminGaleriController::class)->group(function () {
            Route::get('/galeri', 'index')->name('galeri.index');
            Route::post('/galeri/store', 'store')->name('galeri.store');
            Route::post('/galeri/{galeri}/update', 'update')->name('galeri.update');
            Route::get('/galeri/{galeri}/destroy', 'destroy')->name('galeri.destroy');
        });
        Route::controller(AdminInfoController::class)->group(function () {
            Route::get('/info', 'index')->name('info.index');
            Route::post('/info/store', 'store')->name('info.store');
            Route::post('/info/{post}/update', 'update')->name('info.update');
            Route::get('/info/{post}/destroy', 'destroy')->name('info.destroy');

            Route::post('/kategori/store', 'category_store')->name('kategori.store');
            Route::post('/kategori/{category}/update', 'category_update')->name('kategori.update');
            Route::get('/kategori/{category}/destroy', 'category_destroy')->name('kategori.destroy');
        });
        Route::controller(AdminUserAdminController::class)->group(function () {
            Route::get('/user', 'index')->name('user.index');
            Route::post('/user/store', 'store')->name('user.store');
            Route::post('/user/{user}/update', 'update')->name('user.update');
            Route::get('/user/{user}/destroy', 'destroy')->name('user.destroy');
        });
    });
    Route::prefix('siswa')->as('siswa.')->group(function () { //siswa
        Route::controller(SiswaPendaftaranController::class)->group(function () {
            Route::get('/pendaftaran', 'index')->name('pendaftaran.index');
            Route::post('/pendaftaran/store', 'store')->name('pendaftaran.store');
            Route::post('/pendaftaran/biodata', 'biodata')->name('pendaftaran.biodata');
            Route::post('/pendaftaran/wali', 'wali')->name('pendaftaran.wali');
            Route::post('/pendaftaran/sekolah', 'sekolah')->name('pendaftaran.sekolah');
            Route::post('/pendaftaran/{siswa}/update', 'update')->name('pendaftaran.update');
            Route::get('/pendaftaran/{siswa}/destroy', 'destroy')->name('pendaftaran.destroy');
        });
        Route::controller(SiswaUploadDokumenController::class)->group(function () {
            Route::get('/dokumen', 'index')->name('dokumen.index');
            Route::post('/dokumen/store', 'store')->name('dokumen.store');
            Route::post('/dokumen/{siswa}/update', 'update')->name('dokumen.update');
            Route::get('/dokumen/{siswa}/destroy', 'destroy')->name('pendaftaran.destroy');
        });
        Route::controller(SiswaDaftarUlangController::class)->group(function () {
            Route::get('/daftar_ulang', 'index')->name('daftar_ulang.index');
            Route::post('/daftar_ulang/store/{siswa}', 'store')->name('daftar_ulang.store');
        });
    });
    Route::controller(NotificationController::class)->group(function () {
        Route::get('/notifications/{user}/read', 'read')->name('notifications.read');
    });
});
