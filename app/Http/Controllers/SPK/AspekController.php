<?php

namespace App\Http\Controllers\SPK;

use App\Http\Controllers\Controller;
use App\Models\AspekKriteria;
use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AspekController extends Controller
{
    public function index()
    {
        $kriteria = Kriteria::get();
        $aspek = AspekKriteria::all();
        return view('home.admin.spk.aspek.index', compact('kriteria', 'aspek'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kriteria_id' => 'required|exists:kriterias,id',
            'nilai' => 'required|in:1,2,3,4,5',
            'tipe' => 'required|string|in:NCF,NSF',
            'kode' => 'required|string|unique:aspek_kriterias,kode'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            AspekKriteria::create($request->all());
            return redirect()->back()->with('success', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data gagal ditambahkan');
        }
    }
    public function update(AspekKriteria $aspek, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kriteria_id' => 'required|exists:kriterias,id',
            'nilai' => 'required|in:1,2,3,4,5',
            'tipe' => 'required|string|in:NCF,NSF',
            'kode' => 'required|string|unique:aspek_kriterias,kode,' . $aspek->id
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $aspek->update($request->all());
            return redirect()->back()->with('success', 'Data berhasil diperbarui');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data gagal diperbarui');
        }
    }
    public function destroy(AspekKriteria $aspek)
    {
        try {
            $aspek->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil dihapus'
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data gagal dihapus'
            ]);
        }
    }
}
