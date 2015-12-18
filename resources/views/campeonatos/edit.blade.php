@extends('layouts.admin')
	@section('content')
	{!!Form::model($campeonato,['route'=>['campeonatos.update',$campeonato->id],'method'=>'PUT'])!!}
	<div class="form-group">
		{!!Form::label('','Nombre de Campeonato:')!!}
		{!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese nombre del Campeonato'])!!}
	</div>
        <div class="form-group">
		{!!Form::label('alias','Alias del Campeonato:')!!}
		{!!Form::text('alias',null,['class'=>'form-control','placeholder'=>'Ingrese Alias'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('num_partidos','Numero de Partidos:')!!}
		{!!Form::text('num_partidos',null,['class'=>'form-control','placeholder'=>'Ingrese Numero de Partidos'])!!}
	</div>
        <div class="form-group">
		{!!Form::label('','Fecha de Inicio:')!!}
		{!!Form::date('fecha_inic',null,['class'=>'form-control'])!!}
	</div>
         <div class="form-group">
		{!!Form::label('','Fecha Fin:')!!}
		{!!Form::date('fecha_fin',null,['class'=>'form-control'])!!}
	</div>
	{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection
  