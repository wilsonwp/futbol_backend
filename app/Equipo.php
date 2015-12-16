<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //***** Relaciones entre las Clases****//
    //Un equipo tiene un Tecnico
    function tecnico(){
        return $this->hasOne('App\Tecnico');
    }
    //Un equipo tiene un Estadio
    function estadio(){
        return $this->hasOne('App\Estadio');
    }
    //Un Equipo Tiene Muchos Juagadores
    function juagadors(){
        return $this->hasMany('App\Jugador');
    }
}
