@extends('layouts.admin')
	@section('content')
	{!!Form::open(['route'=>'campeonatos.store', 'method'=>'POST'])!!}
	@include('campeonatos.forms.camp')
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection
  