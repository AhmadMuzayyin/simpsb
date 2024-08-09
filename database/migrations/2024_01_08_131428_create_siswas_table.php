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
            $table->integer('jumlah_saudara')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('sekolah_asal')->nullable();
            $table->enum('ijazah_terakhir', ['SMP', 'MTS'])->nullable();
            $table->string('nisn')->nullable();
            $table->enum('kondisi_ayah', ['Hidup', 'Meninggal'])->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->bigInteger('penghasilan_ayah')->nullable();
            $table->bigInteger('telpon_ayah')->nullable();
            $table->enum('kondisi_ibu', ['Hidup', 'Meninggal'])->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->bigInteger('penghasilan_ibu')->nullable();
            $table->bigInteger('telpon_ibu')->nullable();
            $table->text('alamat_ortu')->nullable();
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->bigInteger('penghasilan_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->bigInteger('telpon_wali')->nullable();
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
