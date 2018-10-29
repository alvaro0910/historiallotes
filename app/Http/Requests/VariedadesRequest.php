<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VariedadesRequest extends FormRequest
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
            'variedad' => 'required | string | min:2 | max:100',
            'descripcion' => 'string'
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
            'variedad.required' => 'La variedad es obligatoria.',
            'variedad.string' => 'La variedad no permite valores numericos.',
            'variedad.min' => 'La variedad debe contener minimo dos(2) caracteres.',
            'cultivo.max' => 'La variedad permite maximo cien(100) caracteres.',
            'descripcion.string' => 'La descripcion no permite valores vacios o numericos.',
        ];
    }
}
