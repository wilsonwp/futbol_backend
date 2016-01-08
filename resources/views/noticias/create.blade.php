@extends('layouts.admin')
@section('content')
@include('alerts.validacion')
@include('alerts.ajax-auth')
@include('alerts.ajax-success')
{!!Form::open(['route'=>'noticias.store', 'method'=>'POST'])!!}
<input type="hidden" name="_token" value="{{csrf_token()}}" id="token">
    @include('noticias.forms.camp')
{!!Form::submit('Publicar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@endsection
@section('scripts')
{!!Html::script('js/noticias/crear.js')!!}
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{ url('') }}/tinymce/tinymce_editor.js"></script>
<script type="text/javascript">
editor_config.selector = "textarea";
editor_config.path_absolute = "http://localhost:8000";
tinymce.init(editor_config);
</script>
@endsection
