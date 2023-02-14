<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingMoltenRequest extends FormRequest
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
            // 'material' => 'required',
            'min_level_molten' => 'required',
            'max_level_molten' => 'required'

        ];
    }

    public function messages()
    {
        return [
            // 'material.required' => 'Tolong pilih materialnya terlebih dahulu',
            'min_level_molten.required' => 'Tolong Masukan Angka Minimal terlebih dahulu',
            'max_level_molten.required' => 'Tolong Masukan Angka Maximal terlebih dahulu'
        ];
    }
}
