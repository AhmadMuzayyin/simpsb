<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class DokumenSiswaExport implements ShouldAutoSize, WithDrawings
{
    protected $siswa;
    public function __construct($siswa)
    {
        $this->siswa = $siswa;
    }
    public function drawings()
    {
        $spreedsheet = new Spreadsheet();
        $sheet = $spreedsheet->getActiveSheet();
        $col = 'A';
        $row = 2;
        $data = [
            "Ijazah" => $this->siswa->dokumen_siswa->file_pendukung,
            "Kartu_Keluarga" => $this->siswa->dokumen_siswa->file_kk,
            "Akta_Lahir" => $this->siswa->dokumen_siswa->file_akta,
            "Foto_3x4" => $this->siswa->dokumen_siswa->file_foto
        ];
        if ($this->siswa->dokumen_siswa_pindahan) {
            $data += [
                "Surat_pindah" => $this->siswa->dokumen_siswa_pindahan->surat_pindah,
                "Raport_Terakhir" => $this->siswa->dokumen_siswa_pindahan->raport_terakhir,
                "Keterangan_Prilaku_Baik" => $this->siswa->dokumen_siswa_pindahan->keterangan_prilaku_baik,
                "Surat_Rekomendasi" => $this->siswa->dokumen_siswa_pindahan->rekomendasi,
                "Surat_Perwalian" => $this->siswa->dokumen_siswa_pindahan->surat_perwalian,
                "Sertifikat_Akreditasi_Sekolah_Asal" => $this->siswa->dokumen_siswa_pindahan->sertifikat_akreditasi_sekolah,
                "KTP_Orang_Tua" => $this->siswa->dokumen_siswa_pindahan->ktp_orang_tua,
            ];
        }
        $col = 'A';
        foreach (array_keys($data) as $key) {
            $sheet->setCellValue($col . '1', str_replace('_', ' ', $key));
            $sheet->getColumnDimension($col)->setWidth(50);
            $col++;
        }
        $col = 'A';
        foreach ($data as $key => $path) {
            $drawing = new Drawing();
            $drawing->setName($key);
            $drawing->setDescription($key);
            $drawing->setPath(public_path($path));
            $drawing->setHeight(90);
            $drawing->setCoordinates($col . $row);
            $drawing->setOffsetX(20);
            $drawing->setOffsetY(20);
            $drawing->setWorksheet($sheet);

            // Atur tinggi baris dan lebar kolom
            $sheet->getRowDimension($row)->setRowHeight(100);
            $sheet->getColumnDimension($col)->setWidth(50);

            // Pindah ke kolom berikutnya
            $col++;
        }

        // return $drawing;
        $nama_siswa = $this->siswa->user->name;
        $filename = "dokumen-{$nama_siswa}.xlsx";
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment;filename=\"{$filename}\"");
        header('Cache-Control: max-age=0');

        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreedsheet, 'Xlsx');
        $writer->save('php://output');
    }
    // public function map($row): array
    // {
    //     // dd($row);
    //     return [
    //         $row->nisn,
    //         $row->user->name,
    //         $row->jenis_kelamin,
    //         $row->whatsapp,
    //         $row->tempat_lahir . '/' . $row->tanggal_lahir,
    //         $row->golongan_darah,
    //         $row->agama,
    //         $row->jumlah_saudara,
    //         $row->anak_ke,
    //         $row->bahasa,
    //         $row->alamat_asal,
    //         $row->alamat_sekarang,
    //         $row->nama_ayah,
    //         $row->pekerjaan_ayah,
    //         $row->penghasilan_ayah,
    //         $row->telpon_ayah,
    //         $row->nama_ibu,
    //         $row->pekerjaan_ibu,
    //         $row->penghasilan_ibu,
    //         $row->telpon_ibu,
    //         $row->alamat_ortu,
    //         $row->nama_wali,
    //         $row->pekerjaan_wali,
    //         $row->penghasilan_wali,
    //         $row->telpon_wali,
    //         $row->alamat_wali,
    //         $row->sekolah_asal,
    //         $row->kelas->nama,
    //         $row->pindahan,
    //     ];
    // }
}
