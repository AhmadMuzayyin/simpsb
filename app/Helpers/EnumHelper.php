<?php

namespace App\Helpers;

class EnumHelper
{
    const Kriteria = [
        'Aspek Keluarga', // kondisi ayah dan ibu, jumlah saudara kandung
        'Aspek Sosial Ekonomi', // pekerjaan orang tua, penghasilan orang tua
        'Aspek Akademik' // nilai rata rata rapor
    ];
    const SubKriteria = [
        'Status Anak' =>
        [
            'Yatim Piatu',
            'Yatim',
            'Piatu',
            'Orang Tua Lengkap'
        ],
        'Jumlah Saudara Kandung' =>
        [
            'Tanpa Saudara Kandung',
            '1 Saudara Kandung',
            '2 Saudara Kandung',
            'Lebih dari 2 Saudara Kandung'
        ],
        'Pekerjaan Orang Tua' =>
        [
            'Tidak Bekerja',
            'Pekerja Tidak Tetap (Pekerja Lepas, Buruh, Dll)',
            'Pekerja Tetap (PNS, Karyawan Swasta, Dll)',
            'Pengusaha'
        ],
        'Penghasilan Orang Tua' =>
        [
            'Dibawah Garis Kemiskinan (Rp. 5.00.000/bulan)',
            'Menengah ke bawah (Rp. 500.000 - Rp. 2.000.000/bulan)',
            'Menengah (Rp. 2.000.000 - Rp. 5.000.000/bulan)',
            'Menengah ke atas (Rp. 5.000.000 - Rp. 20.000.000/bulan)'
        ],
        'Nilai Akademik' =>
        [
            'Kurang (0-50)',
            'Cukup (60-70)',
            'Baik (80-90)',
            'Sangat Baik (100)',
        ]
    ];
}
