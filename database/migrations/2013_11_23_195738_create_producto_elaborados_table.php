<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoElaboradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_elaborados', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('consumo');
            $table->float('peso');
            $table->float('precio');
            $table->tinyInteger('unidad')->unsigned()->default(\App\Enums\Unidad::Litro);
            $table->tinyInteger('tipo_producto')->unsigned()->default(\App\Enums\TipoProducto::Dulce);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_elaborados');
    }
}
