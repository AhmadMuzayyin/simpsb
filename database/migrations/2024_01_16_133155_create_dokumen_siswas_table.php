<?php

use App\Models\Siswa;
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
        Schema::create('dokumen_siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Siswa::class)->constrained()->cascadeOnDelete();
            $table->string('file_pendukung');
            $table->string('file_kk');
            $table->string('file_akta');
            $table->string('file_foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_siswas');
    }
};
