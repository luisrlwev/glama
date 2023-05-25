$( ".btn-menu" ).click(function() {
   $(".nav-header").toggleClass("open-menu-movil");
   $(".submenu-conocenos").removeClass("view-submenu-conocenos");
   $("#conocenos").removeClass("visit-nav-item");
});

$( "#back-menu-submenu" ).click(function() {
   $(".submenu-conocenos").removeClass("view-submenu-conocenos");
   $("#conocenos").removeClass("visit-nav-item");
   $(".submenu-sostenibilidad").removeClass("view-submenu-sostenibilidad");
   $( "#sostenibilidad" ).removeClass("visit-nav-item");
});

$( "#conocenos" ).click(function() {
   $(".submenu-conocenos").addClass("view-submenu-conocenos");
   $( "#conocenos" ).addClass("visit-nav-item");
   $(".submenu-sostenibilidad").removeClass("view-submenu-sostenibilidad");
   $( "#sostenibilidad" ).removeClass("visit-nav-item");
});

$( "#conocenos2" ).click(function() {
   $(".submenu-conocenos").addClass("view-submenu-conocenos");
   $( "#conocenos" ).addClass("visit-nav-item");
   $(".submenu-sostenibilidad").removeClass("view-submenu-sostenibilidad");
   $( "#sostenibilidad" ).removeClass("visit-nav-item");
});

$( "#conocenos" ).mouseenter(function() {
   $(".submenu-conocenos").addClass("view-submenu-conocenos");
   $( "#conocenos" ).addClass("visit-nav-item");
   $(".submenu-sostenibilidad").removeClass("view-submenu-sostenibilidad");
   $( "#sostenibilidad" ).removeClass("visit-nav-item");
});

$( "#productos, #contacto" ).mouseenter(function() {
   $(".submenu-sostenibilidad").removeClass("view-submenu-sostenibilidad");
   $( "#sostenibilidad" ).removeClass("visit-nav-item");
   $(".submenu-conocenos").removeClass("view-submenu-conocenos");
   $( "#conocenos" ).removeClass("visit-nav-item");
});

$(".submenu-conocenos").mouseleave(function() {
   $(".submenu-conocenos").toggleClass("view-submenu-conocenos");
   $( "#conocenos" ).toggleClass("visit-nav-item");
});

$( "#sostenibilidad" ).click(function() {
   $(".submenu-sostenibilidad").addClass("view-submenu-sostenibilidad");
   $( "#sostenibilidad" ).addClass("visit-nav-item");
   $(".submenu-conocenos").removeClass("view-submenu-conocenos");
   $( "#conocenos" ).removeClass("visit-nav-item");
});

$( "#sostenibilidad2" ).click(function() {
   $(".submenu-sostenibilidad").addClass("view-submenu-sostenibilidad");
   $( "#sostenibilidad" ).addClass("visit-nav-item");
   $(".submenu-conocenos").removeClass("view-submenu-conocenos");
   $( "#conocenos" ).removeClass("visit-nav-item");
});

$( "#sostenibilidad" ).mouseenter(function() {
   $(".submenu-sostenibilidad").addClass("view-submenu-sostenibilidad");
   $( "#sostenibilidad" ).addClass("visit-nav-item");
   $(".submenu-conocenos").removeClass("view-submenu-conocenos");
   $( "#conocenos" ).removeClass("visit-nav-item");
});

$(".submenu-sostenibilidad").mouseleave(function() {
   $(".submenu-sostenibilidad").toggleClass("view-submenu-sostenibilidad");
   $( "#sostenibilidad" ).toggleClass("visit-nav-item");
});

/* BTNS SUBMENU CONOCENOS */
$( ".menu-conocenos-submenu li" ).click(function() {
   var seccionConocenos = $(this).attr('id');
   sessionStorage.setItem('seccionSelecUser', seccionConocenos);
   window.location.assign("https://www.glama.com.mx/conocenos.php");
});

$( ".menu-sostenibilidad-submenu li" ).click(function() {
   var seccionConocenos = $(this).attr('id');
   sessionStorage.setItem('seccionSelecUser', seccionConocenos);
   window.location.assign("https://www.glama.com.mx/sostenibilidad.php");
});

$(".ancla").click(function(evento){
   //Anulamos la funcionalidad por defecto del evento
   evento.preventDefault();
   //Creamos el string del enlace ancla
   var codigo = "#" + $(this).data("ancla");
   //Funcionalidad de scroll lento para el enlace ancla en 3 segundos
   $("html,body").animate({scrollTop: ($(codigo).offset().top)-115}, 600);
 });

 /* GALLERIA PRODUCTOS */
 $(".prevista").click(function(evento){
   var srcprevista = $(this).attr('src');
   var srcfull = $("#full-view").attr('src');
   $(this).attr('src', srcfull);
   $("#full-view").attr('src', srcprevista);
 });