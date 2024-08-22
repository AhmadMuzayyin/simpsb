<?php

namespace App\Http\Controllers\SPK;

use App\Helpers\EnumHelper;
use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::all();
        return view('home.admin.spk.kriteria.index', compact('kriteria'));
    }
    public function getKriteria(Request $request)
    {
        $kriteria = EnumHelper::SubKriteria[$request->subkriteria];
        return response()->json($kriteria);
    }
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required',
            'subkriteria' => 'required',
            'kriteria' => 'required'
        ]);
        if ($validated->fails()) {
            return redirect()->back()->with('error', 'Gagal menambahkan data aspek kriteria');
        }
        try {
            $kriteria = new Kriteria();
            $kriteria->kode = 'K' . time();
            $kriteria->nama = $request->nama;
            $kriteria->subkriteria = $request->subkriteria;
            $kriteria->kriteria = $request->kriteria;
            $kriteria->save();
            return redirect()->back()->with('success', 'Berhasil menambahkan data aspek kriteria');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Gagal menambahkan data aspek kriteria');
        }
    }
    public function update(Kriteria $kriteria, Request $request)
    {
        $validated = Validator::make($request->all(), [
            'nama' => 'required',
            'subkriteria' => 'required',
            'kriteria' => 'required'
        ]);
        if ($validated->fails()) {
            return redirect()->back()->with('error', 'Gagal mengubah data aspek kriteria');
        }
        try {
            $kriteria->nama = $request->nama;
            $kriteria->subkriteria = $request->subkriteria;
            $kriteria->kriteria = $request->kriteria;
            $kriteria->save();
            return redirect()->back()->with('success', 'Berhasil mengubah data aspek kriteria');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal mengubah data aspek kriteria');
        }
    }
    public function destroy(Kriteria $kriteria)
    {
        try {
            $kriteria->delete();
            return redirect()->back()->with('success', 'Berhasil menghapus data aspek kriteria');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menghapus data aspek kriteria');
        }
    }
}
