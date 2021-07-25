<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('fac_descripcion', 30)->comment('Almacena la descripción alfanumérica del código, nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('fac_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno del id de esta tabla'); // phpcs:ignore
            $table->string('fac_id_empresa', 14)->comment('Almacena el código del proveedor, el cual está enviando el documento único de cobro o sea la factura'); // phpcs:ignore
            $table->string('fac_numero', 15)->comment('Guarda el secuencial único de cada factura, que son emitidas por los proveedores, y es el documento para respaldar el pago'); // phpcs:ignore
            $table->string('fac_concepto', 250)->comment('Almacena la descripción que está en la factura entregada por el proveedor'); // phpcs:ignore
            $table->decimal('fac_subtotal', 18, 4)->comment('Guarda el valor numérico del sub total, de la factura enviada por el proveedor'); // phpcs:ignore
            $table->decimal('fac_descuento', 18, 4)->comment('Almacena el valor numérico del descueto aplicado a la factuura envidad por el proveedor, si existiera'); // phpcs:ignore
            $table->decimal('fac_iva_tasa', 8, 4)->comment('Guarda el valor del porcentaje del impuesto del iva que esté registrado en la factura del proveedor'); // phpcs:ignore
            $table->decimal('fac_iva_valor', 18, 4)->comment('Guarda el valor numérico del valor del subtotal aplicado la tasa del iva, de la factura entreada por el proveedor'); // phpcs:ignore
            $table->decimal('fac_total', 18, 4)->comment('Almacena el valor total de la factura, incluido los impuestos, descuento, recargos, de la factura enviada por el proveedor'); // phpcs:ignore
            $table->date('fac_fecha_ingreso')->comment('Guarda la fecha de ingreso al sistema de la factura enviada por el proveedor'); // phpcs:ignore
            $table->date('fac_fecha_factura')->comment('Almacena la fecha de emisión de la factura, enviada por el proveedor'); // phpcs:ignore
            $table->string('fac_estado', 14)->comment('Guarda el estado de este registro, generado en esta misma tabla y cumple su función en esta misma tabla'); // phpcs:ignore
            $table->string('fac_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
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
        Schema::dropIfExists('facturas');
    }
}
