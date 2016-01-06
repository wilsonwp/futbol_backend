@extends('layouts.admin')
@include('alerts.message')
<div id='msj-success' class="alert alert-success alert-dismissible" role="alert" style="display: none">
    <strong>Partido Actualizado </strong>    
</div>
@include('partidos.modal',['partidos'=>$partidos])
@include('partidos.modal2',['partidos'=>$partidos])
@include('partidos.modal3',['partidos'=>$partidos])
@section('content')
<table class="table" id="">
		<thead>
			<th>Liga</th>
                        <th>Equipo Local</th>
			<th>Equipo visitante</th>
                        <th>Estatus del Partido</th>
                        <th>Acciones</th>
                        <th></th>
                        
		</thead>
                @foreach($partidos as $partido)
                <tbody id="contenido">
                             
				<td>{{$partido->campeonato->nombre_campeonato}}</td>
                                @foreach($partido->equipos as $part)
                                     <td>{{$part->nombre_equipo}}</td>
                                @endforeach
                                <td>@if($partido->estatus_partido == 0){!! Html::image('/img/proximamente.png','Proximamente',['width'=>'100px'])!!}@endif  @if($partido->estatus_partido == 1) Jugando {!! Html::image('/img/jugando.png','Proximamente',['width'=>'100px'])!!}  @endif @if($partido->estatus_partido == 2) {!! Html::image('/img/concluido.png','Concluido',['width'=>'100px'])!!}  @endif </td>
                                <td><button value="{{$partido->id}}" OnClick="mostrar(this);" class='btn btn-primary' data-toggle="modal" data-target="#myModal">Cambiar Estatus</button></td>
                                <td>@if($partido->estatus_partido == 0)@endif  @if($partido->estatus_partido == 1)<button value="{{$partido->id}}" OnClick="mostrar2(this);" class='btn btn-primary' data-toggle="modal" data-target="#myModal2">Minuto a Minuto</button> @endif @if($partido->estatus_partido == 2) <button value="{{$partido->id}}" OnClick="mostrar(this);" class='btn btn-primary' data-toggle="modal" data-target="#myModal3">Estadisticas del Partido</button>   @endif </td>
                                
			</tbody>
		@endforeach
	
	
	</table>
	@endsection
        @section('scripts')
            {!!Html::script('js/partidos/script-leer.js')!!}
        @endsection