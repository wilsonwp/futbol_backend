@extends('layouts.admin')
<?php
echo '<pre>';
    var_dump($users->toArray()); // <---- or toJson()
    echo '</pre>';

$message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Usuario creado exitosamente
</div>
@endif
	@section('content')
	<table class="table">
		<thead>
			<th>Nombre</th>
                        <th>Apellido</th>
			<th>Correo</th>
                        <th>Tipo de Usuario</th>
                        <th>Username</th>
                        <th>Password</th>
			<th>Operacion</th>
		</thead>
		@foreach($users as $user)
			<tbody>
				<td>{{$user->nombre}}</td>
                                <td>{{$user->apellido}}</td>
				<td>{{$user->email}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->password}}</td>
                                <td></td>
			</tbody>
		@endforeach
	</table>
	@endsection