<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
     //***** Relaciones entre las Clases****//
    // Jugador Pertenece a un Equipo
    function equipo(){
        return $this->belongsTo('App\Equipo');
    }
    // Jugador Pertenece a una Posicion
    function posicione(){
        return $this->belongsTo('App\Posicione');
    }
}
