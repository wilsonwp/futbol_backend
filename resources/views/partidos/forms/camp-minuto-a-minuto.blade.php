 <div class="form-group">
		{!!Form::label('','')!!}
                {!!Form::label('','Minuto')!!}
                  {!!Form::text('minuto',null,['class'=>'form-control','id'=>'minuto'])!!}
                  {!!Form::label('','Tipo de Suceso')!!}
               {!!Form::select('tipo_comentario_id',[0=>'Falta',1=>'Fuera de Juego',2=>'Tiro al Arco',3=>'Gol',4=>'Medio Tiempo',5=>'Minutos Extra',6=>'Final del Partido'],null,['class'=>'form-control','id'=>'tipo_comentario_id'])!!}
               {!!Form::label('','Titulo')!!}
                {!!Form::text('titulo',null,['class'=>'form-control','id'=>'titulo'])!!}
                 {!!Form::label('','Descripcion')!!}
		{!!Form::textarea('comentario',null,['class'=>'form-control','id'=>'comentario'])!!}
	</div>