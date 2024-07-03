<?php

use App\Models\Siswa;
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
        Schema::create('dokumen_siswa_pindahans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Siswa::class)->constrained()->cascadeOnDelete();
            $table->string('surat_pindah')->nullable();
            $table->string('raport_terakhir')->nullable();
            $table->string('keterangan_prilaku_baik')->nullable();
            $table->string('rekomendasi')->nullable();
            $table->string('surat_perwalian')->nullable();
            $table->string('sertifikat_akreditasi_sekolah')->nullable();
            $table->string('ktp_orang_tua')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_siswa_pindahans');
    }
};
