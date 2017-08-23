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
            $table->integer('idcategoria')->references('id')->on('categoria');
            $table->integer('idmarca')->references('id')->on('marca');
            $table->string('codigo',10);
            $table->string('nombre');
            $table->decimal('precio',10,2);
            $table->boolean('idpromocion')->references('id')->on('promocion')->default(false);
            $table->string('descuento',10);
            $table->softDeletes();
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
        Schema::dropIfExists('producto');
    }
}
