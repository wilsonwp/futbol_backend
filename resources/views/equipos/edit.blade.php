@extends('layouts.admin')
	@section('content')
	{!!Form::model(['route'=>'equipos.store', 'method'=>'POST'])!!}
        <div class="">
		{!!Form::label('','Liga a que Pertenece')!!}
		{!!Form::select('campeonato_id',$campeonatos,null,['class'=>'form-control'])!!}
	</div>
        <div class="">
		{!!Form::label('','Tecnico del Equipo')!!}
		{!!Form::select('tecnico_id',$tecnicos,null,['class'=>'form-control'])!!}
	</div>
          <div class="">
		{!!Form::label('','Estadio del Equipo')!!}
		{!!Form::select('estadio_id',$estadios,null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('','Nombre del Equipo:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre del Equipo'])!!}
	</div>
        <div class="form-group">
		{!!Form::label('','Alias:')!!}
		{!!Form::text('alias',null,['class'=>'form-control','placeholder'=>'Ingrese Alias'])!!}
	</div>
        <div class="form-group">
		{!!Form::label('','Fecha de Fundacion:')!!}
		{!!Form::date('fecha_fundacion',null,['class'=>'form-control'])!!}
	</div>
        <div class="form-group">
		{!!Form::label('','Presidente del Equipo:')!!}
		{!!Form::text('presidente_actual',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre completo del Presidente'])!!}
	</div>
        <div class="form-group">
		{!!Form::label('','Nombre de la Hinchada:')!!}
		{!!Form::text('nombre_hinchada',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre de la Hichada'])!!}
	</div>
	
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection
  