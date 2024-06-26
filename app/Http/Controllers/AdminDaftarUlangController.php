<?php

namespace App\Http\Controllers;

use App\Models\DaftarUlang;
use Illuminate\Http\Request;

class AdminDaftarUlangController extends Controller
{
    public function index()
    {
        $daftar_ulang = DaftarUlang::all();
        return view('home.admin.daftar_ulang.index', compact('daftar_ulang'));
    }
}
