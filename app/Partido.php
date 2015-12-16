<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
  //***** Relaciones entre las Clases****//
  // Un Partido Pertenece a Una Jornada
    function jornada(){
        return $this->belongsTo('App\Jornada');
    }
    // Un partido lo pita un Arbitro
     function arbitro(){
        return $this->belongsTo('App\Arbitro');
    }
}
