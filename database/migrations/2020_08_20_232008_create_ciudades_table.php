<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('ciu_descripcion', 30)->comment('Almacena la descripción alfanumérica del campo clave(id), nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('ciu_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno y único en esta tabla'); // phpcs:ignore
            $table->string('ciu_cod_internacional', 10)->comment('Almacena el código internacional normalizado, para cada ciudad, como Quito es UIO'); // phpcs:ignore
            $table->string('ciu_pais', 14)->comment('Guarda el código del paìs al que pertenece la ciudad, relacionado con la tabla paises (pai_cod_desc)'); // phpcs:ignore
            $table->string('ciu_provincia', 14)->comment('Almacena el código de la provincia, relacionado con el campo prv_cod_desc de la tabla provincias'); // phpcs:ignore
            $table->string('ciu_estado', 14)->comment('Guarda el estado de este registro, no aplica para les reglas del negocio'); // phpcs:ignore
            $table->string('ciu_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
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
        Schema::dropIfExists('ciudades');
    }
}
