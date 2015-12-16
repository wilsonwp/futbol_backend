<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Arbitro extends Model
{
       //***** Relaciones entre las Clases****//
    //un Arbitro Pita Muchos Partidos
     function partidos(){
        return $this->hasMany('App\Partido');
    }
}
