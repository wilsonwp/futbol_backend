<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
<<<<<<< HEAD
	protected $fillable= ['partido_id','jugador_id','equipo_id','minuto','descripcion']; 
=======
	protected $fillable= ['partido_id','jogador_id','equipo_id','minuto','descripcion']; 
>>>>>>> c3ad6474361fdf1b1ded0e804a19bdd60792b632

   public function partido(){
       return $this->belongsTo('\futboleros\Partido');
   }
   public function jugador(){
       return $this->belongsTo('\futboleros\Jugador');
   }
    public function equipo(){
       return $this->belongsTo('\futboleros\Equipo');
   }
}
