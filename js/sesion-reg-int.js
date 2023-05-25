 /****** SESION Y REGISTRO DE USUARIO *********/
 $(".btn-close-form").click(function(){
    $(".overlay-pop-sesion").css("display","none");
    $("#formRegistro").css("display","none");
    $("#formInicioSesion").css("display","none");
    $("#formRecupera").css("display","none");
    $("#titleform").html("");
 });
$("#btnRecuperar").click(function(){
    $("#formInicioSesion").css("display","none");
    $("#formRecupera").css("display","block");
    $("#titleform").html("RECUPERAR");
 });
 $("#registrobtn, #registrobtnmovil, #registrobtnfooter, .btn-cotizar-sm-sostenibilidad").click(function(){
    $(".overlay-pop-sesion").css("display","block");
    $("#formRegistro").css("display","block");
    $("#titleform").html("REGISTRARME");
    $(".nav-header").toggleClass("open-menu-movil");
   $(".submenu-conocenos").removeClass("view-submenu-conocenos");
   $("#conocenos").removeClass("visit-nav-item");
 });

 $("#iniciosesionbtn, #iniciosesionbtnmovil, #iniciosesionbtnfooter").click(function(){
   $(".overlay-pop-sesion").css("display","block");
   $("#formInicioSesion").css("display","block");
   $("#titleform").html("INICIAR SESIÓN");
   $(".nav-header").toggleClass("open-menu-movil");
   $(".submenu-conocenos").removeClass("view-submenu-conocenos");
   $("#conocenos").removeClass("visit-nav-item");
});
 
$( ".btn-enviar-msg" ).click(function() {
   var nombrefc = $("#nombrefc").val();
   var empresafc = $("#empresafc").val();
   var emailfc = $("#emailfc").val();
   var telefonofc = $("#telefonofc").val();
   var productofc = $("#productofc").val();
   var paisfc = $("#paisfc").val();
   var mensajefc = $("#mensajefc").val();
   var aceptopromosfc = $("#aceptopromosfc").is(':checked');
   var aceptoavisofc = $("#aceptoavisofc").is(':checked');

   if(nombrefc  != "" && empresafc != "" && emailfc  != "" && paisfc != ""){
      if(aceptoavisofc != false){
         $.ajax({
            type:"POST",
            url:"../lib/form-moreinfo-contact.php",
            data:$("#formMoreInfoGlama").serialize(),//only input
            success: function(response){
               console.log(response);
               if (response == 1){
               $('#formMoreInfoGlama')[0].reset();
               Swal.fire(
                  'Muchas Gracias',
                  'Hemos recibido su mensaje.',
                  'success'
                )
               }
            }
         });
      }else{
         Swal.fire(
            'Lo sentimos',
            'Por favor acepte los terminos y condiciones.',
            'warning'
          )
      }
   }
   else{
      Swal.fire(
         'Lo sentimos',
         'Por favor llene todos los campos requeridos.',
         'warning'
       )
   }
   
 });

 /* ENVIAR REGISTRO */
 $("#sendregistro").click(function(){
   var nombrereg = $("#nombrereg").val();
   var emailreg = $("#emailreg").val();
   var empresareg = $("#empresareg").val();
   var contrasenareg = $("#contrasenareg").val();
   var contrasenaconfirmreg = $("#contrasenaconfirmreg").val();
   var checkAviso = $("#aceptoAviso").is(':checked');

   if(nombrereg == "" || emailreg == "" || empresareg  == "" || contrasenareg == "" || contrasenaconfirmreg == ""){
      Swal.fire(
         'Lo sentimos',
         'Por favor llene todos los campos.',
         'warning'
       )
   }
   else{
      if(contrasenareg != contrasenaconfirmreg){
         Swal.fire(
            'Lo sentimos',
            'Verifique la contraseña, no coincide',
            'warning'
          )
      }
      else{
         var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(emailreg) == false) {
            Swal.fire(
                'Lo sentimos',
                'La cuenta de correo no es valida, verifiquela nuevamente.',
                'warning'
            )
         }
         else{
            if(checkAviso == false){
               Swal.fire(
                  'Lo sentimos',
                  'Tiene que aceptar los términos y condiciones',
                  'warning'
              )
            }
            else{
               $.ajax({
                  type:"POST",
                  url:"../lib/registro-glama.php",
                  data:$("#formRegistro").serialize(),//only input
                  success: function(response){
                     console.log(response);
                     if (response == 'true'){
                     $('#formRegistro')[0].reset();
                     Swal.fire(
                        'Bienvenido',
                        'Su registro fue exitoso.',
                        'success'
                      ).then((result) => {
                        $(".overlay-pop-sesion").css("display","none");
                        $("#formRegistro").css("display","none");
                        $("#formInicioSesion").css("display","none");
                        location.reload();
                      })
                     }
                     else if(response == 'existUser'){
                        Swal.fire(
                           'Lo sentimos',
                           'Ya existe un usuario con este correo.',
                           'warning'
                         )
                     }
                  }
               });
            }
         }
      }
   }


});

$("#sendiniciosesion").click(function(){
   var emailsesion = $("#emailsesion").val();
   var contrasenasesion = $("#contrasenasesion").val();

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
            url:"../lib/checkLogin-glama.php",
            data:$("#formInicioSesion").serialize(),//only input
            success: function(response){
               console.log(response);
               if (response == 'true'){
               $('#formInicioSesion')[0].reset();
               Swal.fire(
                  'Bienvenido',
                  '',
                  'success'
                ).then((result) => {
                  $(".overlay-pop-sesion").css("display","none");
                  $("#formRegistro").css("display","none");
                  $("#formInicioSesion").css("display","none");
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

$("#sendrecupera").click(function(){
   var emailrecpera = $("#emailrecupera").val();
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
     if (reg.test(emailrecpera) == false || emailrecpera == "") {
         Swal.fire(
             'Lo sentimos',
             'La cuenta de correo no es valida, verifiquela nuevamente.',
             'warning'
         )
      }else{
         $.ajax({
            type:"POST",
            url:"../lib/forgotLoginData-Glama.php",
            data:$("#formRecupera").serialize(),//only input
            success: function(response){
               console.log(response);
               if (response == 'true'){
               $('#formRecupera')[0].reset();
               Swal.fire(
                  'Datos enviados',
                  'Hemos enviado los datos de acceso a su email',
                  'success'
                ).then((result) => {
                  $(".overlay-pop-sesion").css("display","none");
                  $("#formRegistro").css("display","none");
                  $("#formInicioSesion").css("display","none");
                  $("#formRecupera").css("display","none");
                })
               }else{
                  Swal.fire(
                     'Lo sentimos',
                     'No existen registros con el email proporcionado',
                     'warning'
                   )
               }
            }
         });
      }
});