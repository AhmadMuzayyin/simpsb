<?php

namespace App\Http\Controllers;

use App\Exports\AlumniExport;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AlumniController extends Controller
{
    public function index()
    {
        $siswa = Siswa::where('status_kelulusan', true)->get();
        $kelas = Kelas::all();
        return view('home.admin.alumni.index', compact('siswa', 'kelas'));
    }
    public function download(Siswa $siswa)
    {
        try {
            if ($siswa->status_kelulusan != true) {
                return redirect()->back()->with('error', 'Data siswa belum lulus');
            } else {
                $nama_siswa = $siswa->user->name;
                $filename = "data-{$nama_siswa}.xlsx";
                return Excel::download(new AlumniExport($siswa->load('user', 'kelas')), $filename);
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data siswa gagal diunduh');
        }
    }
}
