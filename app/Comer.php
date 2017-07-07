<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comer extends Model
{
    protected $fillable =[
      'nombre',
      'direccion',
      'localidad',
      'telefono',
      'web',
      'email',
      'votos',
      'votantes',
      'lng',
      'lat',
      'categoria',
      'estrellas',
      'activo'
      ];
}
