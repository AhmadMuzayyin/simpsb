<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class SiswaExport implements FromCollection, WithHeadings, ShouldAutoSize, WithMapping
{
    protected $siswa;
    public function __construct($siswa)
    {
        $this->siswa = $siswa;
    }
    public function headings(): array
    {
        return [
            'NISN',
            'Nama Lengkap',
            'Jenis Kelamin',
            'WhatsApp',
            'Tempat/Tanggal Lahir',
            'Golongan Darah',
            'Agama',
            'Jumlah Saudara',
            'Anak Ke',
            'Bahasa',
            'Alamat Asal',
            'Alamat Sekarang',
            'Nama Ayah',
            'Pekerjaan Ayah',
            'Penghasilan Ayah',
            'Telpon Ayah',
            'Nama Ibu',
            'Pekerjaan Ibu',
            'Penghasilan Ibu',
            'Telpon Ibu',
            'Alamat Orang Tua',
            'Nama Wali',
            'Pekerjaan Wali',
            'Penghasilan Wali',
            'Telpon Wali',
            'Alamat Wali',
            'Sekolah Asal',
            'Kelas Pilihan',
            'Siswa Pindahan',
        ];
    }
    public function collection()
    {
        return $this->siswa;
    }
    public function map($row): array
    {
        // dd($row);
        return [
            $row->nisn,
            $row->user->name,
            $row->jenis_kelamin,
            $row->whatsapp,
            $row->tempat_lahir . '/' . $row->tanggal_lahir,
            $row->golongan_darah,
            $row->agama,
            $row->jumlah_saudara,
            $row->anak_ke,
            $row->bahasa,
            $row->alamat_asal,
            $row->alamat_sekarang,
            $row->nama_ayah,
            $row->pekerjaan_ayah,
            $row->penghasilan_ayah,
            $row->telpon_ayah,
            $row->nama_ibu,
            $row->pekerjaan_ibu,
            $row->penghasilan_ibu,
            $row->telpon_ibu,
            $row->alamat_ortu,
            $row->nama_wali,
            $row->pekerjaan_wali,
            $row->penghasilan_wali,
            $row->telpon_wali,
            $row->alamat_wali,
            $row->sekolah_asal,
            $row->kelas->nama,
            $row->pindahan,
        ];
    }
}
