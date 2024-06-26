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
            'bukti_bayar' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);
        try {
            $daftar_ulang = DaftarUlang::where('siswa_id', $siswa->id)->first();
            if ($request->hasFile('bukti_bayar')) {
                if ($daftar_ulang != null && file_exists($daftar_ulang->bukti_bayar)) {
                    unlink($daftar_ulang->bukti_bayar);
                }
                $request->file('bukti_bayar')->store('public/bukti_bayar');
                if ($daftar_ulang) {
                    $daftar_ulang->update([
                        'bukti_bayar' => $request->hasFile('bukti_bayar') ? 'storage/bukti_bayar/' . $request->file('bukti_bayar')->hashName() : null,
                        'status' => 'menunggu konfirmasi',
                        'tgl_daftar_ulang' => date('Y-m-d'),
                        'status' => $request->hasFile('bukti_bayar') ? 'Sudah Bayar' : 'Belum Bayar'
                    ]);
                } else {
                    DaftarUlang::create([
                        'siswa_id' => $siswa->id,
                        'bukti_bayar' => $request->hasFile('bukti_bayar') ? 'storage/bukti_bayar/' . $request->file('bukti_bayar')->hashName() : null,
                        'tgl_daftar_ulang' => date('Y-m-d'),
                        'status' => $request->hasFile('bukti_bayar') ? 'Sudah Bayar' : 'Belum Bayar',
                    ]);
                }
            }
            return redirect()->back()->with('success', 'Berhasil mengupload bukti bayar');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal mengupload bukti bayar');
        }
    }
}
