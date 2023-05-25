// ENVIAR MENSAJE
$( "#enviarMensaje" ).click(function() {
    var idUserMsj = $("#idUserMsj").val();
    var asuntoMsj = $("#asuntoMsj").val();
    var mensajeMsj = $("#mensajeMsj").val();
 
    if(idUserMsj  != "" && asuntoMsj != "" && mensajeMsj != ""){
          $.ajax({
             type:"POST",
             url:"lib/mensaje-glama.php",
             data:$("#mensajenuevo").serialize(),//only input
             success: function(response){
                console.log(response);
                if (response == "true"){
                $('#mensajenuevo')[0].reset();
                Swal.fire(
                   'Muchas Gracias',
                   'Hemos recibido su mensaje.',
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
          'Por favor llene todos los campos.',
          'warning'
        )
    }
  });

//   ENVIAR RESPUESTA
$( "#enviarRespuesta" ).click(function() {
    var idUserMsj = $("#idUserMsj").val();
    var idMsj = $("#idMsj").val();
    var mensajeMsj = $("#mensajeMsj").val();
 
    if(idUserMsj  != "" && idMsj != "" && mensajeMsj != ""){
          $.ajax({
             type:"POST",
             url:"lib/respuesta-glama.php",
             data:$("#respuestanueva").serialize(),//only input
             success: function(response){
                console.log(response);
                if (response == "true"){
                $('#respuestanueva')[0].reset();
                Swal.fire(
                   'Muchas Gracias',
                   'Hemos recibido su respuesta.',
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
          'Por favor llene todos los campos.',
          'warning'
        )
    }
    
  });