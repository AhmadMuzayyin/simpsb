<?php

namespace App\Http\Controllers\SPK;

use App\Http\Controllers\Controller;
use App\Models\HasilAkhir;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index()
    {
        $rekap = HasilAkhir::all();
        return view('home.admin.spk.rekap.index', compact('rekap'));
    }
    public function update(Request $request)
    {
        $validate = $request->validate([
            'id' => 'required|exists:hasil_akhirs,id',
            'status' => 'required',
        ]);
        try {
            HasilAkhir::find($validate['id'])->update([
                'is_delivered' => $validate['status'],
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Berhasil mengubah status siswa',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal mengubah status siswa',
            ]);
        }
    }
}
