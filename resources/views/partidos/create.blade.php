@extends('layouts.admin')
@include('alerts.validacion')
	@section('content')
	{!!Form::open(['route'=>'partidos.store', 'method'=>'POST'])!!}
        <div class="">
		{!!Form::label('','Liga a que Pertenece')!!}
		{!!Form::select('campeonato_id',$campeonatos,null,['class'=>'form-control','id'=>'campeonato'])!!}
	</div>
       <div class="">
		{!!Form::label('','Jornada')!!}
		{!!Form::select('jornada_id',[],null,['class'=>'form-control','id'=>'jornada','placeholder'=>'Selecione...'])!!}
	</div>
        <div class="">
		{!!Form::label('','Equipo Visitante')!!}
		{!!Form::select('equipo_visitante',[],null,['class'=>'form-control','id'=>'visitante','placeholder'=>'Selecione...'])!!}
	</div>
        <div class="">
		{!!Form::label('','Equipo Local')!!}
		{!!Form::select('equipo_local',[],null,['class'=>'form-control','id'=>'local','placeholder'=>'Selecione...'])!!}
	</div>
         <div class="">
		{!!Form::label('','Estadio que se Juega el Partido')!!}
		{!!Form::select('estadio',[],null,['class'=>'form-control','id'=>'estadio','placeholder'=>'Selecione...'])!!}
	</div>
          <div class="">
		{!!Form::label('','Nombre de Arbitro')!!}
		{!!Form::text('nombre_arbitro',null,['class'=>'form-control','id'=>'','placeholder'=>'Nombre del Arbitro'])!!}
	</div>



	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
	@endsection
        @section('scripts')
        {!!Html::script('js/partidos/dropdown.js')!!}
        @endsection
  