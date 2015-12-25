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
				<td>{{$partido->campeonato->nombre}}</td>
                                <td></td>
				<td>{{$partido->num_partidos}}</td>
                                <td>{{$partido->fecha_inic}}</td>
                                <td>{{$partido->fecha_fin}}</td>
                                <td>{!! link_to_route('partidos.edit', $title = 'editar', $parameters = $partido->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>
                                
			</tbody>
		@endforeach
	
	
	</table>
        {!!$partidos->render()!!}
	@endsection