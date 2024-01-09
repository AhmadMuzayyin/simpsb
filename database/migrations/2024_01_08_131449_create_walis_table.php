<?php

use App\Models\CalonSiswa;
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
        Schema::create('walis', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CalonSiswa::class)->constrained()->cascadeOnDelete();
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('kondisi_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('kondisi_ibu');
            $table->double('penghasilan');
            $table->text('alamat');
            $table->bigInteger('telepon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('walis');
    }
};
