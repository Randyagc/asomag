<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_tipos', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación') // phpcs:ignore
            $table->string('tpc_descripcion', 30)->comment('Almacena la descripción alfanumérica del campo clave(id), nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('tpc_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno y único en esta tabla'); // phpcs:ignore
            $table->string('tpc_estado', 14)->comment('Guarda el estado de este registro, no aplica para les reglas del negocio'); // phpcs:ignore
            $table->string('tpc_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
            $table->timestamps();
        });
    }

    /** Reverse the migrations.*/
    public function down()
    {
        Schema::dropIfExists('cliente_tipos');
    }
}
