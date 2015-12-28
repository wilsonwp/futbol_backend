@extends('layouts.admin')
@include('alerts.message')
@include('partidos.modal',['partidos'=>$partidos])
@section('content')
<table class="table" id="">
		<thead>
			<th>Liga</th>
                        <th>Equipo Local</th>
			<th>Equipo visitante</th>
                        <th>Estatus del Partido</th>
                        <th>Acciones</th>
                        
		</thead>
                @foreach($partidos as $partido)
                <tbody id="contenido">
                             
				<td>{{$partido->campeonato->nombre_campeonato}}</td>
                                @foreach($partido->equipos as $part)
                                     <td>{{$part->nombre_equipo}}</td>
                                @endforeach
                                <td>@if($partido->estatus_partido == 0){!! Html::image('/img/proximamente.png','Proximamente',['width'=>'100px'])!!}@endif  @if($partido->estatus_partido == 1) Jugando {!! Html::image('/img/jugando.png','Proximamente',['width'=>'100px'])!!}  @endif @if($partido->estatus_partido == 2) Jugando {!! Html::image('/img/finalizado.png','Proximamente',['width'=>'100px'])!!}  @endif </td>
				<td><button value="{{$partido->id}}" OnClick="mostrar(this);" class='btn btn-primary' data-toggle="modal" data-target="#myModal">Cambiar Estatus</button></td>
                                
			</tbody>
		@endforeach
	
	
	</table>
	@endsection
        @section('scripts')
            {!!Html::script('js/partidos/busqueda.js')!!}
        @endsection