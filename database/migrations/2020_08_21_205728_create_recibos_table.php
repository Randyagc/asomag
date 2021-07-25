<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibosTable extends Migration
{
    /** Run the migrations. */
    public function up()
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('rcb_descripcion', 30)->comment('Almacena la descripción alfanumérica del campo clave(id), nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('rcb_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno y único en esta tabla'); // phpcs:ignore
            $table->string('rcb_emisor', 14)->comment('Almacena el código de quien emite el recibo, en este caso sería el MAG'); // phpcs:ignore
            $table->string('rcb_destinatario', 14)->comment('Almacena el código del cliente quien recibe el documento, en este caso sería el socio de la AsoFem del MAG'); // phpcs:ignore
            $table->string('rcb_observaciones', 250)->comment('Almacena los comentarios adicionales a la emisión de este recibo'); // phpcs:ignore
            $table->integer('rcb_secuencial')->comment('Almacena el número secuencial que corresponda');
            $table->decimal('rcb_valor', 18, 4)->comment('Guarda el valor numérico del recibo');
            $table->dateTime('rcb_fecha_emision', 0)->comment('Almacena la fecha de emisión del recibo, es modificable por el usuario, y no debería ser mayor o menor que el año en curso'); // phpcs:ignore
            $table->string('rcb_estado', 14)->comment('Guarda el estado de este registro, no aplica para les reglas del negocio'); // phpcs:ignore
            $table->string('rcb_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
            $table->timestamps();
        });
    }

    /** Reverse the migrations. */
    public function down()
    {
        Schema::dropIfExists('recibos');
    }
}
