<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyImporteDetallesClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('import_detalles', function (Blueprint $table) {
            $table->foreign("imd_cliente_id")->references("id")->on("clientes")->onDelete("cascade")->onDelete("cascade"); // phpcs:ignore
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('import_detalles', function (Blueprint $table) {
            $table->dropForeign("import_detalles_imd_cliente_id_foreign");
        });
    }
}
