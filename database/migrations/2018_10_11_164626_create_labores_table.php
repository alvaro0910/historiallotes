<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labores', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nombre', 50)->unique();
            $table->text('descripcion')->nullable();

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
        Schema::dropIfExists('labores');
    }
}
