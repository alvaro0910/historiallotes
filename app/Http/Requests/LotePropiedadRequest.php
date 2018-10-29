<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LotePropiedadRequest extends FormRequest
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
            'cantidad' => 'required | min:0 | numeric',
            'periodo' => 'required | date',
            'lote_id' => 'required | integer | min:1',
            'propiedad_id' => 'required | integer | min:1',
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
            'cantidad.required' => 'La cantidad es obligatoria.',
            'cantidad.numeric' => 'La cantidad debe ser un numero.',
            'cantidad.min' => 'La cantidad no permite numeros negativos.',
            'periodo.required' => 'La fecha del estado fisico es obligatoria.',
            'periodo.date' => 'La fecha debe ser de tipo fecha.',
            'lote_id.required' => 'El identificador(id) del lote es requerido.',
            'lote_id.integer' => 'El identificador(id) debe ser un numero entero positivo.',
            'propiedad_id.required' => 'El identificador(id) del grupo de labor es requerido.',
            'propiedad_id.integer' => 'El identificador(id) debe ser un numero entero positivo.',
        ];
    }
}
