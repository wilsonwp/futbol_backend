@extends('layouts.admin')
	@section('content')
	{!!Form::open(['route'=>'campeonatos.store', 'method'=>'POST'])!!}
	<div class="form-group">
		{!!Form::label('nombre','Nombre de Campeonato:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa nombre del Campeonato'])!!}
	</div>
        <div class="form-group">
		{!!Form::label('alias','Alias del Campeonato:')!!}
		{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingrese Alias'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('num_partidos','Numero de Partidos:')!!}
		{!!Form::text('num_partidos',null,['class'=>'form-control','placeholder'=>'Ingrese Numero de Partidos'])!!}
	</div>
        <div class="form-group">
		{!!Form::label('','Fecha de Inicio:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
        <div class="form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
	</div>
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection
  