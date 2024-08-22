<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SekolahRequest extends FormRequest
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
            'sekolah_asal' => 'required|string',
            'ijazah_terakhir' => 'required|in:SMP,MTS',
            'nisn' => 'required|numeric',
            'pindahan' => 'required|in:Ya,Tidak',
            'nilai_akademik' => 'required|in:Kurang (0-50),Cukup (60-70),Baik (80-90),Sangat Baik (100)',
        ];
    }
}
