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
        Schema::create('hasil_akhirs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Siswa::class)->constrained()->cascadeOnDelete();
            $table->double('nilai_akhir', 8, 2);
            $table->integer('ranking');
            $table->enum('status', ['Layak', 'Tidak Layak'])->default('Tidak Layak');
            $table->boolean('is_delivered')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_akhirs');
    }
};
