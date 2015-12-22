<div class="form-group">
		{!!Form::label('','Seleccione Liga:')!!}
		{!!Form::select('campeonato_id',@campeonatos,null,['class'=>'form-control'])!!}
	</div>
     <div class="form-group">
		{!!Form::label('','Seleccione Jornada Correspondiente:')!!}
		{!!Form::select('jornada_id',@jornadass,null,['class'=>'form-control'])!!}
	</div>
