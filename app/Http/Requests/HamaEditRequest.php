<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HamaEditRequest extends FormRequest
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
            'code' => 'required|max:255',
            'name' => 'required|max:255'
        ];
    }

    public function attributes()
    {
    return [
        'code' => 'Code Hama',
      ];
    }

    public function messages()
    {
    return [
        'code.required' => 'Code Hama Tidak Boleh Kosong.',
        'name.required' => 'Hama Tidak Boleh Kosong.'
      ];
    }
}
