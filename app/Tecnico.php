<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
     
//***** Relaciones entre las Clases****//
    //Un Tecnico Pertenece a un Equipo
   function equipo(){
       return $this->belongsTo('App\Equipo');
   }
}
