@extends('layouts.admin')
	@section('content')
	{!!Form::model($equipo,['route'=>['equipos.update',$equipo->id],'method'=>'PUT'])!!}
        @include('equipos.forms.camp',['campeonatos'=>$campeonatos,'tecnicos'=>$tecnicos])
	{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection
  