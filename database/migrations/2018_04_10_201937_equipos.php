<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Equipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serial')->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->string('capacidad_memoria_RAM');
            $table->string('capacidad_disco_duro');
            $table->string('tipo_computador');
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
        //
         Schema::drop('equipos');
    }
}