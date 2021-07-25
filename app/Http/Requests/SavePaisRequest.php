<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePaisRequest extends FormRequest
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
            "pai_descripcion" => "required",
            "pai_cod_desc" => "required",
            "pai_nacionalidad" => "required",
            "pai_cod_internacional" => "required",
            "pai_estado" => "required",
            "pai_user" => "required"
        ];
    }

    public function messages()
    {
        return [
            'pai_cod_internacional.required' => 'Debe ingresar código correspondiente',
            'pai_nacionalidad.required' => 'El Gentilicio no puede estar vacío',
            'pai_descripcion.required' => 'El nombre del pais debe contener caracteres válidos',
            'pai_estado.required' => 'No puede estar vacío el estado del registro'
        ];
    }
}
