<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class AdminGaleriController extends Controller
{
    public function index()
    {
        $galeries = \App\Models\Galeri::all();
        return view('home.admin.galeri.index', compact('galeries'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'required',
        ]);
        try {
            $request->file('gambar')->store('public/galeri');
            Galeri::create([
                'kategori' => $request->kategori,
                'judul' => $request->judul,
                'gambar' => 'storage/galeri/' . $request->file('gambar')->hashName(),
                'deskripsi' => $request->deskripsi,
            ]);
            return redirect()->back()->with('success', 'Berhasil menyimpan gambar');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menyimpan gambar');
        }
    }
    public function update(Galeri $galeri, Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'judul' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'required',
        ]);
        try {
            if ($request->hasFile('gambar')) {
                if (file_exists($galeri->gambar)) {
                    unlink(public_path($galeri->gambar));
                }
                $request->file('gambar')->store('public/galeri');
                $galeri->update([
                    'kategori' => $request->kategori,
                    'judul' => $request->judul,
                    'gambar' => 'storage/galeri/' . $request->file('gambar')->hashName(),
                    'deskripsi' => $request->deskripsi,
                ]);
            } else {
                $galeri->update([
                    'kategori' => $request->kategori,
                    'judul' => $request->judul,
                    'deskripsi' => $request->deskripsi,
                ]);
            }
            return redirect()->back()->with('success', 'Berhasil mengubah gambar');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal mengubah gambar');
        }
    }
    public function destroy(Galeri $galeri)
    {
        try {
            if (file_exists($galeri->gambar)) {
                unlink(public_path($galeri->gambar));
            }
            $galeri->delete();
            return redirect()->back()->with('success', 'Berhasil menghapus gambar');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menghapus gambar');
        }
    }
}
