<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreForkliftRequest extends FormRequest
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
            'nrp' => 'required',
            'nama' => 'required',
            'material' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nrp.required' => 'Tolong Masukan NRP anda terlebih dahulu',
            'nama.required' => 'Tolong Masukan nama anda terlebih dahulu',
            'material.required' => 'Tolong pilih material terlebih dahulu'
        ];
    }
}
