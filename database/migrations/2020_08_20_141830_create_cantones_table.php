<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCantonesTable extends Migration
{
    /** Run the migrations. */
    public function up()
    {
        Schema::create('cantones', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('can_descripcion', 30)->comment('Almacena la descripción alfanumérica del campo clave(id), nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('can_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno y único en esta tabla'); // phpcs:ignore
            $table->string('can_pais', 14)->comment('Guarda el còdigo del pais, al que pertenece el canton, se relaciona con la tabla paises (pai_cod_desc)'); // phpcs:ignore
            $table->string('can_provincia', 14)->comment('Guarda el còdigo de la provincia ala que pertenece el canton, relacionado con la tabla provincias (prv_cod_desc)'); // phpcs:ignore
            $table->string('can_ciudad', 14)->comment('Almacena el còdigo de la ciudad, al que pertenece el cantòn, en Ecuador existe esta divisiòn geogràfica, si es posible podrìa aplicarse a otros paises, relacionado con la tabla ciudades (ciu_cod_desc)'); // phpcs:ignore
            $table->string('can_estado', 14)->comment('Guarda el estado de este registro, no aplica para les reglas del negocio'); // phpcs:ignore
            $table->string('can_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
            $table->timestamps();
        });
    }

    /** Reverse the migrations. */
    public function down()
    {
        Schema::dropIfExists('cantones');
    }
}
