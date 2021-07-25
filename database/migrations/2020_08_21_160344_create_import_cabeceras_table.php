<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportCabecerasTable extends Migration
{
    /** Run the migrations.*/
    public function up()
    {
        Schema::create('import_cabeceras', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('imc_descripcion', 30)->comment('Almacena la descripción alfanumérica del campo clave(id), nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('imc_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno y único en esta tabla'); // phpcs:ignore
            $table->string('imc_proveedor', 14)->comment('Almacena el código del proveedor que envía el archivo en formato excel, para su pago'); // phpcs:ignore
            $table->datetime('imc_fecha_archivo', 0)->comment('Almacena la fecha de envio del archivo a la Asociación, por parte del proveedor'); // phpcs:ignore
            $table->dateTime('imc_fecha_carga', 0)->comment('Guarda la fecha de carga del archivo a la aplicación');
            $table->string('imc_estado', 14)->comment('Guarda el estado de este registro, no aplica para les reglas del negocio'); // phpcs:ignore
            $table->string('imc_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
            $table->timestamps();
        });
    }

    /** Reverse the migrations. */
    public function down()
    {
        Schema::dropIfExists('import_cabeceras');
    }
}
