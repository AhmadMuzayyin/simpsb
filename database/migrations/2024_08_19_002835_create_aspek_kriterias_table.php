<?php

use App\Models\Kriteria;
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
        Schema::create('aspek_kriterias', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Kriteria::class)->constrained()->cascadeOnDelete();
            $table->enum('nilai', ['1', '2', '3', '4', '5']);
            $table->enum('tipe', ['NCF', 'NSF']);
            $table->string('kode')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspek_kriterias');
    }
};
