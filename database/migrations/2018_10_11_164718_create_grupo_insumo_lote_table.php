<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoInsumoLoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_insumo_lote', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('costo')->unsigned();
            $table->date('periodo');

            $table->integer('insumo_id')->unsigned();
            $table->foreign('insumo_id')->references('id')->on('insumos')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->integer('lote_id')->unsigned();
            $table->foreign('lote_id')->references('id')->on('lotes')->onUpdate('CASCADE')->onDelete('CASCADE');

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
        Schema::dropIfExists('insumo_lote');
    }
}