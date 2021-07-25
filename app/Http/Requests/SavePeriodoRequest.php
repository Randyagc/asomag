<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePeriodoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "per_cod_desc" => "required",
            "per_descripcion" => "required",
            "per_periodo" => "required",
            "per_estado" => "required",
            "per_user" => "required",
        ];
    }

    public function messages()
    {
        return [
            "per_cod_desc.required" => "Debe ingresar código + descripción correspondiente",
            "per_descripcion.required" => "La Descripción del Período no puede estar vacío",
            "per_periodo.required" => "Ingrese un código para el período",
            "per_estado.required" => "No puede estar vacío el estado del registro",
            "per_user.required" => "Nombre de usuario es requerido"
        ];
    }
}
