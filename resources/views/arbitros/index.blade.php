@extends('layouts.admin')
@section('content')
@include('alerts.message');
	<table class="table">
		<thead>
			<th>Nombre de Arbitro</th>
                        <th>Alias</th>
			<th>Nacionalidad</th>
                        <th>Acciones</th>
                        <th></th>
                        
		</thead>
                <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
                @foreach($arbitros as $arbitro)
			<tbody>
				<td>{{$arbitro->nombre}}</td>
                                <td>{{$arbitro->alias}}</td>
                                <td>{{$arbitro->nacionalidad}}</td>
                                <td>{!! link_to_route('arbitros.edit', $title = 'editar', $parameters = $arbitro->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>
                                
                                
			</tbody>
		@endforeach
                @section('scripts')
                {!!Html::script('js/script-borrar.js')!!}
                @endsection
	
	
	</table>
        {!!$arbitros->render()!!}
	@endsection