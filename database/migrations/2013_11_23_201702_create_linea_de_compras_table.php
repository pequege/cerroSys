<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineaDeComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_de_compras', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('cantidad');
            $table->integer('compra_id')->unsigned();
            $table->foreign('compra_id')->references('id')->on('compras')->onDelete('cascade');
            $table->integer('materia_prima_id')->unsigned();
            $table->foreign('materia_prima_id')->references('id')->on('materia_primas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linea_de_compras');
    }
}
