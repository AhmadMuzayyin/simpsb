<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $galeries = Galeri::all();
        $posts = Post::latest()->take(3)->get();
        return view('index', compact('galeries', 'posts'));
    }
    public function blog()
    {
        $posts = Post::latest()->paginate(3);
        return view('blog.list', compact('posts'));
    }
    public function post(Post $post)
    {
        return view('blog.single', compact('post'));
    }
    public function galeri()
    {
        $galeries = Galeri::all();
        return view('galeri', compact('galeries'));
    }
}
