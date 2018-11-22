<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoteRequest extends FormRequest
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
            'codigo' => 'required | min:1 | max:9999999999',
            'nombre' => 'required | string | min:1 | max:255',
            'area' => 'required | numeric | min:0.001',
            'poblacion' => 'required | integer | min:1 | max:9999999999',
            'edad' => 'integer | min:1',
            'alturasnm' => 'integer',
            'cultivo_id' => 'required | integer',
            'variedad_id' => 'required | integer',
            'finca_id' => 'required | integer',
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
            'codigo.required' => 'El código es obligatorio.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre no permite valores numéricos.',
            'area.required' => 'El área es obligatoria.',
            'area.numeric' => 'El área debe ser un valor numérico positivo.',
            'area.min' => 'El área debe ser un valor numérico positivo.',
            'poblacion.required' => 'La población es obligatoria.',
            'poblacion.integer' => 'La población debe ser un número entero positivo entre 1 y 9999999999.',
            'poblacion.min' => 'La población debe ser un número entero positivo entre 1 y 9999999999.',
            'poblacion.max' => 'La población debe ser un número entero positivo entre 1 y 9999999999.',
            'edad.integer' => 'La edad debe ser un número entero positivo.(Este campo no es obligatorio)',
            'edad.min' => 'La edad debe ser aayor a cero (0)',
            'alturasnm.integer' => 'La altura sobre el nivel del mar debe ser un número positivo.(Este campo no es obligatorio)',
            'cultivo_id.required' => 'El identificador(id) del cultivo es requerido.',
            'variedad_id.required' => 'El identificador(id) de la variedad es requerido.',
            'finca_id.required' => 'El identificador(id) de la finca es requerido.',
        ];
    }
}
