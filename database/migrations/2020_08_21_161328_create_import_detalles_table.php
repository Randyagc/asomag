<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportDetallesTable extends Migration
{
    /** Run the migrations. */
    public function up()
    {
        Schema::create('import_detalles', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('imd_descripcion', 30)->comment('Almacena la descripción alfanumérica del campo clave(id), nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('imd_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno y único en esta tabla'); // phpcs:ignore
            $table->string('imd_codigo_cabecera', 14)->comment('Almacena el código de la tabla de importaciones de cabecera Import_cabeceras(imc_cod_desc)'); // phpcs:ignore
            $table->string('imd_numero_transaccion', 30)->comment('Almacena el número de transacción que envía el proveedor en el primer campo del archivo de excel para cargar los consumos de los clientes'); // phpcs:ignore
            $table->string('imd_identificador_cliente', 15)->comment('Graba el número de identificador del cliente que ha realizado el consumo, con el proveedor ya indicado en la cabecera'); // phpcs:ignore
            $table->string('imd_nombre_cliente', 120)->comment('Guarda y a pesar de que puede ser repetitivo, el nombre del cliente que posee el proveedor, y nos servirá para verificar nuestra información'); // phpcs:ignore
            $table->string('imd_periodo', 8)->comment('Alamcena el periodo que pertenece los consumos, y será concordante con el período activo en el aplicativo'); // phpcs:ignore
            $table->smallInteger('imd_numero_consumos')->comment('Almacena el valor numérico, que nos indica el proveedor, de cuantas veces ha usado los ervicios en un período de tiempo'); // phpcs:ignore
            $table->integer('imd_credito_meses')->comment('Almacena la cantidad de meses, en los que se difierre el pago enviado en este archivo'); // phpcs:ignore
            $table->decimal('imd_costo_operacion', 8, 4)->comment('Guarda el costo de la operación para el cliente y que se beneficia la Asociación, debe ser valor numérico'); // phpcs:ignore
            $table->decimal('imd_subtotal', 18, 4)->comment('Guarda el valor de los consumos, sin uso dentro de la aplicaciòn, hasta Mayo/2019, no aplica el procentaje de incremento por el uso de la Asociación'); // phpcs:ignore
            $table->decimal('imd_total', 18, 4)->comment('Guarda el valor total de los consumos hechos por el cliente, en este período de tiempo reportado por el proveedor'); // phpcs:ignore
            $table->string('imd_estado', 14)->comment('Guarda el estado de este registro, no aplica para les reglas del negocio'); // phpcs:ignore
            $table->string('imd_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
            $table->timestamps();
        });
    }

    /** Reverse the migrations.*/
    public function down()
    {
        Schema::dropIfExists('import_detalles');
    }
}
