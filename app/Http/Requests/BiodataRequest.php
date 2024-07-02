<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiodataRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'nama_panggilan' => 'required',
            'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'golongan_darah' => 'required|string|max:3',
            'agama' => 'required|string|in:Islam,Kristen,Katolik,Hindu,Budha,Konghucu',
            'whatsapp' => 'required|numeric',
            'anak_ke' => 'required|numeric',
            'jumlah_saudara' => 'required|numeric',
            'bahasa' => 'required|string',
            'alamat_asal' => 'required|string',
            'alamat_sekarang' => 'required|string',
        ];
    }
}
