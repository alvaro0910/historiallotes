<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoLaborLoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_labor_lote', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->decimal('cantidadmo', 4, 1)->unsigned();
            $table->integer('costo')->unsigned();
            $table->date('periodo');
            
            $table->integer('grupo_labor_id')->unsigned();
            $table->foreign('grupo_labor_id')->references('id')->on('grupos_labores')->onUpdate('CASCADE')->onDelete('CASCADE');

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
        Schema::dropIfExists('grupo_lote');
    }
}