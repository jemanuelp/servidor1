<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerieAnimadaHasGeneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serie-animada-has-genero', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serie-animada_id')->unsigned();
            $table->foreign('serie-animada_id')->references('id')->on('serie-animadas');
            $table->integer('genero_id')->unsigned();
            $table->foreign('genero_id')->references('id')->on('generos');
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
        Schema::drop('serie-animada-has-genero');
    }
}
