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
function mostrar2(btn){
    var route = 'http://localhost:8000/comentarios/'+btn.value;
    $("#id").val(btn.value);
   $("#contenido").empty();
      $.get(route,function(res){
        var contenido = $("#contenido");
        for( i =0; i < res.length; i++){
             contenido.append("<tr><td>Min. "+res[i].minuto+"</td><td>"+res[i].titulo+"</td><td>"+res[i].contenido+"</td><td>"+res[i].created_at+"</td></tr>");
        }
        
        
        
    });
    
    
    
}
function comentarios_new(id){
    var route2 = 'http://localhost:8000/comentarios/'+id+'';
        $("#contenido").val("");
        $("#titulo").val("");
        $("#contenido").empty();
    $.get(route2,function(res){
        console.log(res);
        var contenido = $("#contenido");
        for( i =0; i < res.length; i++){
            contenido.append("<tr><td>Min. "+res[i].minuto+"</td><td>"+res[i].titulo+"</td><td>"+res[i].contenido+"</td><td>"+res[i].created_at+"</td></tr>");
        }
        
        
        
    });
}
$("#agregar").click(function(){
    contenido = $("#comentario").val();
    titulo = $("#titulo").val();
    minuto = $("#minuto").val();
    tipo_comentario_id = $("#tipo_comentario_id").val();
    user_id = $("#user_id").val();
    partido_id = $("#id").val();
    console.log(partido_id);
    var route = 'http://localhost:8000/comentarios';
    var token = $('#token').val();
    
    $.ajax({
             url: route,
             headers: {'X-CSRF-TOKEN': token},
             type: 'POST',
             dataType: 'json',
             data: {
                 tipo_comentario_id: tipo_comentario_id,
                 titulo:titulo,
                 contenido: contenido,
                 user_id: user_id,
                 partido_id: partido_id,
                 minuto:minuto
                },
             success: function(){
                 $('#comentario').val('');
                 $('#titulo').val('');
                  $('#minuto').val('');
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
     estatus_partido:estatus_partido
                 
                },
             success: function(){
                 $("#myModal").modal('toggle');
                 location.reload();
                 $('#msj-success').fadeIn();
                 
             }
         });
     
});     
       