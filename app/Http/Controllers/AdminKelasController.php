<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class AdminKelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('home.admin.kelas.index', compact('kelas'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'maksimal' => 'required|numeric',
            'terisi' => 'required',
        ]);
        try {
            Kelas::create([
                'nama' => $request->nama,
                'maksimal' => $request->maksimal,
                'terisi' => $request->terisi,
            ]);
            return redirect()->back()->with('success', 'Data kelas berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data kelas gagal ditambahkan');
        }
    }
    public function update(Request $request, Kelas $kelas)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'maksimal' => 'required|numeric',
            'terisi' => 'required',
        ]);
        try {
            $kelas->update([
                'nama' => $request->nama,
                'maksimal' => $request->maksimal,
                'terisi' => $request->terisi,
            ]);
            return redirect()->back()->with('success', 'Data kelas berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data kelas gagal diubah');
        }
    }
    public function destroy(Kelas $kelas)
    {
        try {
            $kelas->delete();
            return redirect()->back()->with('success', 'Data kelas berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data kelas gagal dihapus');
        }
    }
}
