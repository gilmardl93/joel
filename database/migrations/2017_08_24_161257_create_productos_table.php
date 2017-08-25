<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idcategoria')->unsigned();
            $table->integer('idmarca')->unsigned();
            $table->string('codigo',10);
            $table->string('nombre');
            $table->decimal('precio',10,2);
            $table->integer('idpromocion')->unsigned();
            $table->string('descuento',10)->nullable();
            $table->integer('idusuario')->unsigned();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('idusuario')->references('id')->on('users');
            $table->foreign('idcategoria')->references('id')->on('categoria');
            $table->foreign('idmarca')->references('id')->on('marca');
            $table->foreign('idpromocion')->references('id')->on('promocion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
