<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaPendaftaranRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|exists:users,id',
            'kelas_id' => 'required|exists:kelas,id',
            'nama_panggilan' => 'required',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'golongan_darah' => 'required|string|max:3',
            'agama' => 'required|string',
            'alamat_asal' => 'required|string',
            'alamat_sekarang' => 'required|string',
            'whatsapp' => 'required|numeric',
            'anak_ke' => 'required|numeric',
            'jumlah_saudara' => 'required|numeric',
            'bahasa' => 'required|string',
            'sekolah_asal' => 'required|string',
            'ijazah_terakhir' => 'required|in:SMP,MTS',
            'nisn' => 'required|numeric',
            'nama_ayah' => 'required|string',
            'pekerjaan_ayah' => 'required|string',
            'kondisi_ayah' => 'required|string',
            'penghasilan_ayah' => 'required|numeric',
            'telpon_ayah' => 'required|numeric',
            'nama_ibu' => 'required|string',
            'pekerjaan_ibu' => 'required|string',
            'kondisi_ibu' => 'required|string',
            'penghasilan_ibu' => 'required|numeric',
            'telpon_ibu' => 'required|numeric',
            'alamat_ortu' => 'required|string',
        ];
    }
}
