<?php

namespace App\Http\Controllers;

use App\Models\DokumenSiswa;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use ZipArchive;

class AdminSiswaBaruController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        return view('home.admin.siswa.index', compact('siswa', 'kelas'));
    }
    public function confirmation(Siswa $siswa)
    {
        try {
            $siswa->update([
                'status' => 'Diterima'
            ]);
            return redirect()->back()->with('succes', 'Data siswa berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data siswa gagal diubah');
        }
    }
    public function notconfirm(Siswa $siswa)
    {
        try {
            $siswa->update([
                'status' => 'Tidak Diterima'
            ]);
            return redirect()->back()->with('succes', 'Data siswa berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data siswa gagal diubah');
        }
    }
    public function destroy(Siswa $siswa)
    {
        try {
            $siswa->delete();
            return redirect()->back()->with('success', 'Data Siswa berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data Siswa gagal dihapus');
        }
    }
    public function perbaiki_data(Siswa $siswa)
    {
        try {
            $siswa->update([
                'status' => 'Perbaiki Data'
            ]);
            return redirect()->back()->with('succes', 'Data siswa berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data siswa gagal diubah');
        }
    }
    public function perbaiki_dokumen(Siswa $siswa)
    {
        try {
            $siswa->update([
                'status' => 'Perbaiki Dokumen'
            ]);
            DokumenSiswa::where('siswa_id', $siswa->id)->update([
                'status' => 'Perbaiki Dokumen'
            ]);
            return redirect()->back()->with('succes', 'Data siswa berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data siswa gagal diubah');
        }
    }
    public function download(Siswa $siswa)
    {
    }
}
