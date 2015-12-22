@extends('layouts.admin')
	@section('content')
	{!!Form::open(['route'=>'partidos.store', 'method'=>'POST'])!!}
        <div class="">
		{!!Form::label('','Liga a que Pertenece')!!}
		{!!Form::select('campeonato_id',$campeonatos,null,['class'=>'form-control'])!!}
	</div>
        <div class="">
		{!!Form::label('','Jornada Correspondiente')!!}
		{!!Form::select('jornada_id',$jornadas,null,['class'=>'form-control'])!!}
	</div>

	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection
  