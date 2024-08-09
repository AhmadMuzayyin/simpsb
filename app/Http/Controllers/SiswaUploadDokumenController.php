<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
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
            'file_pendukung' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'file_kk' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'file_akta' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'file_foto' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'ktp_ayah' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'ktp_ibu' => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'ktp_wali' => 'nullable|mimes:jpg,jpeg,png|max:2048',
        ]);

        try {
            $siswa = Siswa::where('user_id', auth()->user()->id)->first();
            $dokumen = DokumenSiswa::where('siswa_id', $siswa->id)->first();

            // Jika dokumen sudah ada, gunakan yang sudah tersimpan jika tidak ada file baru diupload
            $file_pendukung = $request->hasFile('file_pendukung') ? FileHelper::uploadFile($request->file('file_pendukung'), 'uploads/dokumen') : ($dokumen->file_pendukung ?? null);
            $file_kk = $request->hasFile('file_kk') ? FileHelper::uploadFile($request->file('file_kk'), 'uploads/dokumen') : ($dokumen->file_kk ?? null);
            $file_akta = $request->hasFile('file_akta') ? FileHelper::uploadFile($request->file('file_akta'), 'uploads/dokumen') : ($dokumen->file_akta ?? null);
            $file_foto = $request->hasFile('file_foto') ? FileHelper::uploadFile($request->file('file_foto'), 'uploads/dokumen') : ($dokumen->file_foto ?? null);
            $ktp_ayah = $request->hasFile('ktp_ayah') ? FileHelper::uploadFile($request->file('ktp_ayah'), 'uploads/dokumen') : ($dokumen->ktp_ayah ?? null);
            $ktp_ibu = $request->hasFile('ktp_ibu') ? FileHelper::uploadFile($request->file('ktp_ibu'), 'uploads/dokumen') : ($dokumen->ktp_ibu ?? null);
            $ktp_wali = $request->hasFile('ktp_wali') ? FileHelper::uploadFile($request->file('ktp_wali'), 'uploads/dokumen') : ($dokumen->ktp_wali ?? null);
            if ($dokumen) {
                $dokumen->update([
                    'file_pendukung' => $file_pendukung,
                    'file_kk' => $file_kk,
                    'file_akta' => $file_akta,
                    'file_foto' => $file_foto,
                    'ktp_ayah' => $ktp_ayah,
                    'ktp_ibu' => $ktp_ibu,
                    'ktp_wali' => $ktp_wali,
                    'status' => 'Menunggu Konfirmasi'
                ]);
                $siswa->update([
                    'status' => 'Menunggu Konfirmasi'
                ]);
            } else {
                DokumenSiswa::create([
                    'siswa_id' => $siswa->id,
                    'file_pendukung' => $file_pendukung,
                    'file_kk' => $file_kk,
                    'file_akta' => $file_akta,
                    'file_foto' => $file_foto,
                    'ktp_ayah' => $ktp_ayah,
                    'ktp_ibu' => $ktp_ibu,
                    'ktp_wali' => $ktp_wali,
                ]);
            }

            if ($request->pindahan == true) {
                $request->validate([
                    'surat_pindah' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                    'raport_terakhir' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                    'keterangan_prilaku_baik' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                    'rekomendasi' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                    'surat_perwalian' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                    'sertifikat_akreditasi_sekolah' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                    'ktp_ayah' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                    'ktp_ibu' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                    'ktp_wali' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                ]);

                $pindahan = DokumenSiswaPindahan::where('siswa_id', $siswa->id)->first();

                $surat_pindah = $request->hasFile('surat_pindah') ? FileHelper::uploadFile($request->file('surat_pindah'), 'uploads/dokumen_pindahan') : ($pindahan->surat_pindah ?? null);
                $raport_terakhir = $request->hasFile('raport_terakhir') ? FileHelper::uploadFile($request->file('raport_terakhir'), 'uploads/dokumen_pindahan') : ($pindahan->raport_terakhir ?? null);
                $keterangan_prilaku_baik = $request->hasFile('keterangan_prilaku_baik') ? FileHelper::uploadFile($request->file('keterangan_prilaku_baik'), 'uploads/dokumen_pindahan') : ($pindahan->keterangan_prilaku_baik ?? null);
                $rekomendasi = $request->hasFile('rekomendasi') ? FileHelper::uploadFile($request->file('rekomendasi'), 'uploads/dokumen_pindahan') : ($pindahan->rekomendasi ?? null);
                $surat_perwalian = $request->hasFile('surat_perwalian') ? FileHelper::uploadFile($request->file('surat_perwalian'), 'uploads/dokumen_pindahan') : ($pindahan->surat_perwalian ?? null);
                $sertifikat_akreditasi_sekolah = $request->hasFile('sertifikat_akreditasi_sekolah') ? FileHelper::uploadFile($request->file('sertifikat_akreditasi_sekolah'), 'uploads/dokumen_pindahan') : ($pindahan->sertifikat_akreditasi_sekolah ?? null);
                $ktp_ayah = $request->hasFile('ktp_ayah') ? FileHelper::uploadFile($request->file('ktp_ayah'), 'uploads/dokumen_pindahan') : ($dokumen->ktp_ayah ?? null);
                $ktp_ibu = $request->hasFile('ktp_ibu') ? FileHelper::uploadFile($request->file('ktp_ibu'), 'uploads/dokumen_pindahan') : ($dokumen->ktp_ibu ?? null);
                $ktp_wali = $request->hasFile('ktp_wali') ? FileHelper::uploadFile($request->file('ktp_wali'), 'uploads/dokumen_pindahan') : ($dokumen->ktp_wali ?? null);

                if ($pindahan) {
                    $pindahan->update([
                        'surat_pindah' => $surat_pindah,
                        'raport_terakhir' => $raport_terakhir,
                        'keterangan_prilaku_baik' => $keterangan_prilaku_baik,
                        'rekomendasi' => $rekomendasi,
                        'surat_perwalian' => $surat_perwalian,
                        'sertifikat_akreditasi_sekolah' => $sertifikat_akreditasi_sekolah,
                        'ktp_ayah' => $ktp_ayah,
                        'ktp_ibu' => $ktp_ibu,
                        'ktp_wali' => $ktp_wali,
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
                        'surat_pindah' => $surat_pindah,
                        'raport_terakhir' => $raport_terakhir,
                        'keterangan_prilaku_baik' => $keterangan_prilaku_baik,
                        'rekomendasi' => $rekomendasi,
                        'surat_perwalian' => $surat_perwalian,
                        'sertifikat_akreditasi_sekolah' => $sertifikat_akreditasi_sekolah,
                        'ktp_ayah' => $ktp_ayah,
                        'ktp_ibu' => $ktp_ibu,
                        'ktp_wali' => $ktp_wali,
                    ]);
                    $dokumen->update([
                        'status' => 'Menunggu Konfirmasi'
                    ]);
                    $siswa->update([
                        'status' => 'Menunggu Konfirmasi'
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Berhasil mengupload dokumen');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal mengupload dokumen');
        }
    }
}
