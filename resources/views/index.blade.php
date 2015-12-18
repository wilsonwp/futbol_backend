@extends('layouts.principal')
@include('alerts.errors')
@include('alerts.request')
@section('content')
<div class="col-sm-6">
						
						<h2>Futboleros</h2>
						<h4>Acceso a Moderadores y Publicadores</h4>
						<hr />
						<h4>Inicia Sesión y Publica!</h4>
					</div>
					<div class="col-sm-6">
						{!!Form::open(['route'=>'login.store', 'method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('correo','Correo:')!!}	
						{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('contrasena','Contraseña:')!!}	
						{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
					</div>
					{!!Form::submit('Iniciar',['class'=>'btn btn-primary'])!!}
                                            {!!Form::close()!!}
					</div>

@stop
