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
            $table->string('nama_panggilan');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('golongan_darah');
            $table->string('agama');
            $table->text('alamat_asal');
            $table->text('alamat_sekarang');
            $table->bigInteger('whatsapp');
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->string('bahasa');
            $table->string('sekolah_asal');
            $table->enum('ijazah_terakhir', ['SMP', 'MTS']);
            $table->string('nisn');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('kondisi_ayah');
            $table->bigInteger('penghasilan_ayah');
            $table->bigInteger('telpon_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('kondisi_ibu');
            $table->bigInteger('penghasilan_ibu');
            $table->bigInteger('telpon_ibu');
            $table->text('alamat_ortu');
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('kondisi_wali')->nullable();
            $table->bigInteger('penghasilan_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->bigInteger('telpon_wali')->nullable();
            $table->enum('status', ['Menunggu Konfirmasi', 'Tidak Diterima', 'Diterima'])->default('Menunggu Konfirmasi');
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
