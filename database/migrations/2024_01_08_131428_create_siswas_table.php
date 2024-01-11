<?php

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('nama_panggilan');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('darah');
            $table->string('agama');
            $table->text('alamat_asal');
            $table->text('alamat_sekarang');
            $table->bigInteger('telepon');
            $table->integer('anak_ke');
            $table->integer('jumlah_saudara');
            $table->string('bahasa');
            $table->string('sekolah_asal');
            $table->enum('ijazah_terakhir', ['SD', 'SMP/MTS']);
            $table->bigInteger('nomor_ijazah');
            $table->date('tgl_ijazah');
            $table->string('nisn');
            $table->string('noskhun');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('kondisi_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('kondisi_ibu');
            $table->double('penghasilan');
            $table->text('alamat_ortu');
            $table->bigInteger('telepon_ortu');
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->string('kondisi_wali')->nullable();
            $table->double('penghasilan_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->bigInteger('telepon_wali')->nullable();
            $table->string('file_ijazah')->nullable();
            $table->string('file_skhun')->nullable();
            $table->string('file_kk')->nullable();
            $table->string('file_akta')->nullable();
            $table->string('file_foto')->nullable();
            $table->enum('status', ['Calon Siswa', 'Siswa']);
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
