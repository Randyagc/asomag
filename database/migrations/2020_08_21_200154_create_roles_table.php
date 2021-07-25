<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /** Run the migrations. */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('rol_descripcion', 30)->comment('Almacena la descripción alfanumérica del campo clave(id), nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('rol_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno y único en esta tabla'); // phpcs:ignore
            $table->string('rol_num_id', 14)->comment('Almacena el número de identificación del socio al que se afecta el proceso de cobros'); // phpcs:ignore
            $table->string('rol_nombres', 120)->comment('Almacena los nombres y apellidos del socio que será afectado por los procesos de cobros'); // phpcs:ignore
            $table->string('rol_periodo', 8)->comment('Almacena el año y mes que se sube y se procesará el archivo de roles'); // phpcs:ignore
            $table->decimal('rol_valor', 18, 4)->comment('Guarda el valor en dólares que se descuenta al socio via roles de pago'); // phpcs:ignore
            $table->dateTime('rol_fecha_proceso', 0)->comment('Guarda la fecha en que realiza el proceso, en la aplicación, esta fecha es nominal y puede ser manipulada por el usuario, para referencias reales, hay campos de auditoría'); // phpcs:ignore
            $table->string('rol_estado', 14)->comment('Guarda el estado de este registro, no aplica para les reglas del negocio'); // phpcs:ignore
            $table->string('rol_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
            $table->timestamps();
        });
    }

    /** Reverse the migrations.*/
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
