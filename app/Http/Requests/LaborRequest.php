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
            'cantidadmo' => 'required | numeric | max:9999',
            'costo' => 'required | integer',
            'periodo' => 'required | date',
            'grupo_labor_id' => 'required | integer',
            'lote_id' => 'required | integer',
        ];
    }
}
