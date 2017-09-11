<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
   protected $fillable = [
    'nombre',
    'direccion',
    'localidad',
    'telefono',
    'web',
    'email',
    'lng',
    'lat',
    'activo',
    'id_usuario'
   ];

}
