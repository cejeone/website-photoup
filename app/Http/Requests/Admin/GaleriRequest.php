<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GaleriRequest extends FormRequest
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
            'nama' => 'required|string|max:30',
            'judul' => 'string',
            'tag' => 'required|string',
            'foto' => 'image',
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

        'nama.required' => 'Nama ngga boleh kosong, Min!',
        'nama.max' => 'Nama ngga boleh lebih dari 30 karakter, Min!',

        'judul.required' => 'Judul ngga boleh kosong, Min!',
    ];
    }
}
