<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dormir extends Model
{
    protected $fillable =[
      'nombre',
      'direccion',
      'localidad',
      'telefono',
      'web',
      'votos',
      'votantes',
      'lng',
      'lat',
      'categoria',
      'activo',
    ];
}
