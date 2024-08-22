<?php

namespace App\Helpers;

use App\Models\Penilaian;

class PerhitunganHelper
{
    public static $hasilPerhitungan = [];
    public static function calcAK()
    {
        $data = Penilaian::all();
        $hasil = [];
        foreach ($data->groupBy('siswa_id') as $siswa_id => $nilai) {
            $total_cf = 0;
            $total_sf = 0;
            $count_cf = 0;
            $count_sf = 0;
            foreach ($nilai as $item) {
                if ($item->aspek_kriteria->kriteria->nama == 'Aspek Keluarga') {
                    $gap = $item->nilai - $item->aspek_kriteria->nilai;
                    if ($gap == 0) {
                        $bobot = 5;
                    } elseif ($gap == 1) {
                        $bobot = 4.5;
                    } elseif ($gap == -1) {
                        $bobot = 4;
                    } elseif ($gap == 2) {
                        $bobot = 3.5;
                    } elseif ($gap == -2) {
                        $bobot = 3;
                    } elseif ($gap == 3) {
                        $bobot = 2.5;
                    } elseif ($gap == -3) {
                        $bobot = 2;
                    } elseif ($gap == 4) {
                        $bobot = 1.5;
                    } elseif ($gap == -4) {
                        $bobot = 1;
                    } else {
                        $bobot = 0;
                    }
                    if ($item->aspek_kriteria->tipe == 'NCF') {
                        $total_cf += $bobot;
                        $count_cf++;
                    } else {
                        $total_sf += $bobot;
                        $count_sf++;
                    }
                }
            }
            $avg_cf = $count_cf > 0 ? $total_cf / $count_cf : 0;
            $avg_sf = $count_sf > 0 ? $total_sf / $count_sf : 0;
            // Bobot faktor, misalnya 60% untuk Core dan 40% untuk Secondary
            $bobot_cf = 0.6;
            $bobot_sf = 0.4;
            $total_final = ($avg_cf * $bobot_cf) + ($avg_sf * $bobot_sf);
            $hasil[] = [
                'siswa_id' => $siswa_id,
                'nama_siswa' => $nilai[0]->siswa->user->name,
                'total_cf_ak' => number_format($avg_cf, 2),
                'total_sf_ak' => number_format($avg_sf, 2),
                'total_final_ak' => number_format($total_final, 2)
            ];
        }
        return $hasil;
    }
    public static function calcASE()
    {
        $data = Penilaian::all();
        $hasil = [];
        foreach ($data->groupBy('siswa_id') as $siswa_id => $nilai) {
            $total_cf = 0;
            $total_sf = 0;
            $count_cf = 0;
            $count_sf = 0;
            foreach ($nilai as $item) {
                if ($item->aspek_kriteria->kriteria->nama == 'Aspek Sosial Ekonomi') {
                    $gap = $item->nilai - $item->aspek_kriteria->nilai;
                    if ($gap == 0) {
                        $bobot = 5;
                    } elseif ($gap == 1) {
                        $bobot = 4.5;
                    } elseif ($gap == -1) {
                        $bobot = 4;
                    } elseif ($gap == 2) {
                        $bobot = 3.5;
                    } elseif ($gap == -2) {
                        $bobot = 3;
                    } elseif ($gap == 3) {
                        $bobot = 2.5;
                    } elseif ($gap == -3) {
                        $bobot = 2;
                    } elseif ($gap == 4) {
                        $bobot = 1.5;
                    } elseif ($gap == -4) {
                        $bobot = 1;
                    } else {
                        $bobot = 0;
                    }
                    if ($item->aspek_kriteria->tipe == 'NCF') {
                        $total_cf += $bobot;
                        $count_cf++;
                    } else {
                        $total_sf += $bobot;
                        $count_sf++;
                    }
                }
            }
            $avg_cf = $count_cf > 0 ? $total_cf / $count_cf : 0;
            $avg_sf = $count_sf > 0 ? $total_sf / $count_sf : 0;
            // Bobot faktor, misalnya 60% untuk Core dan 40% untuk Secondary
            $bobot_cf = 0.6;
            $bobot_sf = 0.4;
            $total_final = ($avg_cf * $bobot_cf) + ($avg_sf * $bobot_sf);
            $hasil[] = [
                'siswa_id' => $siswa_id,
                'nama_siswa' => $nilai[0]->siswa->user->name,
                'total_cf_ase' => number_format($avg_cf, 2),
                'total_sf_ase' => number_format($avg_sf, 2),
                'total_final_ase' => number_format($total_final, 2)
            ];
        }
        return $hasil;
    }
    public static function calcAA()
    {
        $data = Penilaian::all();
        $hasil = [];
        foreach ($data->groupBy('siswa_id') as $siswa_id => $nilai) {
            $total_cf = 0;
            $total_sf = 0;
            $count_cf = 0;
            $count_sf = 0;
            foreach ($nilai as $item) {
                if ($item->aspek_kriteria->kriteria->nama == 'Aspek Akademik') {
                    $gap = $item->nilai - $item->aspek_kriteria->nilai;
                    if ($gap == 0) {
                        $bobot = 5;
                    } elseif ($gap == 1) {
                        $bobot = 4.5;
                    } elseif ($gap == -1) {
                        $bobot = 4;
                    } elseif ($gap == 2) {
                        $bobot = 3.5;
                    } elseif ($gap == -2) {
                        $bobot = 3;
                    } elseif ($gap == 3) {
                        $bobot = 2.5;
                    } elseif ($gap == -3) {
                        $bobot = 2;
                    } elseif ($gap == 4) {
                        $bobot = 1.5;
                    } elseif ($gap == -4) {
                        $bobot = 1;
                    } else {
                        $bobot = 0;
                    }
                    if ($item->aspek_kriteria->tipe == 'NCF') {
                        $total_cf += $bobot;
                        $count_cf++;
                    } else {
                        $total_sf += $bobot;
                        $count_sf++;
                    }
                }
            }
            $avg_cf = $count_cf > 0 ? $total_cf / $count_cf : 0;
            $avg_sf = $count_sf > 0 ? $total_sf / $count_sf : 0;
            // Bobot faktor, misalnya 60% untuk Core dan 40% untuk Secondary
            $bobot_cf = 0.6;
            $bobot_sf = 0.4;
            $total_final = ($avg_cf * $bobot_cf) + ($avg_sf * $bobot_sf);
            $hasil[] = [
                'siswa_id' => $siswa_id,
                'nama_siswa' => $nilai[0]->siswa->user->name,
                'total_cf_aa' => number_format($avg_cf, 2),
                'total_sf_aa' => number_format($avg_sf, 2),
                'total_final_aa' => number_format($total_final, 2)
            ];
        }
        return $hasil;
    }
    public static function setHasilPerhitungan()
    {
        $data = array_merge(self::calcAK(), self::calcASE(), self::calcAA());
        self::$hasilPerhitungan = $data;
    }
    public static function getHasilPerhitungan()
    {
        return self::$hasilPerhitungan;
    }
}
