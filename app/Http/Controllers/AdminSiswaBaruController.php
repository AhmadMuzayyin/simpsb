<?php

namespace App\Http\Controllers;

use App\Events\Reactivate;
use App\Exports\DokumenSiswaExport;
use App\Exports\SiswaExport;
use App\Models\DokumenSiswa;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use App\Notifications\SiswaNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use ZipArchive;

class AdminSiswaBaruController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        $kelas = Kelas::all();
        return view('home.admin.siswa.index', compact('siswa', 'kelas'));
    }
    public function confirmation(Siswa $siswa)
    {
        try {
            DokumenSiswa::where('siswa_id', $siswa->id)->update([
                'status' => 'Diterima'
            ]);
            $siswa->update([
                'status' => 'Diterima'
            ]);
            $user = User::whereId($siswa->user_id)->first();
            $user->notify(new SiswaNotification('Selamat anda diterima, silahkan lakukan daftar ulang dan segera lakukan pembayaran'));
            return redirect()->back()->with('succes', 'Data siswa berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data siswa gagal diubah');
        }
    }
    public function notconfirm(Siswa $siswa)
    {
        try {
            $siswa->update([
                'status' => 'Tidak Diterima'
            ]);
            $user = User::whereId($siswa->user_id)->first();
            $user->notify(new SiswaNotification('Mohon maaf anda tidak diterima, silahkan hubungi admin'));
            return redirect()->back()->with('succes', 'Data siswa berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data siswa gagal diubah');
        }
    }
    public function destroy(Siswa $siswa)
    {
        try {
            $siswa->delete();
            return redirect()->back()->with('success', 'Data Siswa berhasil dihapus');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data Siswa gagal dihapus');
        }
    }
    public function perbaiki_data(Siswa $siswa)
    {
        try {
            $siswa->update([
                'status' => 'Perbaiki Data'
            ]);
            $user = User::whereId($siswa->user_id)->first();
            $user->notify(new SiswaNotification('Silahkan perbaiki data diri anda, inputkan data real anda'));
            return redirect()->back()->with('succes', 'Data siswa berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data siswa gagal diubah');
        }
    }
    public function perbaiki_dokumen(Siswa $siswa)
    {
        try {
            $siswa->update([
                'status' => 'Perbaiki Dokumen'
            ]);
            DokumenSiswa::where('siswa_id', $siswa->id)->update([
                'status' => 'Perbaiki Dokumen'
            ]);
            $user = User::whereId($siswa->user_id)->first();
            $user->notify(new SiswaNotification('Silahkan perbaiki data dokumen anda, inputkan dokumen anda yang sesuai'));
            return redirect()->back()->with('succes', 'Data siswa berhasil diubah');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data siswa gagal diubah');
        }
    }
    public function download(Siswa $siswa)
    {
        try {
            if ($siswa->status != 'Diterima') {
                return redirect()->back()->with('error', 'Data siswa belum diterima');
            }
            $nama_siswa = $siswa->user->name;
            $filename = "data-{$nama_siswa}.xlsx";
            return Excel::download(new SiswaExport($siswa->load('user', 'kelas')), $filename);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Data siswa gagal diunduh');
        }
    }
    public function dokumen_download(Siswa $siswa)
    {
        try {
            if ($siswa->dokumen_siswa->status != 'Diterima') {
                return redirect()->back()->with('error', 'Data dokumen siswa belum diterima');
            }
            return Excel::download(new DokumenSiswaExport($siswa->load('user', 'kelas', 'dokumen_siswa', 'dokumen_siswa_pindahan')), 'dokumen_siswa.xlsx');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function lulus(Siswa $siswa)
    {
        try {
            if ($siswa->status_kelulusan == true) {
                $siswa->update([
                    'status_kelulusan' => false
                ]);
                return redirect()->back()->with('success', 'Berhasil merubah data status kelulusan siswa');
            } else {
                $siswa->update([
                    'status_kelulusan' => true
                ]);
                return redirect()->back()->with('success', 'Berhasil merubah data status kelulusan siswa');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal merubah status kelulusan siswa');
        }
    }
}
