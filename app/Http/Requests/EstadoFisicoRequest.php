<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstadoFisicoRequest extends FormRequest
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
            'periodo' => 'required | date',
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
            'periodo.required' => 'La fecha del estado fisico es obligatoria.',
            'periodo.date' => 'La fecha debe ser de tipo fecha.',
            'lote_id.required' => 'El identificador(id) del lote es requerido.',
            'lote_id.integer' => 'El identificador(id) debe ser un numero entero positivo.',
        ];
    }
}
