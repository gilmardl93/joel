<?php

namespace App\Http\Requests\Admin\Usuarios;

use Illuminate\Foundation\Http\FormRequest;

class RegistrarRequest extends FormRequest
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
            'nombres'   => 'required|min:3',
            'paterno'   => 'required|min:3',
            'materno'   => 'required|min:3',
            'email'     => 'email|required',
            'password'  => 'required|min:3'
        ];
    }
}
