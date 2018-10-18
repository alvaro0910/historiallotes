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
            $table->string('nombre', 50)->unique();
            $table->text('descripcion')->nullable();

            $table->integer('grupo_insumo_id')->unsigned()->nullable();
            $table->foreign('grupo_insumo_id')->references('id')->on('grupos_insumos')->onUpdate('SET NULL')->onDelete('RESTRICT');

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
