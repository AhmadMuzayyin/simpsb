<?php

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
        Schema::create('kriterias', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->enum('nama', ['Aspek Keluarga', 'Aspek Sosial Ekonomi', 'Aspek Akademik']);
            $table->enum('subkriteria', ['Status Anak', 'Jumlah Saudara Kandung', 'Pekerjaan Orang Tua', 'Penghasilan Orang Tua', 'Nilai Akademik']);
            $table->string('kriteria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriterias');
    }
};
