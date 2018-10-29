<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CultivoRequest extends FormRequest
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
            'cultivo' => 'required | string | min:2 | max:50',
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
            'cultivo.required' => 'Se debe especificar el cultivo.',
            'cultivo.string' => 'El cultivo no permite valores numericos.',
            'cultivo.min' => 'El cultivo debe contener minimo dos(2) caracteres.',
            'cultivo.max' => 'El cultivo permite maximo cincuenta(50) caracteres.',
            'descripcion.string' => 'La descripcion no permite valores vacios o numericos.',
        ];
    }
}
