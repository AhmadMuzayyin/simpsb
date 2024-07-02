<?php

namespace App\Http\Controllers;

use App\Models\DaftarUlang;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaDaftarUlangController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        $daftar_ulang = DaftarUlang::where('siswa_id', $siswa->id)->first();
        return view('home.siswa.daftar_ulang.index', compact('daftar_ulang', 'siswa'));
    }
    public function store(Request $request, Siswa $siswa)
    {
        $request->validate([
            'status' => 'required|in:Belum Bayar,Sudah Bayar'
        ]);
        try {
            DaftarUlang::create([
                'siswa_id' => $siswa->id,
                'tgl_daftar_ulang' => date('Y-m-d'),
                'status' => $request->status,
            ]);
            return redirect()->back()->with('success', 'Berhasil mengupload bukti bayar');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal mengupload bukti bayar');
        }
    }
}
