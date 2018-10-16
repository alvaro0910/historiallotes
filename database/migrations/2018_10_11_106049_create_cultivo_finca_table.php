<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCultivoFincaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultivo_finca', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();

            $table->integer('finca_id')->unsigned();
            $table->foreign('finca_id')->references('id')->on('fincas')->onUpdate('CASCADE')->onDelete('RESTRICT');

            $table->integer('cultivo_id')->unsigned();
            $table->foreign('cultivo_id')->references('id')->on('cultivos')->onUpdate('CASCADE')->onDelete('RESTRICT');

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
        Schema::dropIfExists('cultivo_finca');
    }
}
