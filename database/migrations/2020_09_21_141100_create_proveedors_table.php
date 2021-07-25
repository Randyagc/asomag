<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorsTable extends Migration
{
    /** Run the migrations. */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('pro_descripcion', 200)->comment('Nombre del proveedor o empresa');
            $table->string('pro_numero_id', 15)->comment('Número fiscal de identificador, designado por ente de control'); // phpcs:ignore
            $table->string('pro_direccion', 150)->comment('Dirección donde se encuentra la oficina principal de la empresa'); // phpcs:ignore
            $table->string('pro_pais', 14)->comment('Código de pais de donde es origen el proveedor');
            $table->string('pro_provincia', 14)->comment('Código de provincia de donde es origen el proveedor');
            $table->string('pro_ciudad', 14)->comment('Código de ciudad de donde es origen el proveedor');
            $table->decimal('pro_aso_porc', 8, 4)->comment('Porcentaje de comisión, a favor de la Asociación');
            $table->string('pro_telefono', 30)->comment('Número de teléfono del proveedor para contacto');
            $table->decimal('pro_pagina_web', 18, 4)->nullable()->comment('Página web del proveedor, si la tuviere');
            $table->string('pro_observaciones', 250)->nullable()->comment('Texto que contribuya a describir al proveedor'); // phpcs:ignore
            $table->timestamps();
        });
    }

    /** Reverse the migrations. */
    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
}
