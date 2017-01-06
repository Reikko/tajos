<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaDestajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_destajos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_avance')->unsigned();
            $table->foreign('id_avance')->references('id')->on('avances')->onUpdate('cascade');
            $table->integer('id_destajo')->unsigned();
            $table->foreign('id_destajo')->references('id')->on('destajos')->onUpdate('cascade');
            $table->float('porcentaje');
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
        Schema::drop('tabla_destajos');
    }
}
