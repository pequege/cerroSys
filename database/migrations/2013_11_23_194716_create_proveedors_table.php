<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('razonSocial');
            $table->string('domicilio');
            $table->string('telefono');
            $table->string('codigoPostal');
            $table->string('localidad');
            $table->string('cuit');
            $table->string('numeroDeCuenta');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->tinyInteger('situacion_fiscal')->unsigned()->default(\App\Enums\SituacionFiscal::RESPONSABLE_INSC);
            $table->tinyInteger('provincia')->unsigned()->default(\App\Enums\Provincia::Tucuman);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
}
