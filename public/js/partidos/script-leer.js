$(document).ready(function(){
   cargar();
    
});
function cargar(){
     var tablaDatos = $("#datos");
   var route = 'http://localhost:8000/jugadoresList';
   $("#datos").empty();
   $.get(route,function(resp){
       $(resp).each(function(key,value){
          tablaDatos.append("<tr><td>"+value.nombre+"</td><td>"+value.alias+"</td><td>"+value.descripcion+"</td><td><button value="+value.id+" OnClick='mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Ver Ficha</button><button class='btn btn-danger' value="+value.id+" OnClick='eliminar(this);'>Eliminar</button></td></tr>");
       });
   
   
   });
    
}
function mostrar(btn){
    var route = 'http://localhost:8000/partidos/'+btn.value+'/edit';
    
    $.get(route,function(res){
        $("#estatus").val(res.estatus_partido);
        $("#id").val(res.id);
        
        
        
    });
    comentarios(btn);
    
    
}
function comentarios(btn){
    var route2 = 'http://localhost:8000/comentarios/'+btn.value+'';
    $.get(route2,function(res){
        var contenido = $("#contenido");
        for( i =0; i < res.length; i++){
            contenido.append("<tr><td>"+res[i].contenido+"</td><td>"+res[i].created_at+"</td></tr>");
        }
        
        
        
    });
}
function comentarios_new(id){
    var route2 = 'http://localhost:8000/comentarios/'+id+'';
        $("#contenido").val("");
    $.get(route2,function(res){
        var contenido = $("#contenido");
        for( i =0; i < res.length; i++){
            contenido.append("<tr><td>"+res[i].contenido+"</td><td>"+res[i].created_at+"</td></tr>");
        }
        
        
        
    });
}
$("#agregar").click(function(){
    contenido = $("#comentario").val();
    user_id = $("#user_id").val();
    partido_id = $("#id").val();
    var route = 'http://localhost:8000/comentarios';
    var token = $('#token').val();
    
    $.ajax({
             url: route,
             headers: {'X-CSRF-TOKEN': token},
             type: 'POST',
             dataType: 'json',
             data: {
                 contenido: contenido,
                 user_id: user_id,
                 partido_id: partido_id,
                },
             success: function(){
                 $('#comentario').val('');
                 comentarios_new(partido_id);
             },
            error: function(msj){
               console.log(msj.responseJSON.nombre);
               $("#msj").html(msj.responseJSON.nombre);
               $("#msj-error").fadeIn();
               
            }
         });
    
     
});
$("#actualizar").click(function(){
    var id = $("#id").val();
    var estatus_partido = $("#estatus").val();
    route =  "http://localhost:8000/partidos/"+id+"";
    token = $("#token").val();
    
     $.ajax({
             url: route,
             headers: {'X-CSRF-TOKEN': token},
             type: 'PUT',
             dataType: 'json',
             data: {
                 id: id,
     estatus_partido:estatus_partido
                 
                },
             success: function(){
                 cargar();
                 $("#myModal").modal('toggle');
                  $('#msj-success').fadeIn();
                 
             }
         });
     
});     
       