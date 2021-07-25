<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempRolesTable extends Migration
{
    /** Run the migrations. */
    public function up()
    {
        Schema::create('temp_roles', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('tmr_num_id', 15)->comment('Guarda el número de idntificador del cliente a ser procesado'); // phpcs:ignore
            $table->string('tmr_nombres', 120)->comment('Almacena los nobres y apellidos del cliente a ser procesado y nos envía RH del MAG'); // phpcs:ignore
            $table->decimal('tmr_valor', 18, 4)->comment('Almacena el valor numérico del descuento efectuado al cliente'); // phpcs:ignore
            $table->timestamps();
        });
    }

    /** Reverse the migrations. */
    public function down()
    {
        Schema::dropIfExists('temp_roles');
    }
}
