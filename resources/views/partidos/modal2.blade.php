<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Partido Tiempo Real</h4>
      </div>
      <div class="modal-body">
      
      	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
      	<input type="" id="id">
        <input type="hidden" id="user_id" value="{{Auth::user()->id}}" >
        @include('partidos.forms.camp-minuto-a-minuto')
        
      </div>
        <div>
      {!!link_to('#', $title='Añadir Comentario', $attributes = ['id'=>'agregar', 'class'=>'btn btn-primary'], $secure = null)!!}
      </div>
      <div class="">
      {!!link_to('#', $title='Finalizar Partido', $attributes = ['id'=>'finalizar', 'class'=>'btn btn-danger'], $secure = null)!!}
      </div>
        <div class="modal-footer"><table class="table" id="contenido">
    <thead><caption>Minuto a Minuto</caption></thead>
                    <tbody></tbody>
        </table></div>
        
    </div>
  </div>
</div>