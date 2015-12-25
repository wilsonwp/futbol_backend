<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $fillable= ['estadio','equipo_visitante','equipo_local','jornada_id','nombre-arbitro','campeonato_id'];
  //***** Relaciones entre las Clases****//
  // Un Partido Pertenece a Una Jornada
    function jornada(){
        return $this->belongsTo('futboleros\Jornada');
    }
    function campeonato(){
        return $this->belongsTo('futboleros\Campeonato');
    }
    
}
