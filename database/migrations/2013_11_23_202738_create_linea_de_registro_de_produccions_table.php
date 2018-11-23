<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineaDeRegistroDeProduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_de_registro_de_produccions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('cantidad');
            $table->integer('reg_de_prod_id')->unsigned();
            $table->foreign('reg_de_prod_id')->references('id')->on('registro_de_produccions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linea_de_registro_de_produccions');
    }
}
