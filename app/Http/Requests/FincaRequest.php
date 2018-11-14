<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FincaRequest extends FormRequest
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
            'nombre' => 'required | string | min:2 | max:50',
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
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre no permite valores numericos.',
            'nombre.min' => 'El nombre debe contener minimo dos(2) caracteres.',
            'nombre.max' => 'El nombre permite maximo cincuenta(50) caracteres.',
        ];
    }
}
