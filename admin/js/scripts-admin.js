$("#EnviarAdmin").click(function(){
    var emailsesion = $("#emailAdmin").val();
    var contrasenasesion = $("#passwordAdmin").val();
 
    if(emailsesion == "" || contrasenasesion == ""){
       Swal.fire(
          'Lo sentimos',
          'Por favor llene todos los campos.',
          'warning'
        )
    }else{
       var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      if (reg.test(emailsesion) == false) {
          Swal.fire(
              'Lo sentimos',
              'La cuenta de correo no es valida, verifiquela nuevamente.',
              'warning'
          )
       }else{
          $.ajax({
             type:"POST",
             url:"lib/checkLogin-glama.php",
             data:$("#formAdmin").serialize(),//only input
             success: function(response){
                console.log(response);
                if (response == 'true'){
                $('#formAdmin')[0].reset();
                Swal.fire(
                   'Bienvenido',
                   '',
                   'success'
                 ).then((result) => {
                   $(".overlay-pop-sesion").css("display","none");
                   location.reload();
                 })
                }else{
                   Swal.fire(
                      'Lo sentimos',
                      'Los datos de acceso son incorrectos',
                      'warning'
                    )
                }
             }
          });
       }
 
    }
 
 });

 // ENVIAR MENSAJE
$( "#enviarMensaje" ).click(function() {
   var idUserMsj = $("#idUserMsj").val();
   var idMsj = $("#idMensaje").val();
   var mensajeMsj = $("#mensajeMsj").val();

   if(idUserMsj  != "" && idMsj != "" && mensajeMsj != ""){
         $.ajax({
            type:"POST",
            url:"lib/mensaje-admin-glama.php",
            data:$("#mensajenuevo").serialize(),//only input
            success: function(response){
               console.log(response);
               if (response == "true"){
               $('#mensajenuevo')[0].reset();
               Swal.fire(
                  'Muchas Gracias',
                  'Se ha enviado respuesta a usuario.',
                  'success'
                ).then((result) => {
                   location.reload();
                 })
               }
            }
         });
   }
   else{
      Swal.fire(
         'Lo sentimos',
         'Por favor ingrese una respuesta.',
         'warning'
       )
   }
 });