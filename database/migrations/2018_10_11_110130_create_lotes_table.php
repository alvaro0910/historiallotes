<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotes', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id')->unsigned();
            $table->string('codigo', 10)->unique();
            $table->string('nombre', 50);
            $table->decimal('area', 5, 2);
            $table->integer('poblacion');
            $table->integer('edad')->nullable();
            $table->integer('alturasnm')->nullable();

            $table->integer('cultivo_id')->unsigned()->nullable();
            $table->foreign('cultivo_id')->references('id')->on('cultivos')->onUpdate('SET NULL')->onDelete('RESTRICT');
            $table->integer('variedad_id')->unsigned()->nullable();
            $table->foreign('variedad_id')->references('id')->on('variedades')->onUpdate('SET NULL')->onDelete('SET NULL');

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
        Schema::dropIfExists('lotes');
    }
}
