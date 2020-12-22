<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTarjetaRequest extends FormRequest
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
            //
            'id_tarjeta' => 'required|min:10|max:100|unique:tarjetas, id_tarjeta'. $this->route('Tarjeta')->id,
            'disiplina' => 'required' ,
            'gaveta_id' => 'required',
        ];
    }
}
