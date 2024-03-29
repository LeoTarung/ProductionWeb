<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LhpForkliftRawRequest extends FormRequest
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
            'jumlah_tapping' => 'required',
            'furnace' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'jumlah_tapping.required' => 'Tolong Masukan Beratnya Terlebih dahulu',
            'furnace.required' => 'Tolong Pilih furnace terlebih dahulu'
        ];
    }
}
