<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_anggota' => 'required|string|max:30',
            'status_anggota' => 'string',
            'kata_kata' => 'required|string',
            'foto_anggota' => 'required|image',
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

        'nama_anggota.required' => 'Nama ngga boleh kosong, Min!',
        'nama_anggota.max' => 'Nama ngga boleh lebih dari 30 karakter, Min!',

        'Kata_kata.required' => 'kata-kata ngga boleh kosong, Min!',
        ];
     }
}
