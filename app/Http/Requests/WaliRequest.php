<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WaliRequest extends FormRequest
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
            'kondisi_ayah' => 'required|string',
            'kondisi_ibu' => 'required|string',
            'nama_wali' => 'nullable|string',
            'pekerjaan_wali' => 'nullable|string',
            'kondisi_wali' => 'nullable|string',
            'penghasilan_wali' => 'nullable|numeric',
            'telpon_wali' => 'nullable|numeric',
            'alamat_wali' => 'nullable|string',
        ];
    }
}
