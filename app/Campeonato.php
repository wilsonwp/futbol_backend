<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
   //***** Relaciones entre las Clases****//
    //Un Campeonato Tiene Muchas Jornadas
    function jornadas(){
        return $this->hasMany('App\Jornada');
    }
}
