<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerieAnimadaHasCapituloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serie-animada-has-capitulo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serie-animada_id')->unsigned();
            $table->foreign('serie-animada_id')->references('id')->on('serie-animadas');
            $table->integer('capitulo_id')->unsigned();
            $table->foreign('capitulo_id')->references('id')->on('capitulos');
            $table->integer('numero');
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
        Schema::drop('serie-animada-has-capitulo');
    }
}
