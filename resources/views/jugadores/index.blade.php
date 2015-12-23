@extends('layouts.admin')
@section('content')
@include('alerts.ajax-success-act')
@include('jugadores.modal',['equipos'=>$equipos])
@include('jugadores.modal-busqueda')
<table class="table">
    <thead>
    <th>Nombre</th>
    <th>Operaciones</th>
    </thead>
    <tbody id="datos"> </tbody>
   
</table>
@endsection
@section('scripts')
{!!Html::script('js/script-leer.js')!!}
@endsection