<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class AdminPendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('home.admin.pendaftaran.index', compact('pendaftaran'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'mulai' => 'required|date',
            'berakhir' => 'required|date',
            'tahun_akademik' => 'required',
        ]);
        try {
            Pendaftaran::create([
                'mulai' => $request->mulai,
                'berakhir' => $request->berakhir,
                'tahun_akademik' => $request->tahun_akademik,
            ]);
            return redirect()->back()->with('success', 'Berhasil menambahkan data pendaftaran');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menambahkan data pendaftaran');
        }
    }
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $request->validate([
            'mulai' => 'required|date',
            'berakhir' => 'required|date',
            'tahun_akademik' => 'required',
        ]);
        try {
            $pendaftaran->update([
                'mulai' => $request->mulai,
                'berakhir' => $request->berakhir,
                'tahun_akademik' => $request->tahun_akademik,
            ]);
            return redirect()->back()->with('success', 'Berhasil mengubah data pendaftaran');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal mengubah data pendaftaran');
        }
    }
    public function destroy(Pendaftaran $pendaftaran)
    {
        try {
            $pendaftaran->delete();
            return redirect()->back()->with('success', 'Berhasil menghapus data pendaftaran');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menghapus data pendaftaran');
        }
    }
}
