<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    //
    protected $fillable=[
      'idEquipo',
      'idTecnico',
      'codigo',
      'fecha',
      'hora',
      'tipo_de_mantenimiento',
      'descripcion',
      'estado'
    ];
}
