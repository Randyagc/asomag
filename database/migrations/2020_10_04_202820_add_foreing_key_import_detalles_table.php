<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingKeyImportDetallesTable extends Migration
{

    public function up()
    {
        Schema::table('import_detalles', function (Blueprint $table) {
            $table->unsignedBigInteger("imd_cliente_id")->nullable()->after("imd_user")->comment("Campo para llave foránea con Clientes"); // phpcs:ignore
        });
    }

    public function down()
    {
        Schema::table('import_detalles', function (Blueprint $table) {
            $table->dropColumn('imd_cliente_id');
        });
    }
}
