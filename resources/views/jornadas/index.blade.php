@extends('layouts.admin')

@section('content')
	<table class="table">
		<thead>
                        <th>No. de la Jornada</th>
			<th>Fecha de la Jornada</th>
			<th>Campeonato</th>
                        <th>Acciones</th>
                        
                        
		</thead>
                @foreach ($jornadas as $jornada)
                <tbody>
			<td>{{$jornada->numero}}</td>
			<td>{{$jornada->fecha}}</td>
                        <td>{{$jornada->campeonato->nombre_campeonato}}</td>
                        <td>{!! link_to_route('jornadas.edit', $title = 'editar', $parameters = $jornada->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>                       
                        
		</tbody>
                
                @endforeach
               
	
	
	</table>
          {!!$jornadas->render()!!}
	@endsection