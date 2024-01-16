<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminSiswaBaruController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('home.admin.siswa.index', compact('siswa'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'exists:users,id',
            'kelas_id' => 'exists:kelas,id',
            'nama_panggilan' => 'required',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'tempat_lahir' => 'required|date',
            'darah' => 'required|string|max:1',
            'agama' => 'required|string',
            'alamat_asal' => 'required|string',
            'telepon' => 'required|numeric',
            'anak_ke' => 'required|numeri',
            'jumlah_saudara' => 'required|numeric',
            'bahasa' => 'required|string',
            'sekolah_asal' => 'required|string',
            'ijazah_terakhir' => 'required|string',
            'nomor_ijazah' => 'required|string',
            'tgl_ijazah' => 'required|string',
            'nisn' => 'required|string',
            'noskhun' => 'required|string',
            'nama_ayah' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'kondisi_ayah' => 'required|string',
            'nama_ibu' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'penghasilan' => 'required|string',
            'alamat_ortu' => 'required|string',
            'telepon_ortu' => 'required|string',
            'nama_wali' => 'required|string',
            'pekerjaan_wali' => 'required|string',
            'kondisi_wali' => 'required|string',
            'penghasilan_wali' => 'required|string',
            'alamat_wali' => 'required|string',
            'telepon_wali' => 'required|string',
        ]);
        try {
            Siswa::create();
            return redirect()->back()->with('success', 'Data Siswa berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data Siswa gagal ditambahkan');
        }
    }
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'maksimal' => 'required|numeric',
            'terisi' => 'required',
        ]);
        try {
            $siswa->update([
                'nama' => $request->nama,
                'maksimal' => $request->maksimal,
                'terisi' => $request->terisi,
            ]);
            return redirect()->back()->with('success', 'Data Siswa berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data Siswa gagal diubah');
        }
    }
    public function confirmation(Siswa $siswa)
    {
        try {
            $siswa->update([
                'status' => 'siswa'
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
}
