<?php

namespace App\Http\Controllers;

use App\Http\Requests\BiodataRequest;
use App\Http\Requests\SekolahRequest;
use App\Http\Requests\SiswaPendaftaranRequest;
use App\Http\Requests\WaliRequest;
use App\Models\Kelas;
use App\Models\Pendaftaran;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
                return response()->json(['error', 'Maaf kami sedang tidak membuka pendaftaran']);
            }
            $siswa['pendaftaran_id'] = $pendaftaran->id;
            $data_siswa = Siswa::firstWhere('user_id', auth()->user()->id);
            if ($data_siswa) {
                $data_siswa->update($siswa);
            } else {
                Siswa::create($siswa);
            }
            return response()->json(['success' => 'Data Siswa berhasil ditambahkan'], 200);
        } catch (\Exception $th) {
            return response()->json(['error' => 'Data Siswa gagal ditambahkan'], 500);
        }
    }
    public function biodata(BiodataRequest $request)
    {
        $siswa = $request->validated();
        try {
            $pendaftaran = Pendaftaran::whereDate('mulai', '<=', date('Y-m-d'))->whereDate('berakhir', '>', date('Y-m-d'))->first();
            if (!$pendaftaran) {
                return response()->json(['error', 'Maaf kami sedang tidak membuka pendaftaran']);
            }
            $siswa['pendaftaran_id'] = $pendaftaran->id;
            $data_siswa = Siswa::firstWhere('user_id', auth()->user()->id);
            if ($data_siswa) {
                $data_siswa->update($siswa);
                User::where('id', auth()->user()->id)->update(['name' => $siswa['name']]);
            } else {
                Siswa::create($siswa);
            }
            return response()->json(['success' => 'Data Siswa berhasil ditambahkan', 'url' => route('siswa.pendaftaran.index') . '?step=wali'], 200);
        } catch (\Exception $th) {
            return response()->json(['error' => 'Data Siswa gagal ditambahkan'], 500);
        }
    }
    public function wali(Request $request)
    {
        // dd($request->all());
        $siswa = $request->validate([
            'kondisi_ayah' => 'required|string',
            'kondisi_ibu' => 'required|string',
            'nama_wali' => 'nullable|string',
            'pekerjaan_wali' => 'nullable|string',
            'kondisi_wali' => 'nullable|string',
            'penghasilan_wali' => 'nullable|numeric',
            'telpon_wali' => 'nullable|numeric',
            'alamat_wali' => 'nullable|string',
        ]);
        if ($siswa['kondisi_ayah'] == 'Hidup') {
            $validator = Validator::make($request->all(), [
                'nama_ayah' => 'required|string',
                'pekerjaan_ayah' => 'required|string',
                'penghasilan_ayah' => 'required|numeric',
                'telpon_ayah' => 'required|numeric',
                'alamat_ortu' => 'required|string',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 500);
            }
            $siswa['nama_ayah'] = $request->nama_ayah;
            $siswa['pekerjaan_ayah'] = $request->pekerjaan_ayah;
            $siswa['penghasilan_ayah'] = $request->penghasilan_ayah;
            $siswa['telpon_ayah'] = $request->telpon_ayah;
            $siswa['alamat_ortu'] = $request->alamat_ortu;
        }
        if ($siswa['kondisi_ibu'] == 'Hidup') {
            $validator = Validator::make($request->all(), [
                'nama_ibu' => 'required|string',
                'pekerjaan_ibu' => 'required|string',
                'penghasilan_ibu' => 'required|numeric',
                'telpon_ibu' => 'required|numeric',
                'alamat_ortu' => 'required|string',
            ]);
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 500);
            }
            $siswa['nama_ibu'] = $request->nama_ibu;
            $siswa['pekerjaan_ibu'] = $request->pekerjaan_ibu;
            $siswa['penghasilan_ibu'] = $request->penghasilan_ibu;
            $siswa['telpon_ibu'] = $request->telpon_ibu;
            $siswa['alamat_ortu'] = $request->alamat_ortu;
        }
        try {
            $pendaftaran = Pendaftaran::whereDate('mulai', '<=', date('Y-m-d'))->whereDate('berakhir', '>', date('Y-m-d'))->first();
            if (!$pendaftaran) {
                return response()->json(['error', 'Maaf kami sedang tidak membuka pendaftaran']);
            }
            $siswa['pendaftaran_id'] = $pendaftaran->id;
            $data_siswa = Siswa::firstWhere('user_id', auth()->user()->id);
            if ($data_siswa) {
                $data_siswa->update($siswa);
            } else {
                return response()->json(['error' => 'Data Siswa tidak ditemukan'], 500);
            }
            return response()->json(['success' => 'Data Siswa berhasil ditambahkan', 'url' => route('siswa.pendaftaran.index') . '?step=sekolah'], 200);
        } catch (\Exception $th) {
            return response()->json(['error' => 'Data Siswa gagal ditambahkan'], 500);
        }
    }
    public function sekolah(SekolahRequest $request)
    {
        $siswa = $request->validated();
        try {
            $pendaftaran = Pendaftaran::whereDate('mulai', '<=', date('Y-m-d'))->whereDate('berakhir', '>', date('Y-m-d'))->first();
            if (!$pendaftaran) {
                return response()->json(['error', 'Maaf kami sedang tidak membuka pendaftaran']);
            }
            $siswa['pendaftaran_id'] = $pendaftaran->id;
            $data_siswa = Siswa::firstWhere('user_id', auth()->user()->id);
            if ($data_siswa) {
                $siswa['is_save'] = true;
                $siswa['status'] = 'Menunggu Konfirmasi';
                $data_siswa->update($siswa);
            } else {
                Siswa::create($siswa);
            }
            return response()->json(['success' => 'Data Siswa berhasil ditambahkan', 'url' => route('siswa.pendaftaran.index')], 200);
        } catch (\Exception $th) {
            return response()->json(['error' => 'Data Siswa gagal ditambahkan'], 500);
        }
    }
}
