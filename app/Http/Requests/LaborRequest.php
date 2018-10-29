<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LaborRequest extends FormRequest
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
            'descripcion' => 'string',
            'cantidadmo' => 'required | numeric | min:1 |max:9999',
            'costo' => 'required | integer | min:1',
            'periodo' => 'required | date',
            'grupo_labor_id' => 'required | integer | min:1',
            'lote_id' => 'required | integer | min:1',
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
            'descripcion.string' => 'La descripcion no permite valores numericos.',
            'cantidadmo.required' => 'La cantidad de mano de obra es obligatoria.',
            'cantidadmo.numeric' => 'La cantidad de mano de obra debe ser un numero positivo.',
            'cantidadmo.min' => 'La cantidad de mano de obra debe ser entre 1 y 9999.',
            'cantidadmo.max' => 'La cantidad de mano de obra debe ser entre 1 y 9999.',
            'costo.required' => 'El costo es obligatorio.',
            'costo.integer' => 'El costo debe ser un numero entero positivo.',
            'periodo.required' => 'La fecha del estado fisico es obligatoria.',
            'periodo.date' => 'La fecha debe ser de tipo fecha.',
            'grupo_labor_id.required' => 'El identificador(id) del grupo de labor es requerido.',
            'grupo_labor_id.integer' => 'El identificador(id) debe ser un numero entero positivo.',
            'lote_id.required' => 'El identificador(id) del lote es requerido.',
            'lote_id.integer' => 'El identificador(id) debe ser un numero entero positivo.',
        ];
    }
}
