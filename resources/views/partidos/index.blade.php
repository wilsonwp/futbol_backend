@extends('layouts.admin')
@include('alerts.message')
@section('content')
	<table class="table">
		<thead>
			<th>Liga</th>
                        <th>Equipo Local</th>
			<th>Equipo visitante</th>
                        <th>Estatus del Partido</th>
                        <th>Acciones</th>
                        
		</thead>
                @foreach($partidos as $partido)
			<tbody>
                             
				<td>{{$partido->campeonato->nombre_campeonato}}</td>
                                @foreach($partido->equipos as $part)
                                     <td>{{$part->nombre_equipo}}</td>
                                @endforeach
                               
				<td>{!! link_to_route('partidos.edit', $title = 'editar', $parameters = $partido->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>
                                
			</tbody>
		@endforeach
	
	
	</table>
	@endsection