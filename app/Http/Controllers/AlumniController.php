<?php

namespace App\Http\Controllers;

use App\Exports\AlumniExport;
use App\Models\Kelas;
use App\Models\Pendaftaran;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AlumniController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with(['user', 'kelas', 'dokumen_siswa', 'dokumen_siswa_pindahan', 'pendaftaran'])
            ->where('status_kelulusan', true)
            ->when(request()->has('tahun_akademik'), function ($query) {
                $query->whereHas('pendaftaran', function ($q) {
                    $q->where('tahun_akademik', request('tahun_akademik'));
                });
            })
            ->get();
        $kelas = Kelas::all();
        $tahun_akademik = Pendaftaran::select('tahun_akademik')->distinct()->get();
        return view('home.admin.alumni.index', compact('siswa', 'kelas', 'tahun_akademik'));
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
