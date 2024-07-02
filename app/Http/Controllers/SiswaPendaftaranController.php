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
    public function wali(WaliRequest $request)
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
