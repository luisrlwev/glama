// FUNCIONES PARA LLEGADA DE OTRA LANDING
if (sessionStorage.getItem('seccionSelecUser')){
    var seccionSelect = sessionStorage.getItem('seccionSelecUser');
    switch (seccionSelect) {
        case 'sustentabilidad':
            //QUITAMOS BOTÓN EN ACTIVADO
            $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
            //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
            $("#item-1").addClass("active-item-menu-izq-cono");
            //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
            $(".img-info-conocenos").removeClass("image-header-s-item1 image-header-s-item2");
            //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
            $(".img-info-conocenos").addClass("image-header-s-item1");
            $(".text-header-image").html("reinventar,<br>innovación,<br>cuidar.");
            //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
            $(".infotxt-conocenos").removeClass("forced-view");
            $("#info-sustentabilidad").addClass("forced-view");
          break;
        case 'metas':
            //QUITAMOS BOTÓN EN ACTIVADO
            $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
            //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
            $("#item-2").addClass("active-item-menu-izq-cono");
            //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
            $(".img-info-conocenos").removeClass("image-header-s-item1 image-header-s-item2");
            //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
            $(".img-info-conocenos").addClass("image-header-s-item2");
            $(".text-header-image").html("Crear valor sostenible<br>de largo plazo.");
            //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
            $(".infotxt-conocenos").removeClass("forced-view");
            $("#info-metas").addClass("forced-view");
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
      $(".img-info-conocenos").removeClass("image-header-s-item1 image-header-s-item2");
      //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
      $(".img-info-conocenos").addClass("image-header-s-item1");
      //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
      $(".infotxt-conocenos").removeClass("forced-view");
      $("#info-sustentabilidad").addClass("forced-view");

      
      
  }

//FUNCIONES CLICK EN ITEMS MENU
$( "#item-1" ).click(function() {
    //QUITAMOS BOTÓN EN ACTIVADO
    $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
    //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
    $("#item-1").addClass("active-item-menu-izq-cono");
    //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
    $(".img-info-conocenos").removeClass("image-header-s-item1 image-header-s-item2");
    //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
    $(".img-info-conocenos").addClass("image-header-s-item1");
    $(".text-header-image").html("reinventar,<br>innovación,<br>cuidar.");
    //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
    $(".infotxt-conocenos").removeClass("forced-view");
    $("#info-sustentabilidad").addClass("forced-view");
    sessionStorage.setItem('seccionSelecUser', 'sustentabilidad');
});
$( "#item-2" ).click(function() {
    //QUITAMOS BOTÓN EN ACTIVADO
    $(".menu-nav-izq-conocenos li").removeClass("active-item-menu-izq-cono");
    //PONEMOS EL PRIMER BOTÓN EN ACTIVADO
    $("#item-2").addClass("active-item-menu-izq-cono");
    //QUITAMOS ALGUNA OTRA IMAGEN CARGADA EN EL IMAGE HEADER
    $(".img-info-conocenos").removeClass("image-header-s-item1 image-header-s-item2");
    //AGREGAMOS CLASE DE VISTO A PRIMER ITEM
    $(".img-info-conocenos").addClass("image-header-s-item2");
    $(".text-header-image").html("Crear valor sostenible<br>de largo plazo.");
    //MOSTRAMOS LA INFORMACIÓN DE LA PRIMERA SECCIÓN
    $(".infotxt-conocenos").removeClass("forced-view");
    $("#info-metas").addClass("forced-view");
    sessionStorage.setItem('seccionSelecUser', 'metas');
});
