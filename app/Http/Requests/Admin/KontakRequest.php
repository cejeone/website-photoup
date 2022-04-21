<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class KontakRequest extends FormRequest
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
            'humas1' => 'required|string|max:6',
            'telepon1' => 'required|string|max:20',
            'konfirmasi_telepon1' => 'required|string|max:20',
            'humas2' => 'required|string|max:6',
            'telepon2' => 'required|string|max:20',
            'konfirmasi_telepon2' => 'required|string|max:20',

        ];
    }

    public function messages()
    {
        return [
            'humas1.required' => 'Nama Humas ngga boleh kosong, Min!',
            'humas1.max' => 'Nama Humas ngga boleh lebih dari 6 karakter, Min!',
            'telepon1.required' => 'Nomor telepon Humas ngga boleh kosong, Min!',
            'konfirmasi_telepon1.required' => 'Nomor telepon Humas ngga boleh kosong, Min!',

            'humas2.required' => 'Nama Humas ngga boleh kosong, Min!',
            'humas2.max' => 'Nama Humas ngga boleh lebih dari 6 karakter, Min!',
            'telepon2.required' => 'Nomor telepon Humas ngga boleh kosong, Min!',
            'konfirmasi_telepon2.required' => 'Nomor telepon Humas ngga boleh kosong, Min!',

        ];
    }
}
