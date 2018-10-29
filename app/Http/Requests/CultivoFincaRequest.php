<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CultivoFincaRequest extends FormRequest
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
            'finca_id' => 'required | integer | min:1',
            'cultivo_id' => 'required | integer | min:1',
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
            'finca_id.required' => 'El identificador(id) de la finca es requerido.',
            'finca_id.integer' => 'El identificador(id) debe ser un numero entero positivo.',
            'cultivo_id.required' => 'El identificador(id) de la finca es requerido.',
            'finca_id.integer' => 'El identificador(id) debe ser un numero entero positivo.',
        ];
    }
}
