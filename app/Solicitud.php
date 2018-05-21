<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    //

    protected $fillable = [
      'idCliente',
      'idEquipo',
      'idTecnico',
      'estado',
      'fecha',
      'hora',
      'descripcion'
    ];
}
