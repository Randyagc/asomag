<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveClientRequest extends FormRequest
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
            "cli_cod_desc" => "required",
            "cli_descripcion" => "required",
            "cli_tipo_cliente" => "required",
            "cli_tipo_id" => "required",
            "cli_num_id" => "required",
            "cli_nombre" => "required",
            "cli_apellido" => "required",
            "cli_direccion" => "required",
            "cli_tel_conv" => "required",
            "cli_tel_cel" => "required",
            "cli_correo_electronico" => "required",
            "cli_nom_contacto" => "required",
            "cli_actividad" => "required",
            "cli_profesion" => "required",
            "cli_pais" => "required",
            "cli_provincia" => "required",
            "cli_ciudad" => "required",
            "cli_canton" => "required",
            "cli_pagina_web" => "required",
            "cli_seguimiento" => "required",
            "cli_observaciones_seguimiento" => "required",
            "cli_observaciones" => "required",
            "cli_porcentaje_factura" => "required",
            "cli_fecha_creacion" => "required",
            "cli_fecha_ingreso" => "required",
            "cli_estado" => "required",
            "cli_user" => "required",
        ];
    }

    public function messages()
    {
        return [
            'cli_tipo_cliente.required' => 'El tipo de cliente no puede estar vacío',
        ];
    }
}
