<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveColorRequest extends FormRequest
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
            "col_cod_desc" => "required",
            "col_descripcion" => "required",
            "col_estado" => "required",
            "col_user" => "required",
        ];
    }

    public function messages()
    {
        return [
            'col_cod_desc.required' => 'Debe ingresar código  + descripción correspondiente',
            'col_descripcion.required' => 'El Nombre del Color no puede estar vacío',
            'col_estado.required' => 'No puede estar vacío el estado del registro',
            'col_user.required' => 'Nombre de usuario es requerido'
        ];
    }
}
