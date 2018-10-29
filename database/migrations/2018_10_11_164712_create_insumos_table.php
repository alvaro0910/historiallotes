<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->text('descripcion')->nullable();
            $table->integer('costo')->unsigned();
            $table->date('periodo');

            $table->integer('lote_id')->unsigned();
            $table->foreign('lote_id')->references('id')->on('lotes')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->integer('grupo_labor_id')->unsigned()->nullable();
            $table->foreign('grupo_labor_id')->references('id')->on('grupos_labores')->onUpdate('SET NULL')->onDelete('RESTRICT');

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
        Schema::dropIfExists('insumos');
    }
}
