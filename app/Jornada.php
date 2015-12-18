<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    protected $fillable = ['numero','campeonato_id','fecha'];
      //***** Relaciones entre las Clases****//
    //Una Jornada Pertenece a un Campeonato
    function campeonato(){
        return $this->belongsTo('\futboleros\Campeonato');
    }
    //Una Jornada Tiene Muchos Partidos
    function partidos(){
        return $this->hasMany('App\Partido');
    }
}
