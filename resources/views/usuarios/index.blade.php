@extends('layouts.admin')
@include('alerts.message')
	@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
                        <th>Tipo de Usuario</th>
                        <th>Password</th>
			<th>Operacion</th>
		</thead>
		@foreach($users as $user)
			<tbody>
				<td>{{$user->nombre}}</td>
				<td>{{$user->email}}</td>
                                <td> {{$user->categoria_user->nombre_categoria}}</td>
                                <td>{{$user->password}}</td>
                                <td>{!! link_to_route('users.edit', $title = 'editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>
			</tbody>
		@endforeach
	</table>
          {!!$users->render()!!}
	@endsection