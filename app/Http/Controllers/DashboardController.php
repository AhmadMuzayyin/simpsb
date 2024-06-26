<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Kelas;
use App\Models\Post;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        $galeri = Galeri::all();
        $posts = Post::all();
        return view('home.index', compact('kelas', 'siswa', 'galeri', 'posts'));
    }
}
