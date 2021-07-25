<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveEstadoRequest extends FormRequest
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
            "est_cod_desc" => "required",
            "est_descripcion" => "required",
            "est_estado" => "required",
            "est_user" => "required",
        ];
    }
    public function messages()
    {
        return [
            'est_cod_desc.required' => 'Debe tener algun valor',
            'est_descripcion.required' => 'El Gentilicio no puede estar vacío',
            'est_estado.required' => 'Debe ingresar nacionalidad correspondiente',
            'est_user' => 'No puede estar vacío',
        ];
    }
}
