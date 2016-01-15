<?php

namespace futboleros;

use Illuminate\Database\Eloquent\Model;

class Hincha extends Model
{
   protected $fillable =['name','email','password','fecha_nacimiento','sexo','num_celular','estatus'];
}
