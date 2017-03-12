<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerieAnimadaHasAutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serie-animada-has-autor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serie-animada_id')->unsigned();
            $table->foreign('serie-animada_id')->references('id')->on('serie-animadas');
            $table->integer('autor_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('autors');
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
        Schema::drop('serie-animada-has-autor');
    }
}
