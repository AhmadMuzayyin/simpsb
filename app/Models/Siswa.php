<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function dokumen_siswa()
    {
        return $this->hasOne(DokumenSiswa::class);
    }
    public function dokumen_siswa_pindahan()
    {
        return $this->hasOne(DokumenSiswaPindahan::class);
    }
}
