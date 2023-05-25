var images = new Array()
function preload() {
  for (i = 0; i < preload.arguments.length; i++) {
    images[i] = new Image()
    images[i].src = preload.arguments[i]
  }
}
preload(
  "img/home/slider/sld-01.jpg",
  "img/home/slider/sld-02.jpg",
  "img/home/slider/sld-03.jpg"
)

$( "#sectores-select" ).click(function() {
    $(".lista-sectores").toggleClass("open-sectores");
    $("#arrow-sectores").toggleClass("rotate-arrow");
 });

$( "#sectores-select li" ).click(function() {
   var sectorclick = $(this).attr("data-sector");

   switch (sectorclick) {
      case 'Automotriz':
        $(".cont-sector-5more").css("display","none");
        $("#prod-home-sect1").css("display","flex");
        break;
      case 'Textil':
        $(".cont-sector-5more").css("display","none");
        $("#prod-home-sect2").css("display","flex");
        break;
      case 'Consumo':
        $(".cont-sector-5more").css("display","none");
        $("#prod-home-sect3").css("display","flex");
        break;
      case 'Electronicos':
        $(".cont-sector-5more").css("display","none");
        $("#prod-home-sect4").css("display","flex");
        break;
      case 'Farmaceutico':
        $(".cont-sector-5more").css("display","none");
        $("#prod-home-sect5").css("display","flex");
        break;
      case 'Salud':
        $(".cont-sector-5more").css("display","none");
        $("#prod-home-sect6").css("display","flex");
        break;
      case 'Quimicos':
        $(".cont-sector-5more").css("display","none");
        $("#prod-home-sect7").css("display","flex");
        break;
      case 'Alimentos':
        $(".cont-sector-5more").css("display","none");
        $("#prod-home-sect8").css("display","flex");
        break;
      case 'Industrial':
        $(".cont-sector-5more").css("display","none");
        $("#prod-home-sect9").css("display","flex");
        break;
      case 'Comercio':
        $(".cont-sector-5more").css("display","none");
        $("#prod-home-sect10").css("display","flex");
    }
 });
 
 $( "#productos-select" ).click(function() {
    $(".lista-productos").toggleClass("open-productos");
    $("#arrow-productos").toggleClass("rotate-arrow");
 });