<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCodigoCabeceraToImportDetalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('import_detalles', function (Blueprint $table) {
            $table->dropColumn('imd_cod_desc');
            $table->renameColumn("imd_codigo_cabecera", "imd_codigo_proveedor");
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
            $table->addColumn("imd_cod_desc", 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno y único en esta tabla');
            $table->renameColumn("imd_codigo_proveedor", "imd_codigo_cabecera");
        });
    }
}
