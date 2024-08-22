<?php

namespace App\Http\Controllers\SPK;

use App\Helpers\PerhitunganHelper;
use App\Http\Controllers\Controller;
use App\Models\Penilaian;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index()
    {
        $data = Penilaian::all();
        return view('home.admin.spk.perhitungan.index', compact('data'));
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
