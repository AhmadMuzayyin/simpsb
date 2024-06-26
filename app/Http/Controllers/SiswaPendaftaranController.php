<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaPendaftaranRequest;
use App\Models\Kelas;
use App\Models\Pendaftaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaPendaftaranController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        return view('home.siswa.pendaftaran.index', compact('kelas', 'siswa'));
    }
    public function store(SiswaPendaftaranRequest $request)
    {
        $siswa = $request->validated();
        try {
            $pendaftaran = Pendaftaran::whereDate('mulai', '<=', date('Y-m-d'))->whereDate('berakhir', '>', date('Y-m-d'))->first();
            if (!$pendaftaran) {
                return redirect()->back()->with('error', 'Maaf kami sedang tidak membuka pendaftaran');
            }
            $siswa['pendaftaran_id'] = $pendaftaran->id;
            $data_siswa = Siswa::firstWhere('user_id', auth()->user()->id);
            if ($data_siswa) {
                $data_siswa->update($siswa);
            } else {
                Siswa::create($siswa);
            }
            return redirect()->back()->with('success', 'Data Siswa berhasil ditambahkan');
        } catch (\Exception $th) {
            return redirect()->back()->with('error', 'Data Siswa gagal ditambahkan');
        }
    }
}
