<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HamaCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'det_hama' => 'required',
            'srn_hama' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Nama Hama Tidak Boleh Kosong.',
            'det_hama.required' => 'Detail Hama Tidak Boleh Kosong.',
            'srn_hama.required' => 'Saran Hama Tidak Boleh Kosong.'
        ];
    }
}
