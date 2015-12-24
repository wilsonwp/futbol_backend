$(document).ready(function(){
   cargar();
    
});
function cargar(){
     var tablaDatos = $("#datos");
   var route = 'http://localhost:8000/verPerfil';
   $("#datos").empty();
   $.get(route,function(resp){
       tablaDatos.append("<tr><td></td><td><button value="+resp.id+" OnClick='mostrar();' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Actualizar mi Perfil</button></td></tr><tr><td>Nombre:</td><td>"+resp.nombre+"</td></tr><tr><td>Nickname:</td><td>"+resp.nickname+"</td><td></td></tr><tr><td>Telefono:</td><td>"+resp.telefono+"</td><td></td></tr><tr><td>Direccion:</td><td>"+resp.direccion+"</td><td></td></tr><tr><td>Correo:</td><td>"+resp.email+"</td></tr>");   
   });
   }
function mostrar(){
    var route = 'http://localhost:8000/verPerfil';
    $.get(route,function(res){
        $("#nombre").val(res.nombre);
        $("#email").val(res.email);
         $("#telefono").val(res.telefono);
         $("#direccion").val(res.direccion);
         $("#nickname").val(res.nickname);
        $("#id").val(res.id);
        
        
        
    });
    
}
$("#actualizar").click(function(){
    var id = $("#id").val();
     var nombre =$("#nombre");
     var email = $("#email");
     var telefono = $("#telefono");
     var direccion = $("#direccion");
     var nickname = $("#nickname");
    route =  "http://localhost:8000/perfiles/"+id;
    token = $("#token").val();
    
     $.ajax({
             url: route,
             headers: {'X-CSRF-TOKEN': token},
             type: 'PUT',
             dataType: 'json',
             data: {
                 nombre: nombre,
                 nickname: nickname,
                 direccion: direccion,
                 telefono: telefono,
                 email:email
                 
                },
             success: function(){
                 cargar();
                 $("#myModal").modal('toggle');
                  $('#msj-success').fadeIn();
                 
             }
         });
     
});