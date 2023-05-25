// FUNCIONES PARA LLEGADA DE OTRA LANDING
if (sessionStorage.getItem('seccionSelecUser')){
    var seccionSelect = sessionStorage.getItem('seccionSelecUser');
    switch (seccionSelect) {
        case 'quehacemos':
            //QUITAMOS BOTÓN EN ACTIVADO
            $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
            //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
            $("#item-1").addClass("active-item-menu-izq-cono");
            //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
            $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
            //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
            $(".img-info-conocenos").addClass("image-header-item1");
            $(".text-header-image").html("sustenibilidad.<br>innovación.<br>calidad.");
            //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
            $(".infotxt-conocenos").removeClass("forced-view");
            $("#info-quehacemos").addClass("forced-view");
          break;
        case 'trayectoria':
            //QUITAMOS BOTÓN EN ACTIVADO
            $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
            //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
            $("#item-2").addClass("active-item-menu-izq-cono");
            //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
            $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
            //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
            $(".img-info-conocenos").addClass("image-header-item2");
            $(".text-header-image").html("Experiencia<br>de clase mundial.");
            //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
            $(".infotxt-conocenos").removeClass("forced-view");
            $("#info-trayectoria").addClass("forced-view");
          break;
        case 'vision':
            //QUITAMOS BOTÓN EN ACTIVADO
            $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
            //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
            $("#item-3").addClass("active-item-menu-izq-cono");
            //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
            $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
            //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
            $(".img-info-conocenos").addClass("image-header-item3");
            $(".text-header-image").html("Calidad.<br>Compromiso.<br>Satisfacción total.");
            //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
            $(".infotxt-conocenos").removeClass("forced-view");
            $("#info-vision").addClass("forced-view");
          break;
        case 'dondeestamos':
            //QUITAMOS BOTÓN EN ACTIVADO
            $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
            //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
            $("#item-4").addClass("active-item-menu-izq-cono");
            //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
            $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
            //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
            $(".img-info-conocenos").addClass("image-header-item4");
            $(".text-header-image").html("Conexión<br>estratégica<br>con la demanda.");
            //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
            $(".infotxt-conocenos").removeClass("forced-view");
            $("#info-dondestamos").addClass("forced-view");
          break;
        case 'nuestragente':
            //QUITAMOS BOTÓN EN ACTIVADO
            $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
            //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
            $("#item-5").addClass("active-item-menu-izq-cono");
            //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
            $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
            //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
            $(".img-info-conocenos").addClass("image-header-item5");
            $(".text-header-image").html("Talento nacional,<br>experiencia<br>de primer mundo.");
            //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
            $(".infotxt-conocenos").removeClass("forced-view");
            $("#info-nuestragente").addClass("forced-view");
          break;
        case 'cetificaciones':
            //QUITAMOS BOTÓN EN ACTIVADO
            $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
            //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
            $("#item-6").addClass("active-item-menu-izq-cono");
            //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
            $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
            //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
            $(".img-info-conocenos").addClass("image-header-item6");
            $(".text-header-image").html("Sostenibilidad,<br>innovación,<br>calidad.");
            //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
            $(".infotxt-conocenos").removeClass("forced-view");
            $("#info-certificaciones").addClass("forced-view");
          break;
        case 'filiales':
            //QUITAMOS BOTÓN EN ACTIVADO
            $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
            //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
            $("#item-7").addClass("active-item-menu-izq-cono");
            //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
            $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
            //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
            $(".img-info-conocenos").addClass("image-header-item7");
            $(".text-header-image").html("Soluciones 360º.");
            //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
            $(".infotxt-conocenos").removeClass("forced-view");
            $("#info-filiales").addClass("forced-view");
          break;  
        case 'analisis':
            //QUITAMOS BOTÓN EN ACTIVADO
            $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
            //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
            $("#item-8").addClass("active-item-menu-izq-cono");
            //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
            $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
            //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
            $(".img-info-conocenos").addClass("image-header-item8");
            $(".text-header-image").html("Impulsar<br>negocios correctamente.");
            //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
            $(".infotxt-conocenos").removeClass("forced-view");
            $("#info-analisis").addClass("forced-view");
          break;    
      }
  }
  else{
      //SI NO HAY NINGUN TEMA SELECCIONADO PONEMOS POR DEFAULT EL PRIMERO
      //QUITAMOS BOTÓN EN ACTIVADO
      $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
      //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
      $("#item-1").addClass("active-item-menu-izq-cono");
      //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
      $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
      //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
      $(".img-info-conocenos").addClass("image-header-item1");
      //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
      $(".infotxt-conocenos").removeClass("forced-view");
      $("#info-quehacemos").addClass("forced-view");

      
      
  }

