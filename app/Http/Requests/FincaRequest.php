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
            'departamento' => 'required | string | min:2 | max:50',
            'municipio' => 'required | string | min:2 | max:50',
            'direccion' => 'string | min:2 | max:250',
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
            'departamento.required' => 'El departamento es obligatorio.',
            'departamento.string' => 'El departamento no permite valores numericos.',
            'departamento.min' => 'El departamento debe contener minimo dos(2) caracteres.',
            'departamento.max' => 'El departamento permite maximo cincuenta(50) caracteres.',
            'municipio.required' => 'El municipio es obligatorio.',
            'municipio.string' => 'El municipio no permite valores numericos.',
            'municipio.min' => 'El municipio debe contener minimo dos(2) caracteres.',
            'municipio.max' => 'El municipio permite maximo cincuenta(50) caracteres.',
            'direccion.string' => 'La direccion no permite valores numericos.',
            'direccion.min' => 'La direccion debe contener minimo dos(2) caracteres.',
            'direccion.max' => 'La direccion permite maximo docientoscincuenta(250) caracteres.',
        ];
    }
}
