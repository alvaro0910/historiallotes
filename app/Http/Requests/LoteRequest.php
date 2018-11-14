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
            //'edad' => 'integer',
            //'alturasnm' => 'integer',
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
            'codigo.required' => 'El codigo es obligatorio.',
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.string' => 'El nombre no permite valores numericos.',
            'area.required' => 'El area es obligatoria.',
            'area.numeric' => 'El area debe ser un valor numerico positivo.',
            'area.min' => 'El area debe ser un valor numerico positivo.',
            'poblacion.required' => 'La poblacion es obligatoria.',
            'poblacion.integer' => 'El area debe ser un numero entero positivo entre 1 y 9999999999.',
            'poblacion.min' => 'El area debe ser un numero entero positivo entre 1 y 9999999999.',
            'poblacion.max' => 'El area debe ser un numero entero positivo entre 1 y 9999999999.',
            //'edad.integer' => 'La edad debe ser un numero entero positivo.(Este campo no es obligatorio)',
            //'alturasnm.integer' => 'La altura sobre el nivel del mar debe ser un numero positivo.(Este campo no es obligatorio)',
            'cultivo_id.required' => 'El identificador(id) del cultivo es requerido.',
            'variedad_id.required' => 'El identificador(id) de la variedad es requerido.',
            'finca_id.required' => 'El identificador(id) de la finca es requerido.',
        ];
    }
}
