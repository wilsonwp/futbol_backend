@extends('admin')
<?php 
echo '<pre>';
    var_dump($campeonatos->toArray()); // <---- or toJson()
    echo '</pre>';
$message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Campeonato creado exitosamente
</div>
@endif
@section('content')
	<table class="table">
		<thead>
			<th>Nombre del Campeonato</th>
                        <th>Alias</th>
			<th>No. de Partidos</th>
			<th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        
		</thead>
	
	
	</table>
	@endsection