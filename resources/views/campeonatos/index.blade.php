@extends('admin')
@section('content')
	<table class="table">
		<thead>
			<th>Nombre del Campeonato</th>
                        <th>Alias</th>
			<th>No. de Partidos</th>
			<th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Acciones</th>
                        
		</thead>
                @foreach($campeonatos as $campeonato)
			<tbody>
				<td>{{$campeonato->nombre}}</td>
                                <td>{{$campeonato->alias}}</td>
				<td>{{$campeonato->num_partidos}}</td>
                                <td>{{$campeonato->fecha_inic}}</td>
                                <td>{{$campeonato->fecha_fin}}</td>
                                <td>{!! link_to_route('campeonatos.edit', $title = 'editar', $parameters = $campeonato->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>
                                
			</tbody>
		@endforeach
	
	
	</table>
        {!!$campeonatos->render()!!}
	@endsection