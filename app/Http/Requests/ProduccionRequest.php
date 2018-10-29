<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduccionRequest extends FormRequest
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
            'cantidad' => 'required | integer | min:1 | max:9999999999',
            'periodo' => 'required | date',
            'lote_id' => 'required | integer',
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
            'cantidad.required' => 'La cantidad de produccion es obligatoria.',
            'cantidad.integer' => 'La cantidad debe ser un numero entero positivo.',
            'cantidad.min' => 'La cantidad debe ser un numero entero positivo entre 1 y 9999999999.',
            'cantidad.max' => 'La cantidad debe ser un numero entero positivo entre 1 y 9999999999.',
            'periodo.required' => 'La fecha de produccion es obligatoria.',
            'periodo.date' => 'La fecha debe ser de tipo fecha.',
            'lote_id.required' => 'El identificador(id) del lote es requerido.',
            'lote_id.integer' => 'El identificador(id) del lote debe ser un numero entero positivo.',
        ];
    }
}
