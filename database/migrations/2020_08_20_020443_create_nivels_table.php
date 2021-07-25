<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivels', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('niv_descripcion', 30)->comment('Descripción del código y sirve para identificar el id de esta tabla'); // phpcs:ignore
            $table->string('niv_cod_desc', 14)->comment('Guarda el código que usará este registro para ser reconocido en todos los procesos que tengan que ver con las tablas'); // phpcs:ignore
            $table->smallInteger('niv_nivel')->comment('Código de nivel en números para asignar al usuario en el aplicativo'); // phpcs:ignore
            $table->string('niv_opcion_menu', 14)->comment('Para activar o desactivar en el menú'); // phpcs:ignore
            $table->string('niv_subnivel', 14)->comment('Almacena el código para las opciones mas internas de los menus, Ejemplo: Registros/Grabar'); // phpcs:ignore
            $table->string('niv_estado', 14)->comment('Guarda el estado de este registro, no aplica para les reglas del negocio'); // phpcs:ignore
            $table->string('niv_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivels');
    }
}
