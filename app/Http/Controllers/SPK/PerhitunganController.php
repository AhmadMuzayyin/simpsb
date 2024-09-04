<?php

namespace App\Http\Controllers\SPK;

use App\Helpers\PerhitunganHelper;
use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index()
    {
        $data = Penilaian::query();
        $tahun_akademik = Pendaftaran::select('tahun_akademik')->distinct()->get();
        $tahunAkademik = request()->get('tahun_akademik');
        if ($tahunAkademik) {
            $data->whereHas('siswa.pendaftaran', function ($query) use ($tahunAkademik) {
                $query->where('tahun_akademik', $tahunAkademik);
            });
        }
        $data = $data->get();
        return view('home.admin.spk.perhitungan.index', compact('data', 'tahun_akademik'));
    }
    public function calcAK()
    {
        return PerhitunganHelper::calcAK();
    }
    public function calcASE()
    {
        return PerhitunganHelper::calcASE();
    }
    public function calcAA()
    {
        return PerhitunganHelper::calcAA();
    }
}
