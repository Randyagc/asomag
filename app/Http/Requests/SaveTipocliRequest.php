<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveTipocliRequest extends FormRequest
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

    public function rules()
    {
        return [
            "tpc_cod_desc" => "required",
            "tpc_descripcion" => "required",
            "tpc_estado" => "required",
            "tpc_user" => "required",
        ];
    }

    public function messages()
    {
        return [
            'tpc_cod_desc.required' => 'Debe tener algun valor',
            'tpc_descripcion.required' => 'El Gentilicio no puede estar vacío',
            'tpc_estado.required' => 'Debe ingresar nacionalidad correspondiente',
            'tpc_user' => 'Código de Cliente No puede estar vacío',
        ];
    }
}
