 <div class="form-group">
		{!!Form::label('','')!!}
                {!!Form::label('','Minuto')!!}
                  {!!Form::select('minuto',range(1,90),null,['class'=>'form-control','id'=>'minuto'])!!}
                     {!!Form::label('','Equipo')!!}
               {!!Form::select('equipo_calidad',[1=>'Visitante',2=>'Local'],null,['class'=>'form-control','id'=>'equipo_calidad'])!!}
                  {!!Form::label('','Tipo de Suceso')!!}
               {!!Form::select('tipo_comentario_id',[1=>'Falta',2=>'Fuera de Juego',3=>'Tiro al Arco',4=>'Gol',5=>'Medio Tiempo',6=>'Minutos Extra',7=>'Final del Partido'],null,['class'=>'form-control','id'=>'tipo_comentario_id'])!!}
               {!!Form::label('','Titulo')!!}
                {!!Form::text('titulo',null,['class'=>'form-control','id'=>'titulo'])!!}
                 {!!Form::label('','Descripcion')!!}
		{!!Form::textarea('comentario',null,['class'=>'form-control','id'=>'comentario'])!!}
	</div>