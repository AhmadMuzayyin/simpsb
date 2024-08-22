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
use App\Http\Controllers\SPK\AspekController;
use App\Http\Controllers\SPK\HasilAkhirController;
use App\Http\Controllers\SPK\KriteriaController;
use App\Http\Controllers\SPK\PenilaianController;
use App\Http\Controllers\SPK\PerhitunganController;
use App\Http\Controllers\SPK\RekapController;
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
        // data master
        Route::controller(KriteriaController::class)->group(function () {
            Route::get('/kriteria', 'index')->name('kriteria.index');
            Route::post('/kriteria/store', 'store')->name('kriteria.store');
            Route::post('/kriteria/{kriteria}/update', 'update')->name('kriteria.update');
            Route::delete('/kriteria/{kriteria}/destroy', 'destroy')->name('kriteria.destroy');
            Route::get('/kriteria/getKriteria', 'getKriteria')->name('kriteria.getKriteria');
        });
        Route::controller(AspekController::class)->group(function () {
            Route::get('/aspek', 'index')->name('aspek.index');
            Route::post('/aspek/store', 'store')->name('aspek.store');
            Route::post('/aspek/{aspek}/update', 'update')->name('aspek.update');
            Route::get('/aspek/{aspek}/destroy', 'destroy')->name('aspek.destroy');
        });
        Route::controller(PenilaianController::class)->group(function () {
            Route::get('/penilaian', 'index')->name('penilaian.index');
            Route::get('/penilaian/profiling', 'profiling')->name('penilaian.profiling');
            Route::post('/penilaian/{penilaian}/update', 'update')->name('penilaian.update');
        });
        // perhitungan
        Route::controller(PerhitunganController::class)->group(function () {
            Route::get('/perhitungan', 'index')->name('perhitungan.index');
            Route::get('/perhitungan/aspek_keluarga', 'calcAK')->name('perhitungan.calcAK');
            Route::get('/perhitungan/aspek_sosial_ekonomi', 'calcASE')->name('perhitungan.calcASE');
            Route::get('/perhitungan/aspek_akademik', 'calcAA')->name('perhitungan.calcAA');
        });
        Route::controller(HasilAkhirController::class)->group(function () {
            Route::get('/hasil_akhir', 'index')->name('hasil_akhir.index');
        });
        Route::controller(RekapController::class)->group(function () {
            Route::get('/rekap', 'index')->name('rekap.index');
            Route::post('/rekap/update', 'update')->name('rekap.update');
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
