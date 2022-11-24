<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'usu_nombres' => 'required',
            'usu_apellidos' => 'required',
            'usu_correo' => 'required|unique:usuarios,usu_correo',
            'usu_contrasena' => 'required|same:usu_confirmar_contrasena',
            'usu_confirmar_contrasena' => 'required|same:usu_contrasena',
            'usu_cedula' => 'required|unique:usuarios,usu_cedula'
        ];
    }
}
