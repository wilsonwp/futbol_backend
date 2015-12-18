@extends('admin')
<?php 
$message=Session::get('message')?>

@if($message == 'store')
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  Jornada creada exitosamente
</div>
@endif
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
                        <td>{{$jornada->campeonato->nombre}}</td>
                        <td>{!! link_to_route('jornadas.edit', $title = 'editar', $parameters = $jornada->id, $attributes = ['class'=>'btn btn-primary']);!!}</td>                       
                        
		</tbody>
                
                @endforeach
               
	
	
	</table>
	@endsection