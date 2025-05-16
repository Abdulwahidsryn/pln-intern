<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDataDiriRequest extends FormRequest
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
            'nama_lengkap' => ['nullable', 'string', 'max:255'],
            'nim' => ['nullable', 'string', 'max:20', 'unique:users,nim,' . auth()->id()],
            'program_studi' => ['nullable', 'string', 'max:255'],
            'fakultas' => ['nullable', 'string', 'max:255'],
            'universitas' => ['nullable', 'string', 'max:255'],
            'nomor_telepon' => ['nullable', 'string', 'max:20'],
            'tentang_saya' => ['nullable', 'string'],
            'tempat_lahir' => ['nullable', 'string', 'max:255'],
            'tanggal_lahir' => ['nullable', 'date'],
            'jenis_kelamin' => ['nullable', 'in:laki-laki,perempuan'],
            'alamat_domisili' => ['nullable', 'string'],
            'provinsi_id' => ['nullable', 'exists:indonesia_provinces,id'], 
            'kota_id' => ['nullable', 'exists:indonesia_cities,id'],
        ];
    }
}