<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model


{
    protected $fillable = ['nombre','alias','fecha_fundacion','presidente_actual','nombre_hinchada','activado','campeonato_id','estadio_id','tecnico_id'];
    //***** Relaciones entre las Clases****//
    //Un equipo tiene un Tecnico
    function tecnico(){
        return $this->belongsTo('\futboleros\Tecnico');
    }
    //Un Equipo pertenece a campeonato (Liga)
    function campeonato(){
        return $this->belongsTo('\futboleros\Campeonato');
    }
    //Un equipo tiene un Estadio
    function estadio(){
        return $this->belongsTo('\futboleros\Estadio');
    }
    //Un Equipo Tiene Muchos Juagadores
    function juagadors(){
        return $this->hasMany('\futboleros\Jugador');
    }
}
