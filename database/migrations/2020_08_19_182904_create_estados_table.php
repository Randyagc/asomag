<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('est_descripcion', 30)->comment('Almacena la descripción alfanumérica del código, nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('est_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno del id de esta tabla'); // phpcs:ignore
            $table->string('est_estado', 14)->comment('Guarda el estado de este registro, generado en esta misma tabla y cumple su función en esta misma tabla'); // phpcs:ignore
            $table->string('est_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
            $table->timestamps();
        });

        DB::statement("ALTER TABLE estados comment 'Para almacenar los estados de los registros, estos puede ser ACTIVO, INACTIVO, ANULADO, CANCELADO, PAGADO'"); // phpcs:ignore
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estados');
    }
}
