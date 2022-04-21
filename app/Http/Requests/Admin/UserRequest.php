<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:10',
            'email' => 'required|email|unique:users',
            'password' => 'string|min:6|max:12',
            'roles' => 'required|string',
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

        'name.required' => 'Nama ngga boleh kosong, Min!',
        'name.max' => 'Nama ngga boleh lebih dari 10 karakter, Min!',

        'password.min' => 'Kata sandi minimal 6 karakter, Min!',
        'password.max' => 'Kata sandi maksimal 12 karakter, Min!',
        ];
     }
}
