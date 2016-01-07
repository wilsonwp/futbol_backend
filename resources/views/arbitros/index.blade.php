@extends('layouts.admin')
@section('content')
@include('alerts.message');
	<table class="table">
		<thead>
			<th>Nombre del Campeonato</th>
                        <th>Alias</th>
			<th>No. de Partidos</th>
			<th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Acciones</th>
                        <th></th>
                        
		</thead>
                <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
                @foreach($tecnicos as $tecnico)
			<tbody>
				<td>{{$tecnico->nombre}}</td>
                                <td>{{$tecnico->alias}}</td>
                                <td>{{$tecnico->nacionalidad}}</td>
                                <td>{!! link_to_route('tecnicos.edit', $title = 'editar', $parameters = $tecnico->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>
                                
                                
			</tbody>
		@endforeach
                @section('scripts')
                {!!Html::script('js/script-borrar.js')!!}
                @endsection
	
	
	</table>
        {!!$tecnicos->render()!!}
	@endsection