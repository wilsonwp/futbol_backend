$(document).ready(function(){
    var tablaDatos = $("#datos");
   var route = 'http://localhost:8000/jugadoresList';
   
   $.get(route,function(resp){
       $(resp).each(function(key,value){
          tablaDatos.append("<tr><td>"+value.nombre+"</td><td><button value="+value.id+" OnClick='mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
       });
   
   
   });
    
    
});
function mostrar(btn){
    console.log(btn.value());
    
}
        
       