//FUNCIONES CLICK EN ITEMS MENU
$( "#item-1" ).click(function() {
    //QUITAMOS BOTÓN EN ACTIVADO
    $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
    //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
    $("#item-1").addClass("active-item-menu-izq-cono");
    //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
    $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
    //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
    $(".img-info-conocenos").addClass("image-header-item1");
    $(".text-header-image").html("sustenibilidad,<br>innovación,<br>calidad.");
    //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
    $(".infotxt-conocenos").removeClass("forced-view");
    $("#info-quehacemos").addClass("forced-view");
    sessionStorage.setItem('seccionSelecUser', 'quehacemos');
});
$( "#item-2" ).click(function() {
    //QUITAMOS BOTÓN EN ACTIVADO
    $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
    //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
    $("#item-2").addClass("active-item-menu-izq-cono");
    //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
    $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
    //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
    $(".img-info-conocenos").addClass("image-header-item2");
    $(".text-header-image").html("experiencia<br>de clase mundial.");
    //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
    $(".infotxt-conocenos").removeClass("forced-view");
    $("#info-trayectoria").addClass("forced-view");
    sessionStorage.setItem('seccionSelecUser', 'trayectoria');
});

$( "#item-3" ).click(function() {
    //QUITAMOS BOTÓN EN ACTIVADO
    $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
    //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
    $("#item-3").addClass("active-item-menu-izq-cono");
    //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
    $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
    //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
    $(".img-info-conocenos").addClass("image-header-item3");
    $(".text-header-image").html("Calidad.<br>compromiso.<br>Satisfacción total.");
    //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
    $(".infotxt-conocenos").removeClass("forced-view");
    $("#info-vision").addClass("forced-view");
    sessionStorage.setItem('seccionSelecUser', 'vision');
});

$( "#item-4" ).click(function() {
    //QUITAMOS BOTÓN EN ACTIVADO
    $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
    //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
    $("#item-4").addClass("active-item-menu-izq-cono");
    //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
    $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
    //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
    $(".img-info-conocenos").addClass("image-header-item4");
    $(".text-header-image").html("Conexión<br>estratégica<br>con la demanda.");
    //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
    $(".infotxt-conocenos").removeClass("forced-view");
    $("#info-dondestamos").addClass("forced-view");
    sessionStorage.setItem('seccionSelecUser', 'dondeestamos');
});

$( "#item-5" ).click(function() {
    //QUITAMOS BOTÓN EN ACTIVADO
    $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
    //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
    $("#item-5").addClass("active-item-menu-izq-cono");
    //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
    $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
    //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
    $(".img-info-conocenos").addClass("image-header-item5");
    $(".text-header-image").html("Talento nacional,<br>experiencia<br>de primer mundo.");
    //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
    $(".infotxt-conocenos").removeClass("forced-view");
    $("#info-nuestragente").addClass("forced-view");
    sessionStorage.setItem('seccionSelecUser', 'nuestragente');
});

$( "#item-6" ).click(function() {
    //QUITAMOS BOTÓN EN ACTIVADO
    $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
    //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
    $("#item-6").addClass("active-item-menu-izq-cono");
    //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
    $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
    //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
    $(".img-info-conocenos").addClass("image-header-item6");
     $(".text-header-image").html("Sostenibilidad,<br>innovación,<br>calidad.");
    //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
    $(".infotxt-conocenos").removeClass("forced-view");
    $("#info-certificaciones").addClass("forced-view");
    sessionStorage.setItem('seccionSelecUser', 'cetificaciones');
});

$( "#item-7" ).click(function() {
    //QUITAMOS BOTÓN EN ACTIVADO
    $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
    //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
    $("#item-7").addClass("active-item-menu-izq-cono");
    //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
    $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
    //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
    $(".img-info-conocenos").addClass("image-header-item7");
    $(".text-header-image").html("Soluciones 360º.");
    //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
    $(".infotxt-conocenos").removeClass("forced-view");
    $("#info-filiales").addClass("forced-view");
    sessionStorage.setItem('seccionSelecUser', 'filiales');
});  

$( "#item-8" ).click(function() {
    //QUITAMOS BOTÓN EN ACTIVADO
    $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
    //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
    $("#item-8").addClass("active-item-menu-izq-cono");
    //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
    $(".img-info-conocenos").removeClass("image-header-item1 image-header-item2 image-header-item3 image-header-item4 image-header-item5 image-header-item6 image-header-item7 image-header-item8");
    //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
    $(".img-info-conocenos").addClass("image-header-item8");
    $(".text-header-image").html("Impulsar<br>negocios correctamente.");
    //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
    $(".infotxt-conocenos").removeClass("forced-view");
    $("#info-analisis").addClass("forced-view");
    sessionStorage.setItem('seccionSelecUser', 'analisis');
});   