<?php

use App\Models\User;
use App\Models\Kelas;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Kelas::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Pendaftaran::class)->constrained()->cascadeOnDelete();
            $table->string('nama_panggilan')->nullable();
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan'])->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('agama')->nullable();
            $table->text('alamat_asal')->nullable();
            $table->text('alamat_sekarang')->nullable();
            $table->bigInteger('whatsapp')->nullable();
            $table->integer('anak_ke')->nullable();
            $table->enum('jumlah_saudara', [
                'Tanpa Saudara Kandung',
                '1 Saudara Kandung',
                '2 Saudara Kandung',
                'Lebih dari 2 Saudara Kandung'
            ])->nullable();
            $table->string('bahasa')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->enum('ijazah_terakhir', ['SMP', 'MTS'])->nullable();
            $table->string('nisn')->nullable();
            $table->enum('kondisi_ayah', ['Hidup', 'Meninggal'])->nullable();
            $table->string('nama_ayah')->nullable();
            $table->enum('pekerjaan_ayah', [
                'Tidak Bekerja',
                'Pekerja Tidak Tetap (Pekerja Lepas, Buruh, Dll)',
                'Pekerja Tetap (PNS, Karyawan Swasta, Dll)',
                'Pengusaha'
            ])->nullable();
            $table->enum('penghasilan_ayah', [
                'Dibawah Garis Kemiskinan (Rp. 5.00.000/bulan)',
                'Menengah ke bawah (Rp. 500.000 - Rp. 2.000.000/bulan)',
                'Menengah (Rp. 2.000.000 - Rp. 5.000.000/bulan)',
                'Menengah ke atas (Rp. 5.000.000 - Rp. 20.000.000/bulan)'
            ])->nullable();
            $table->bigInteger('telpon_ayah')->nullable();
            $table->enum('kondisi_ibu', ['Hidup', 'Meninggal'])->nullable();
            $table->string('nama_ibu')->nullable();
            $table->enum('pekerjaan_ibu', [
                'Tidak Bekerja',
                'Pekerja Tidak Tetap (Pekerja Lepas, Buruh, Dll)',
                'Pekerja Tetap (PNS, Karyawan Swasta, Dll)',
                'Pengusaha'
            ])->nullable();
            $table->enum('penghasilan_ibu', [
                'Dibawah Garis Kemiskinan (Rp. 5.00.000/bulan)',
                'Menengah ke bawah (Rp. 500.000 - Rp. 2.000.000/bulan)',
                'Menengah (Rp. 2.000.000 - Rp. 5.000.000/bulan)',
                'Menengah ke atas (Rp. 5.000.000 - Rp. 20.000.000/bulan)'
            ])->nullable();
            $table->bigInteger('telpon_ibu')->nullable();
            $table->text('alamat_ortu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->enum('pekerjaan_wali', [
                'Tidak Bekerja',
                'Pekerja Tidak Tetap (Pekerja Lepas, Buruh, Dll)',
                'Pekerja Tetap (PNS, Karyawan Swasta, Dll)',
                'Pengusaha'
            ])->nullable();
            $table->enum('penghasilan_wali', [
                'Dibawah Garis Kemiskinan (Rp. 5.00.000/bulan)',
                'Menengah ke bawah (Rp. 500.000 - Rp. 2.000.000/bulan)',
                'Menengah (Rp. 2.000.000 - Rp. 5.000.000/bulan)',
                'Menengah ke atas (Rp. 5.000.000 - Rp. 20.000.000/bulan)'
            ])->nullable();
            $table->text('alamat_wali')->nullable();
            $table->bigInteger('telpon_wali')->nullable();
            $table->enum('nilai_akademik', [
                'Kurang (0-50)',
                'Cukup (60-70)',
                'Baik (80-90)',
                'Sangat Baik (100)',
            ])->nullable();
            $table->enum('status', ['Menunggu Konfirmasi', 'Tidak Diterima', 'Diterima', 'Perbaiki Data', 'Perbaiki Dokumen'])->default('Menunggu Konfirmasi');
            $table->enum('pindahan', ['Ya', 'Tidak'])->default('Tidak');
            $table->boolean('is_save')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
