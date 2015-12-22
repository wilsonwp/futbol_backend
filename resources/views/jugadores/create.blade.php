@extends('layouts.admin')
@section('content')
@include('alerts.ajax-success',['equipos'=>$equipos])
{!!Form::open()!!}
<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
    @include('jugadores.forms.ajax')
    {!!link_to('#',$title = 'Registrar',$attributes =['id'=>'registro','class'=>'btn btn-primary'],$secure = null )!!}
{!!Form::close()!!}
@endsection
@section('scripts')
{!!Html::script('js/script-crear.js')!!}
@endsection
