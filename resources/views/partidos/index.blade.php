@extends('admin')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 {{Session::get('message')}}
</div>
@endif
@section('content')
	<table class="table">
		<thead>
			<th>Equipo Local</th>
                        <th>Equipo Visitante</th>
			<th></th>
                        <th>Estatus del Partido</th>
                        <th>Acciones</th>
                        
		</thead>
                @foreach($partidos as $partido)
			<tbody>
				<td>{{$partido->nombre}}</td>
                                <td>{{$partido->alias}}</td>
				<td>{{$partido->num_partidos}}</td>
                                <td>{{$partido->fecha_inic}}</td>
                                <td>{{$partido->fecha_fin}}</td>
                                <td>{!! link_to_route('partidos.edit', $title = 'editar', $parameters = $partido->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>
                                
			</tbody>
		@endforeach
	
	
	</table>
        {!!$partidos->render()!!}
	@endsection