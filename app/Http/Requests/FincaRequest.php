<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FincaRequest extends FormRequest
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
            'nombre' => 'required | string | min:2 | max:50',
            'municipio' => 'string | min:2 | max:50',
            'departamento' => 'string | min:2 | max:50',
            'direccion' => 'string | min:2 | max:250',
        ];
    }
}
