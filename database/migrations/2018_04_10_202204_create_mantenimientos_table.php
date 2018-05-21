<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idEquipo');
            $table->unsignedInteger('idTecnico');
            $table->unsignedInteger('codigo');
            $table->date('fecha');
            $table->dateTime('hora');
            $table->enum('tipo_de_mantenimiento',['preventivo','correctivo']);
            $table->String('descripcion');
            $table->enum('estado',['pendiente','realizado']);
            $table->timestamps();

        });

        Schema::table('mantenimientos', function (Blueprint $table){
          $table->foreign('idEquipo')
          ->references('id')->on('equipos')
          ->onDelete('cascade');
          $table->foreign('idTecnico')
          ->references('id')->on('users')
          ->onDelete('cascade');
          $table->foreign('codigo')
          ->references('id')->on('solicituds')
          ->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mantenimientos');
    }
}
