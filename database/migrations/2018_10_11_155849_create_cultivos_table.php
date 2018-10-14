<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCultivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultivos', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('cultivo', 50);
            $table->text('descripcion');
            
            $table->string('finca_id')->unsigned();
            $table->foreign('finca_id')->references('id')->on('fincas')->onUpdate('CASCADE')->onDelete('RESTRICT');
            
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
        Schema::dropIfExists('cultivos');
    }
}
