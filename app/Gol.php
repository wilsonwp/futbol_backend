<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
   public function partido(){
       return $this->belongsTo('\futboleros\Partido');
   }
   public function jugador(){
       return $this->belongsTo('\futboleros\Jugador');
   }
}
