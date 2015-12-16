<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
      //***** Relaciones entre las Clases****//
    //Una Jornada Pertenece a un Campeonato
    function campeonato(){
        return $this->belongsTo('App\Campeonato');
    }
    //Una Jornada Tiene Muchos Partidos
    function partidos(){
        return $this->hasMany('App\Partido');
    }
}
