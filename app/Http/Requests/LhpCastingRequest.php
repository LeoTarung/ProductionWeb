<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LhpCastingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'nrp1' => 'required',
            // 'line' => 'required',
            // 'mc' => 'required',
            // 'nama_part' => 'required',
            // 'cavity' => 'required',
            // 'dies' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nrp1' => 'Tolong masukan NRP anda terlebih dahulu',
            'line' => 'Pilih Line Terlebih dahulu',
            'mc' => 'Pilih Mesin terlebih dahulu',
            'nama_part' => 'Masukan Nama part',
            'cavity' => 'required',
            'dies' => 'required',
        ];
    }
}
