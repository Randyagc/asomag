<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateConfiguracionesTable extends Migration
{
    /** Run the migrations. */
    public function up()
    {
        Schema::create('configuraciones', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('cfg_descripcion', 30)->comment('Almacena la descripción alfanumérica del campo clave(id), nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('cfg_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno y único en esta tabla'); // phpcs:ignore
            $table->string('cfg_nombre_empresa', 120)->comment('Almacena el Nombre de la Empresa que usa el sistema'); // phpcs:ignore
            $table->string('cfg_logo', 30)->comment('Almacena la ruta donde está grabado el logo de la empresa que use el sistema'); // phpcs:ignore
            $table->string('cfg_tipo_id', 14)->comment('Almacena el tipo de identificador de la empresa, generalmente será un ruc pero puede darse el caso de persona natural con cédula'); //phpcs:ignore
            $table->string('cfg_num_id', 15)->comment('Almacena el número del identificador de la empresa, en caso de ruc sería de 13, encaso de cédula sería 10'); // phpcs:ignore
            $table->string('cfg_direccion', 150)->nullable()->comment('Guarda en caracteres, la dirección dentro de la ciudad donde este la empresa'); // phpcs:ignore
            $table->string('cfg_telefono', 30)->nullable()->comment('Almacena hasta dos números de teléfonos, separados por un el caracter (|)'); // phpcs:ignore
            $table->string('cfg_correo electronico', 120)->nullable()->comment('Almacena los correso electrónicos de la empresa, separados por un caractrer pipeline (|)'); // phpcs:ignore
            $table->string('cfg_pais', 14)->comment('Guarda el código del país, donde está ubicada la empresa'); // phpcs:ignore
            $table->string('cfg_ciudad', 14)->comment('Guarda el código de la ciudad donde está ubicada la empresa'); // phpcs:ignore
            $table->string('cfg_pagina_web', 120)->nullable()->comment('Almacena la dirección electrónica de empresa si la posee'); // phpcs:ignore
            $table->string('cfg_estado', 14)->comment('Guarda el estado de este registro, no aplica para les reglas del negocio'); // phpcs:ignore
            $table->string('cfg_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
            $table->timestamps();
        });
    }

    /** Reverse the migrations.*/
    public function down()
    {
        Schema::dropIfExists('configuraciones');
    }
}
