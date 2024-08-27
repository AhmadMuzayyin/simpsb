<?php

namespace App\Http\Controllers;

use App\Models\AspekKriteria;
use App\Models\Galeri;
use App\Models\HasilAkhir;
use App\Models\Kelas;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Post;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        $galeri = Galeri::all();
        $posts = Post::all();
        $aspek = AspekKriteria::get()->count();
        $kriteria = Kriteria::get()->count();
        $penilaian = Penilaian::get()->groupBy('siswa_id')->count();
        $hasilAkhir = HasilAkhir::get()->count();
        $siswaAlumni = Siswa::where('status_kelulusan', true)->get()->count();
        // $rekapan = 
        return view('home.index', compact('kelas', 'siswa', 'galeri', 'posts', 'aspek', 'kriteria', 'penilaian', 'hasilAkhir', 'siswaAlumni'));
    }
}
