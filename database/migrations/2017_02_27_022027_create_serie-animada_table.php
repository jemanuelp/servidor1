<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerieAnimadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serie-animada', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('anio');
            $table->string('descripcion');
            $table->string('autor');
            $table->boolean('estado');
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
        Schema::drop('serie-animada');
    }
}
