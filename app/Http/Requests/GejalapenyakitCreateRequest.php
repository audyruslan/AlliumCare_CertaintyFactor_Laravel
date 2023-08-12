<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GejalapenyakitCreateRequest extends FormRequest
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
            'code' => 'required|max:255|unique:gejalapenyakits',
            'name' => 'required|max:255'
        ];
    }

    public function attributes()
    {
    return [
        'code' => 'Code Gejalapenyakit',
      ];
    }

    public function messages()
    {
    return [
        'code.unique' => 'Code Gejala Penyakit Sudah Ada!',
        'name.required' => 'Gejala Penyakit Tidak Boleh Kosong.'
      ];
    }
}
