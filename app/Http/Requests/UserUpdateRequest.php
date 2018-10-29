<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
            'name' => 'required | string | min:2 | max:50',
            'email' => 'required | email',
            'tipo' => 'required',
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
            'name.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre no permite valores numericos.',
            'nombre.min' => 'El nombre debe contener minimo 2 caracteres.',
            'nombre.max' => 'El nombre debe contener maximo 50 caracteres.',
            'email.required' => 'El correo es obligatorio.',
            'email.email' => 'El correo debe tener un formato correcto ejemplo@dominio.ext.',
            'tipo.string' => 'El tipo es obligatorio.',
        ];
    }
}
