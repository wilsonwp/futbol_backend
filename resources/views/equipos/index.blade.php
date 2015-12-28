@extends('layouts.admin')
@section('content')
	<table class="table">
		<thead>
                        <th>Nombre</th>
                        <th>Liga</th>
			<th>Alias</th>
			<th>Fecha de Fundacion</th>
                        <th>Presidente Actual</th>
                        <th>Nombre de la Hinchada</th>
			<th>Estatus</th>
                        <th>Estadio</th>
                        <th>Tecnico Actual</th>
                        <th></th>
			
                        
		</thead>
                @foreach ($equipos as $equipo)
                <tbody>
			<td>{{$equipo->nombre}}</td>
                        <td>{{$equipo->campeonato->nombre_campeonato}}</td>
			<td>{{$equipo->alias}}</td>
                        <td>{{$equipo->fecha_fundacion}}</td>
                        <td>{{$equipo->presidente_actual}}</td>
                        <td>{{$equipo->nombre_hinchada}}</td>
                        <td>{{$equipo->presidente_actual}}</td>
                        <td>{{$equipo->nombre_estadio}}</td>
                        <td>{{$equipo->tecnico->nombre}}</td>
                      
                        <td>{!! link_to_route('equipos.edit', $title = 'editar', $parameters = $equipo->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>
                        
                        
                        
		</tbody>
                
                @endforeach
               
	
	
	</table>
          {!!$equipos->render()!!}
	@endsection