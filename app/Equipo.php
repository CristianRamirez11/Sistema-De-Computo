<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //

    protected $fillable = [
      'serial',
      'marca',
      'modelo',
      'color',
      'capacidad_memoria_RAM',
      'capacidad_disco_duro',
      'tipo_computador'
      ];
}
