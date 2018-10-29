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
            'nombre' => 'required | string',
            'area' => 'required | numeric | min:0.001',
            'poblacion' => 'required | integer | min:1 | max:9999999999',
            'edad' => 'integer',
            'alturasnm' => 'integer',
            'cultivo_id' => 'required | integer',
            'variedad_id' => 'required | integer',
        ];
    }
}
