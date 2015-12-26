$('#registro').click(
        function(){
         var titulo = $('#titulo').val();
         var contenido = $('#titulo').val();
         var user_id = $('#user').val();
         var route = 'http://localhost:8000/noticias';
         var token = $('#token').val();
         
         $.ajax({
             url: route,
             headers: {'X-CSRF-TOKEN': token},
             type: 'POST',
             dataType: 'json',
             data: {
                 titulo:titulo,
                 contenido:contenido,
                 user_id :user_id
                },
             success: function(){
                 $('#msj-success').fadeIn();
                 
             },
            error: function(msj){
               console.log(msj.responseJSON.nombre);
               $("#msj").html(msj.responseJSON.nombre);
               $("#msj-error").fadeIn();
               
            }
         });
        });