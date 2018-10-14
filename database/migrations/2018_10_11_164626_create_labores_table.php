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
            $table->increments('id');
            $table->string('nombre', 50);
            $table->text('descripcion');

            $table->integer('grupos_labores_id')->unsigned()->nulleable();
            $table->foreign('grupos_labores_id')->references('id')->on('grupos_labores')->onUpdate('SET NULL')->onDelete('RESTRICT');
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
