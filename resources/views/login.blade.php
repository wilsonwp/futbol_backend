@extends('layouts.principal')

@section('content')
<div class="col-sm-6">
						
						<h2>Futboleros</h2>
						<h4>Acceso a Moderadores y Publicadores</h4>
						<hr />
						<h4>Inicia Sesión y Publica!</h4>
					</div>
					<div class="col-sm-6">
						<form id="request" class="row suscribe" action="request-form.php" method="post" accept-charset="utf-8">
							<div class="col-sm-12">
								<input type="text" class="form-control" placeholder="usuario" name="usuario">
								<input type="password" class="form-control" placeholder="password" name="password">
							</div>
						
							<div class="text-center">
								<button type="submit" class="btn btn-default text-center"><i class="icon-info"></i> Iniciar Sesion </button>
							</div>
                                                    <div class="text-center">
                                                        <a> Olvidaste tu contraseña?</a>
							</div>
						</form>
					</div>

@stop
