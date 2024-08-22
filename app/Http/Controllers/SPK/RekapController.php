<?php

namespace App\Http\Controllers\SPK;

use App\Http\Controllers\Controller;
use App\Models\HasilAkhir;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class RekapController extends Controller
{
    public function index()
    {
        $tahunAkademik = request()->get('tahun_akademik');
        $hasilAkhirQuery = HasilAkhir::query();
        if ($tahunAkademik) {
            $hasilAkhirQuery->whereHas('siswa.pendaftaran', function ($query) use ($tahunAkademik) {
                $query->where('tahun_akademik', $tahunAkademik);
            });
        }
        $rekap = $hasilAkhirQuery->get();
        $tahun_akademik = Pendaftaran::select('tahun_akademik')->distinct()->get();
        return view('home.admin.spk.rekap.index', compact('rekap', 'tahun_akademik'));
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
