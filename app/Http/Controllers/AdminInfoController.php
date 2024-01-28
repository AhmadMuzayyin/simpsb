<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminInfoController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('home.admin.info.index', compact('posts', 'categories'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        try {
            $request->file('gambar')->store('public/info');
            Post::create([
                'judul' => $request->judul,
                'slug' => Str::slug($request->judul),
                'category_id' => $request->category_id,
                'isi' => $request->isi,
                'gambar' => 'storage/info/' . $request->file('gambar')->hashName(),
            ]);
            return redirect()->back()->with('success', 'Info berhasil ditambahkan');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', 'Info gagal ditambahkan');
        }
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        try {
            if ($request->hasFile('gambar')) {
                if (file_exists(public_path($post->gambar))) {
                    unlink(public_path($post->gambar));
                }
                $request->file('gambar')->store('public/info');
                $post->update([
                    'judul' => $request->judul,
                    'category_id' => $request->category_id,
                    'isi' => $request->isi,
                    'gambar' => 'storage/info/' . $request->file('gambar')->hashName(),
                ]);
            } else {
                $post->update([
                    'judul' => $request->judul,
                    'category_id' => $request->category_id,
                    'isi' => $request->isi,
                ]);
            }
            return redirect()->back()->with('success', 'Info berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Info gagal diubah');
        }
    }
    public function destroy(Post $post)
    {
        try {
            if (file_exists(public_path($post->gambar))) {
                unlink(public_path($post->gambar));
            }
            $post->delete();
            return redirect()->back()->with('success', 'Info berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Info gagal dihapus');
        }
    }

    public function category_store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        try {
            Category::create([
                'nama' => $request->nama,
            ]);
            return redirect()->back()->with('success', 'Kategori berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Kategori gagal ditambahkan');
        }
    }
    public function category_update(Request $request, Category $category)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        try {
            $category->update([
                'nama' => $request->nama,
            ]);
            return redirect()->back()->with('success', 'Kategori berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Kategori gagal diubah');
        }
    }
    public function category_destroy(Category $category)
    {
        try {
            $category->delete();
            return redirect()->back()->with('success', 'Kategori berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Kategori gagal dihapus');
        }
    }
}
