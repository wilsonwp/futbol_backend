@extends('layouts.admin')
@section('content')
@include('jugadores.modal',['equipos'=>$equipos])
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