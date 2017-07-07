<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    portected $fillable = [
      'titulo',
      'descripcion',
      'fecha',
      'portada',
      'foto',
      'badge',
      'telefono',
      'web',
      'email',
      'asistire',
      'categoria',
      'estrellas',
      'peso',
      'activo'
    ];
}
