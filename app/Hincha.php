<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Hincha extends Model
{
   protected $fillable =['name','email','password','fecha_nacimiento','sexo','num_celular','estatus'];


   public function ususrio(){
   		return $this->belongsTo('\futboleros\User');
   }
}
