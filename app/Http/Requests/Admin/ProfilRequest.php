<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProfilRequest extends FormRequest
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
            'nama_ketum' => 'required|string',
            'periode_ketum' => 'required|string',
            'sambutan' => 'required|string',
            'foto_ketum' => 'image',
            'foto_struktural' => 'image',
        ];
    }

    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'nama_ketum.required' => 'Nama ketum ngga boleh kosong, Min!',
            'periode_ketum.required' => 'Periode ketum ngga boleh kosong, Min!',
            'sambutan.required' => 'Sambutan ngga boleh kosong, Min!',
        ];
    }
}
