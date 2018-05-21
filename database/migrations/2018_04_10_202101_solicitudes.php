<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Solicitudes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('solicituds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idCliente');
            $table->unsignedInteger('idEquipo');
            $table->unsignedInteger('idTecnico')->nullable();
            $table->unsignedInteger('idMantenimiento')->nullable();
            $table->Enum('estado', ['pendiente', 'atendida'])->default('pendiente');
            $table->date('fecha');
            $table->dateTime('hora');
            $table->string('descripcion');
            $table->timestamps();

        });

        Schema::table('solicituds', function (Blueprint $table){
          $table->foreign('idEquipo')
          ->references('id')->on('equipos')
          ->onDelete('cascade');
          $table->foreign('id')
          ->references('id')->on('mantenimientos')
          ->onDelete('cascade');
          $table->foreign('idCliente')
          ->references('id')->on('users')
          ->onDelete('cascade');
          $table->foreign('idTecnico')
          ->references('id')->on('users')
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
        //
        Schema::drop('solicituds');
    }
}
