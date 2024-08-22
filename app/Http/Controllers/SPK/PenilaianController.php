<?php

namespace App\Http\Controllers\SPK;

use App\Helpers\EnumHelper;
use App\Http\Controllers\Controller;
use App\Models\AspekKriteria;
use App\Models\Kriteria;
use App\Models\Penilaian;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class PenilaianController extends Controller
{
    public function index()
    {
        $profile = Penilaian::all();
        return view('home.admin.spk.penilaian.index', compact('profile'));
    }
    public function profiling()
    {
        $siswa = Siswa::whereHas('dokumen_siswa', function ($query) {
            $query->where('status', 'Diterima');
        })
            ->whereDoesntHave('penilaian')
            ->where('status', 'Diterima')
            ->get();
        // dd($siswa->count() == 0);
        if ($siswa->count() == 0) {
            return response()->json(['status' => 'error', 'message' => 'Data siswa tidak ditemukan'], 422);
        } else {
            // get data kriteria by aspek
            $aspek_keluarga = Kriteria::where('nama', EnumHelper::Kriteria['0'])->get(['id', 'nama', 'kriteria']);
            $aspek_ekonomi = Kriteria::where('nama', EnumHelper::Kriteria['1'])->get(['id', 'nama', 'kriteria']);
            $aspek_akademik = Kriteria::where('nama', EnumHelper::Kriteria['2'])->get(['id', 'nama', 'kriteria']);
            // data aspek keluarga
            $status = '';
            $jml_saudara = '';
            // data aspek ekonomi
            $pekerjaan_ortu = '';
            $penghasilan_ortu = '';
            $nilai_akademik = '';
            foreach ($siswa as $key => $value) {
                // set status keluarga siswa
                if ($value->kondisi_ayah == 'Hidup' && $value->kondisi_ibu == 'Hidup') {
                    $status = 'Orang Tua Lengkap';
                } elseif ($value->kondisi_ayah == 'Hidup' && $value->kondisi_ibu == 'Meninggal') {
                    $status = 'Piatu';
                } elseif ($value->kondisi_ayah == 'Meninggal' && $value->kondisi_ibu == 'Hidup') {
                    $status = 'Yatim';
                } elseif ($value->kondisi_ayah == 'Meninggal' && $value->kondisi_ibu == 'Meninggal') {
                    $status = 'Yatim Piatu';
                }
                // set jumlah saudara kandung
                if ($value->jml_saudara_kandung == 0) {
                    $jml_saudara = 'Tanpa Saudara Kandung';
                } elseif ($value->jml_saudara_kandung == 1) {
                    $jml_saudara = '1 Saudara Kandung';
                } elseif ($value->jml_saudara_kandung == 2) {
                    $jml_saudara = '2 Saudara Kandung';
                } elseif ($value->jml_saudara_kandung > 2) {
                    $jml_saudara = 'Lebih dari 2 Saudara Kandung';
                }
                // set aspek sosial ekonomi
                if ($value->kondisi_ayah == 'Meninggal') {
                    $pekerjaan_ortu = $value->pekerjaan_wali;
                    $penghasilan_ortu = $value->penghasilan_wali;
                } else {
                    $pekerjaan_ortu = $value->pekerjaan_ayah;
                    $penghasilan_ortu = $value->penghasilan_ayah;
                }
                // set aspek akademik
                $nilai_akademik = $value->nilai_akademik;
            }
            $kriteria_aspek_keluarga = [];
            foreach ($aspek_keluarga as $ak) {
                $kriteria_aspek_keluarga[] = AspekKriteria::with('kriteria')->where('kriteria_id', $ak->id)->first();
            }
            $kriteria_aspek_ekonomi = [];
            foreach ($aspek_ekonomi as $ak) {
                $kriteria_aspek_ekonomi[] = AspekKriteria::with('kriteria')->where('kriteria_id', $ak->id)->first();
            }
            $kriteria_aspek_akademik = [];
            foreach ($aspek_akademik as $ak) {
                $kriteria_aspek_akademik[] = AspekKriteria::with('kriteria')->where('kriteria_id', $ak->id)->first();
            }
            $penilaian_ak = [];
            $penilaian_ase = [];
            $penilaian_akademik = [];
            foreach ($kriteria_aspek_keluarga as $penilaian) {
                $penilaian_ak[] = [
                    'siswa_id' => $value->id,
                    'aspek_kriteria_id' => $penilaian->id,
                    'nilai' => $penilaian->kriteria->kriteria == $status ? $penilaian->nilai : ($penilaian->kriteria->kriteria == $jml_saudara ? $penilaian->nilai : 1),
                    'tipe' => $penilaian->tipe,
                    'kode' => $penilaian->kode
                ];
            }
            foreach ($kriteria_aspek_ekonomi as $penilaian) {
                $nilai = 1;
                if ($penilaian->kriteria->kriteria == $pekerjaan_ortu) {
                    $nilai = $penilaian->nilai;
                }
                if ($penilaian->kriteria->kriteria == $penghasilan_ortu) {
                    $nilai = $penilaian->nilai;
                }
                $penilaian_ase[] = [
                    'siswa_id' => $value->id,
                    'aspek_kriteria_id' => $penilaian->id,
                    'nilai' => $nilai,
                    'tipe' => $penilaian->tipe,
                    'kode' => $penilaian->kode
                ];
            }
            foreach ($kriteria_aspek_akademik as $penilaian) {
                $nilai = 1;
                if ($penilaian->kriteria->kriteria == $nilai_akademik) {
                    $nilai = $penilaian->nilai;
                }
                $penilaian_akademik[] = [
                    'siswa_id' => $value->id,
                    'aspek_kriteria_id' => $penilaian->id,
                    'nilai' => $nilai,
                    'tipe' => $penilaian->tipe,
                    'kode' => $penilaian->kode
                ];
            }
            // insert penilaian
            foreach ($penilaian_ak as $item) {
                $attributes = [
                    'siswa_id' => $item['siswa_id'],
                    'aspek_kriteria_id' => $item['aspek_kriteria_id'],
                ];
                $values = [
                    'nilai' => $item['nilai'],
                    'tipe' => $item['tipe'],
                    'kode' => $item['kode'],
                ];
                Penilaian::updateOrCreate($attributes, $values);
            }
            foreach ($penilaian_ase as $item) {
                $attributes = [
                    'siswa_id' => $item['siswa_id'],
                    'aspek_kriteria_id' => $item['aspek_kriteria_id'],
                ];
                $values = [
                    'nilai' => $item['nilai'],
                    'tipe' => $item['tipe'],
                    'kode' => $item['kode'],
                ];
                Penilaian::updateOrCreate($attributes, $values);
            }
            foreach ($penilaian_akademik as $item) {
                $attributes = [
                    'siswa_id' => $item['siswa_id'],
                    'aspek_kriteria_id' => $item['aspek_kriteria_id'],
                ];
                $values = [
                    'nilai' => $item['nilai'],
                    'tipe' => $item['tipe'],
                    'kode' => $item['kode'],
                ];
                Penilaian::updateOrCreate($attributes, $values);
            }
            return response()->json(['status' => 'success', 'message' => 'Berhasil melakukan profiling'], 200);
        }
    }
    public function update(Request $request, Penilaian $penilaian)
    {
        $validated = $request->validate([
            'nilai' => 'required|in:1,2,3,4,5',
        ]);
        try {
            Penilaian::where('id', $penilaian->id)->update([
                'nilai' => $validated['nilai']
            ]);
            return response()->json(['status' => 'success', 'message' => 'Berhasil mengubah data penilaian']);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'success', 'message' => 'Gagal mengubah data penilaian']);
        }
    }
}
