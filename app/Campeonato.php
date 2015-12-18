<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    protected $fillable = array('nombre', 'alias', 'num_partidos','fecha_inic','fecha_fin');

      //***** Relaciones entre las Clases****//
    //Un Campeonato Tiene Muchas Jornadas
    function jornadas(){
        return $this->hasMany('App\Jornada');
    }
    //Un Campeonato Tiene Muchas Equipos
    function equipos(){
        return $this->hasMany('\futboleros\Equipo');
    }
}
