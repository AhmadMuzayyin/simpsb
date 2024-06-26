<?php

namespace App\Http\Controllers;

use App\Models\DokumenSiswa;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaUploadDokumenController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        $dokumen = DokumenSiswa::where('siswa_id', $siswa->id)->first();
        return view('home.siswa.dokumen.index', compact('siswa', 'dokumen'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'file_pendukung' => 'required|mimes:jpg,jpeg,png|max:2048',
            'file_kk' => 'required|mimes:jpg,jpeg,png|max:2048',
            'file_akta' => 'required|mimes:jpg,jpeg,png|max:2048',
            'file_foto' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);
        try {
            $siswa = Siswa::where('user_id', auth()->user()->id)->first();
            $dokumen = DokumenSiswa::where('siswa_id', $siswa->id)->first();
            if ($request->hasFile('file_pendukung') && $request->hasFile('file_kk') && $request->hasFile('file_akta') && $request->hasFile('file_foto')) {
                $request->file('file_pendukung')->store('public/dokumen');
                $request->file('file_kk')->store('public/dokumen');
                $request->file('file_akta')->store('public/dokumen');
                $request->file('file_foto')->store('public/dokumen');
                if ($dokumen) {
                    $dokumen->update([
                        'file_pendukung' => 'storage/dokumen/' . $request->file('file_pendukung')->hashName(),
                        'file_kk' => 'storage/dokumen/' . $request->file('file_kk')->hashName(),
                        'file_akta' => 'storage/dokumen/' . $request->file('file_akta')->hashName(),
                        'file_foto' => 'storage/dokumen/' . $request->file('file_foto')->hashName(),
                    ]);
                } else {
                    DokumenSiswa::create([
                        'siswa_id' => $siswa->id,
                        'file_pendukung' => 'storage/dokumen/' . $request->file('file_pendukung')->hashName(),
                        'file_kk' => 'storage/dokumen/' . $request->file('file_kk')->hashName(),
                        'file_akta' => 'storage/dokumen/' . $request->file('file_akta')->hashName(),
                        'file_foto' => 'storage/dokumen/' . $request->file('file_foto')->hashName(),
                    ]);
                }
            }
            return redirect()->back()->with('success', 'Berhasil mengupload dokumen');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal mengupload dokumen');
        }
    }
}
