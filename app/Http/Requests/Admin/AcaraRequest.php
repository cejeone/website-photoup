<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AcaraRequest extends FormRequest
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
            'judul_acara' => 'required|string',
            'deskripsi_acara' => 'required',
            'poster' => 'image',
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
        'judul_acara.required' => 'Nama Acara ngga boleh kosong, Min!',
        'deskripsi_acara.required' => 'Deskripsi ngga boleh kosong, Min!',
        ];
    }
}
