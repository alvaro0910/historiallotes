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
            'lote_id' => 'required | integer',
            'propiedad_id' => 'required | integer',
        ];
    }
}
