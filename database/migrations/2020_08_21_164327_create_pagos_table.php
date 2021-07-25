<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /** Run the migrations. */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('pag_descripcion', 30)->comment('Almacena la descripción alfanumérica del campo clave(id), nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('pag_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno y único en esta tabla'); // phpcs:ignore
            $table->string('pag_cliente', 14)->comment('Almacena el código de cliente que se afectará con el pago, de este período'); // phpcs:ignore
            $table->string('pag_proveedor', 14)->comment('Guarda el código del proveedor que se beneficia con este pago'); // phpcs:ignore
            $table->string('pag_cabecera', 14)->comment('Guarda el código de cabecera que se relaciona con las tablas de importación de reporte de consumos por proveedor'); // phpcs:ignore
            $table->string('pag_agencia', 14)->comment('Guarda le código de la agencia que se efectúa los pagos a proveedores, es decir la agencia donde reside el proveedor y el cliente'); // phpcs:ignore
            $table->string('pag_periodo', 8)->comment('Guarda el periodo en año y mes de proceso para comparar con el rol del mes correspondienteenviado por RH del MAG'); // phpcs:ignore
            $table->string('pag_forma_pago', 14)->comment('Almacena el código de la forma de pago, si se realiza efectivo, cheque, notas de crédito'); // phpcs:ignore
            $table->string('pag_numero_transaccion', 30)->comment('Almacena el número de transacción que es enviado en el archivo de exel, reportando los consumos de los clientes por período de tiempo'); // phpcs:ignore
            $table->string('pag_observaciones', 250)->comment('Almacena comentarios adicionales que se pueden agregar para alcarar dudas acerca de los movimientos que posea el cliente sobre sus consumos'); // phpcs:ignore
            $table->integer('pag_numero_pago')->comment('Almacena el número de pago que corresponda al cliente y al proveedor'); // phpcs:ignore
            $table->decimal('pag_valor_mensual', 18, 4)->comment('Almacena el valor del pago receptado en esta fecha'); // phpcs:ignore
            $table->decimal('pag_saldo', 18, 4)->comment('Almacena el valor que se desprenderá de la operación de restar el pago inicial del valor del pago total'); // phpcs:ignore
            $table->decimal('pag_total', 18, 4)->comment('Guarda el valor total de la deuda del cliente con el proveedor, y no pude ser cero, o puede ser la uma del subotal más el número de meses de diferimiento'); // phpcs:ignore
            $table->dateTime('pag_fecha_pago', 0)->comment('Almacena la fecha de ingreso del pago con el cual se desencadena los procesos de cartera si los hubiere'); // phpcs:ignore
            $table->dateTime('pag_fecha_pactada', 0)->comment('Almacena la fecha que se conviene como promesa de pago, servirá para medir la efectividad ente pagos realizados y para medir mora por cliente'); // phpcs:ignore
            $table->dateTime('pag_fecha_pagada', 0)->comment('Guarda la fecha de pago de esta relación de cobro con el proveedor, por parte del cliente o la asociación'); // phpcs:ignore
            $table->string('pag_estado', 14)->comment('Guarda el estado de este registro, no aplica para les reglas del negocio'); // phpcs:ignore
            $table->string('pag_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
            $table->timestamps();
        });
    }

    /** Reverse the migrations.*/
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
