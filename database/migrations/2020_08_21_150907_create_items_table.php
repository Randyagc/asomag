<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /** Run the migrations. */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('itm_descripcion', 30)->comment('Almacena la descripción alfanumérica del campo clave(id), nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('itm_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno y único en esta tabla'); // phpcs:ignore
            $table->string('itm_marca', 14)->comment('Almacena la marca del producto a registrarse en al aplicación'); // phpcs:ignore
            $table->string('itm_proveedor', 14)->comment('Guarda el código del proveedor del producto, se relaciona con la tabla clientes el campo (cli_cod_desc)'); // phpcs:ignore
            $table->string('itm_tipo_producto', 14)->comment('Guarda el código del tipo de producto que se ofrece, puede ser de tipo comestible, ropa, electrónico, etc.'); // phpcs:ignore
            $table->smallInteger('itm_producto_importado')->default('0')->comment('Almacena si el producto es importado o es producto nacional (0)'); // phpcs:ignore
            $table->integer('itm_stock_minimo')->comment('Guarda cuantos productos debe haber en bodega antes de avisar para renovar el producto'); // phpcs:ignore
            $table->integer('itm_stock_maximo')->comment('Almacena en valores numéricos la cantidad más alta de productos que debo tener en bodega'); // phpcs:ignore
            $table->decimal('itm_valor_compra', 18, 4)->comment('Guarda el valor al que se compra el producto a la fecha de adquisición'); // phpcs:ignore
            $table->decimal('itm_valor_venta', 18, 4)->comment('Almacena el valor de venta al público del producto, inclída la ganancia'); // phpcs:ignore
            $table->decimal('itm_tasa_utilidad',8,4)->comment('Almacena el porcentaje de incremento sobre el valor de compra de un producto, que permite crear utilidad'); // phpcs:ignore
            $table->string('itm_estado', 14)->comment('Guarda el estado de este registro, no aplica para les reglas del negocio'); // phpcs:ignore
            $table->string('itm_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
            $table->timestamps();
        });
    }

    /** Reverse the migrations. */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
