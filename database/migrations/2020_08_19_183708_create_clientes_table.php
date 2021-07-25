<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id()->comment('Campo llave, y generado automáticamente por el motor de la BD, no es modificable desde la aplicación'); // phpcs:ignore
            $table->string('cli_descripcion', 30)->comment('Almacena la descripción alfanumérica del campo clave(id), nombre que desplegará al ser llamado el id'); // phpcs:ignore
            $table->string('cli_cod_desc', 14)->comment('Almacena la combinación del "id", con el campo "descripcion", los tres primeros caracteres, nos genera un identificador interno y único en esta tabla'); // phpcs:ignore
            $table->string('cli_tipo_cliente', 14)->comment('Almacena el tipo de cliente, que decidirá el tratamiento dentro del sistema'); // phpcs:ignore
            $table->string('cli_tipo_id', 14)->comment('Almacena el tipo de identificador del cliente, puede ser, cédula, pasaporte, provisional o licencia de conducción, se relaciona con la tabla id_tipos(tid_cod_desc)'); // phpcs:ignore
            $table->string('cli_num_id', 15)->comment('Guarda el número identificador del cliente que depende el tipo de identificador 10 si es céudla 13 si es ruc, y cuando existan más codificaciones se irán mencionando, hay que crear la validación respectiva'); // phpcs:ignore
            $table->string('cli_nombre', 120)->comment('Almacena los dos nombres del cliente, en el caso de persona jurídica guardará completo el nombre'); // phpcs:ignore
            $table->string('cli_apellido', 30)->comment('Almacena apellidos del cliente, solo apellidos del cliente');
            $table->string('cli_direccion', 120)->comment('Guarda los nombres o nómeros de las calles, donde se pueda ubicar al cliente, dirección que se enviará notificaciones'); // phpcs:ignore
            $table->string('cli_tel_conv', 35)->comment('Puede almacenar hasta tes números de teléfonos convencionales separados por un pipe(|)'); // phpcs:ignore
            $table->string('cli_tel_cel', 40)->comment('Almacena el ingreso de tres número de teléfonos celulares, deberían ser los más determinantes para localizar al cliente, separados por un pipe(|)'); // phpcs:ignore
            $table->string('cli_correo_electronico', 120)->comment('Almacena los correos electrónicos del cliente, para envio de información desde el aplicativo'); // phpcs:ignore
            $table->string('cli_nom_contacto', 40)->comment('Alamcena el nombre del contacto con quien es la persona que está encargada de llevar las cuestiones administrativas de la empresa asegurada, este campo es válido para personas jurídicas'); // phpcs:ignore
            $table->string('cli_actividad', 14)->comment('Almacena el código de la actividad económica del cliente, sea natural o jurídico'); // phpcs:ignore
            $table->string('cli_profesion', 14)->comment('Almacena la profesión del cliente, sea natural o jurídico, ejemplo: Ingeniero, Doctor, QQDD, etc.'); // phpcs:ignore
            $table->string('cli_pais', 14)->comment('Guarda el código del país, donde reside el cliente');
            $table->string('cli_provincia', 14)->comment('Almacena el código de la provincia donde reside el cliente, depende del pais'); // phpcs:ignore
            $table->string('cli_ciudad', 14)->comment('Guarda la ciudad de residencia del cliente, este va asociado con el país'); // phpcs:ignore
            $table->string('cli_canton', 14)->comment('Guarda el código del cantón donde reside el cliente, depende de la ciudad'); // phpcs:ignore
            $table->string('cli_pagina_web', 60)->comment('Almacena elnombre de  la página web de la empresa si la tuviera'); // phpcs:ignore
            $table->string('cli_seguimiento', 14)->comment('Guarda el dódigo de la tabla seguimientos, que nos sirve para conocer más de cerca al cliente'); // phpcs:ignore
            $table->string('cli_observaciones_seguimiento', 250)->comment('Almacena información del seguimiento que puede darse al cliente, es muy útil para apoyar el seguimiento del cliente'); // phpcs:ignore
            $table->string('cli_observaciones', 250)->comment('Almacena observaciones generales al cliente, texto amplio para poder escribir detalles que sean necesarios'); // phpcs:ignore
            $table->string('cli_agro', 1)->comment('Almacena la identificación, de si pertenece a la sección de Agroindustrial, división interna del MAG'); // phpcs:ignore
            $table->decimal('cli_porcentaje_factura', 18, 4)->comment('Porcentaje que la asociación recoge por las compras de cada empleado'); // phpcs:ignore
            $table->date('cli_fecha_creacion')->comment('Guarda la fecha de nacimiento, o de creación de la empresa, en el caso de personas jurídicas'); // phpcs:ignore
            $table->date('cli_fecha_ingreso')->comment('Almacena la fecha de ingreso del cliente al sistema, es un dato que es visible hacia la aplicación, hay otros campos que son para auditorías internas'); // phpcs:ignore
            $table->string('cli_estado', 14)->comment('Guarda el estado de este registro, no aplica para les reglas del negocio'); // phpcs:ignore
            $table->string('cli_user', 14)->comment('Guarda el código del usuario que afecta esta tabla, es el usuario de la aplicación, no de la BD'); // phpcs:ignore
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
        Schema::dropIfExists('clientes');
    }
}
