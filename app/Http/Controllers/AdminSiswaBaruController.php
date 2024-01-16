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
            'nama' => 'required|string|max:50',
            'maksimal' => 'required|numeric',
            'terisi' => 'required',
        ]);
        try {
            Siswa::create([
                'nama' => $request->nama,
                'maksimal' => $request->maksimal,
                'terisi' => $request->terisi,
            ]);
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
