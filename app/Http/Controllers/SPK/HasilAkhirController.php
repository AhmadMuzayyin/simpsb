<?php

namespace App\Http\Controllers\SPK;

use App\Helpers\PerhitunganHelper;
use App\Http\Controllers\Controller;
use App\Models\HasilAkhir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HasilAkhirController extends Controller
{
    public function index()
    {
        PerhitunganHelper::setHasilPerhitungan();
        $data = PerhitunganHelper::getHasilPerhitungan();
        $merge_data = [];
        foreach ($data as $entry) {
            $siswa_id = $entry['siswa_id'];
            if (!isset($merge_data[$siswa_id])) {
                $merge_data[$siswa_id] = [
                    'siswa_id' => $siswa_id,
                    'nama_siswa' => $entry['nama_siswa'],
                ];
            }
            foreach ($entry as $key => $value) {
                if ($key !== 'siswa_id' && $key !== 'nama_siswa') {
                    $merge_data[$siswa_id][$key] = $value;
                }
            }
        }
        $result = [];
        foreach ($merge_data as $key => $maping) {
            $result[] = [
                'siswa_id' => $maping['siswa_id'],
                'nama_siswa' => $maping['nama_siswa'],
                'nilai_akhir' => $maping['total_final_ak'] + $maping['total_final_ase'] + $maping['total_final_aa'],
            ];
        }
        usort($result, function ($a, $b) {
            return $b['nilai_akhir'] <=> $a['nilai_akhir'];
        });
        // Berikan ranking berdasarkan urutan
        foreach ($result as $index => $entry) {
            $result[$index]['ranking'] = $index + 1;
        }
        $total_siswa = count($result);
        $layak_limit = 1;
        if ($total_siswa > 2) {
            $layak_limit = ceil(0.4 * $total_siswa);
        }
        foreach ($result as $attribute) {
            if ($attribute['ranking'] <= $layak_limit) {
                $attribute['status'] = 'Layak';
            } else {
                $attribute['status'] = 'Tidak Layak';
            }
            HasilAkhir::updateOrCreate([
                'siswa_id' => $attribute['siswa_id'],
            ], [
                'nilai_akhir' => $attribute['nilai_akhir'],
                'ranking' => $attribute['ranking'],
                'status' => $attribute['status'],
            ]);
        }
        $result = HasilAkhir::all();
        return view('home.admin.spk.hasil.index', compact('result'));
    }
}
