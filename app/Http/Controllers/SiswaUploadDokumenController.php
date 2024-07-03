<?php

namespace App\Http\Controllers;

use App\Models\DokumenSiswa;
use App\Models\DokumenSiswaPindahan;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaUploadDokumenController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        $dokumen = DokumenSiswa::where('siswa_id', $siswa->id)->first();
        $pindahan = DokumenSiswaPindahan::where('siswa_id', $siswa->id)->first();
        return view('home.siswa.dokumen.index', compact('siswa', 'dokumen', 'pindahan'));
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
            // dd($request->pindahan == false ? 'Menunggu Konfirmasi' : 'Perbaiki Dokumen');
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
                        'status' => $request->pindahan == false ? 'Menunggu Konfirmasi' : 'Perbaiki Dokumen'
                    ]);
                    $request->pindahan == false ??
                        $siswa->update([
                            'status' => 'Menunggu Konfirmasi'
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
            if ($request->pindahan == true) {
                $request->validate([
                    'surat_pindah' => 'required|mimes:jpg,jpeg,png|max:2048',
                    'raport_terakhir' => 'required|mimes:jpg,jpeg,png|max:2048',
                    'keterangan_prilaku_baik' => 'required|mimes:jpg,jpeg,png|max:2048',
                    'rekomendasi' => 'required|mimes:jpg,jpeg,png|max:2048',
                    'surat_perwalian' => 'required|mimes:jpg,jpeg,png|max:2048',
                    'sertifikat_akreditasi_sekolah' => 'required|mimes:jpg,jpeg,png|max:2048',
                    'ktp_orang_tua' => 'required|mimes:jpg,jpeg,png|max:2048',
                ]);
                if ($request->hasFile('surat_pindah') && $request->hasFile('raport_terakhir') && $request->hasFile('keterangan_prilaku_baik') && $request->hasFile('rekomendasi') && $request->hasFile('surat_perwalian') && $request->hasFile('sertifikat_akreditasi_sekolah') && $request->hasFile('ktp_orang_tua')) {
                    $request->file('surat_pindah')->store('public/dokumen');
                    $request->file('raport_terakhir')->store('public/dokumen');
                    $request->file('keterangan_prilaku_baik')->store('public/dokumen');
                    $request->file('rekomendasi')->store('public/dokumen');
                    $request->file('surat_perwalian')->store('public/dokumen');
                    $request->file('sertifikat_akreditasi_sekolah')->store('public/dokumen');
                    $request->file('ktp_orang_tua')->store('public/dokumen');
                    $pindahan = DokumenSiswaPindahan::where('siswa_id', $siswa->id)->first();
                    if ($pindahan) {
                        $pindahan->update([
                            'surat_pindah' => 'storage/dokumen/' . $request->file('surat_pindah')->hashName(),
                            'raport_terakhir' => 'storage/dokumen/' . $request->file('raport_terakhir')->hashName(),
                            'keterangan_prilaku_baik' => 'storage/dokumen/' . $request->file('keterangan_prilaku_baik')->hashName(),
                            'rekomendasi' => 'storage/dokumen/' . $request->file('rekomendasi')->hashName(),
                            'surat_perwalian' => 'storage/dokumen/' . $request->file('surat_perwalian')->hashName(),
                            'sertifikat_akreditasi_sekolah' => 'storage/dokumen/' . $request->file('sertifikat_akreditasi_sekolah')->hashName(),
                            'ktp_orang_tua' => 'storage/dokumen/' . $request->file('ktp_orang_tua')->hashName(),
                        ]);
                        $dokumen->update([
                            'status' => 'Menunggu Konfirmasi'
                        ]);
                        $siswa->update([
                            'status' => 'Menunggu Konfirmasi'
                        ]);
                    } else {
                        DokumenSiswaPindahan::create([
                            'siswa_id' => $siswa->id,
                            'surat_pindah' => 'storage/dokumen/' . $request->file('surat_pindah')->hashName(),
                            'raport_terakhir' => 'storage/dokumen/' . $request->file('raport_terakhir')->hashName(),
                            'keterangan_prilaku_baik' => 'storage/dokumen/' . $request->file('keterangan_prilaku_baik')->hashName(),
                            'rekomendasi' => 'storage/dokumen/' . $request->file('rekomendasi')->hashName(),
                            'surat_perwalian' => 'storage/dokumen/' . $request->file('surat_perwalian')->hashName(),
                            'sertifikat_akreditasi_sekolah' => 'storage/dokumen/' . $request->file('sertifikat_akreditasi_sekolah')->hashName(),
                            'ktp_orang_tua' => 'storage/dokumen/' . $request->file('ktp_orang_tua')->hashName(),
                        ]);
                        $dokumen->update([
                            'status' => 'Menunggu Konfirmasi'
                        ]);
                        $siswa->update([
                            'status' => 'Menunggu Konfirmasi'
                        ]);
                    }
                }
            }
            return redirect()->back()->with('success', 'Berhasil mengupload dokumen');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Gagal mengupload dokumen');
        }
    }
}
