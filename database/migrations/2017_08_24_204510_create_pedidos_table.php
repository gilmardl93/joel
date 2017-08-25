<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idenvia')->unsigned();
            $table->integer('idrecibe')->unsigned();
            $table->integer('idproducto')->unsigned();
            $table->dateTime('fecha_pedido');
            $table->mediumText('mensaje')->nullable();
            $table->boolean('entregado')->default(false);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idenvia')->references('id')->on('users');
            $table->foreign('idrecibe')->references('id')->on('users');
            $table->foreign('idproducto')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
