@extends('layouts.admin')
@section('content')
@include('alerts.ajax-success-act')
@include('perfiles.modal',['perfil'=>Auth::user()])
@include('perfiles.modal-busqueda')
<table class="table">
    <thead>
    <th>#</th>
    <th>#</th>
    </thead>
    <tbody id="datos"> </tbody>
   
</table>
@endsection
@section('scripts')
{!!Html::script('js/script-perfil.js')!!}
@endsection