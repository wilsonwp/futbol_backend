<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
   protected $fillable = ['minuto','user_id','partido_id','contenido'];
   public function partido(){
       return $this->belongsTo('\futboleros\Partido');
   }
   public function usuario(){
       return $this->belongsTo('\futboleros\User');
   }
   
    
}
