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
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'kriteria_id' => 'required|exists:kriterias,id',
            'nilai' => 'required|in:1,2,3,4,5',
            'tipe' => 'required|string|in:NCF,NSF',
            'kode' => 'required|string|unique:aspek_kriterias,kode'
        ]);
        if ($validator->fails()) {
            dd($validator->errors());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            AspekKriteria::create($request->all());
            return redirect()->back()->with('success', 'Data berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data gagal ditambahkan');
        }
    }
}
