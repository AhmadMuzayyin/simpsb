<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
    public function dokumen_siswa(): HasOne
    {
        return $this->hasOne(DokumenSiswa::class);
    }
    public function dokumen_siswa_pindahan(): HasOne
    {
        return $this->hasOne(DokumenSiswaPindahan::class);
    }
    public function pendaftaran(): BelongsTo
    {
        return $this->belongsTo(Pendaftaran::class);
    }
}
