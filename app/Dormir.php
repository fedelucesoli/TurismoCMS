<?php

namespace App;
use App\User;
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
