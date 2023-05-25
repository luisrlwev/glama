<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es_MX">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Productos Glama, S.A. de C.V.</title>

    <meta name="description" content="Empresa mexicana dedicada a la fabricación de empaque y embalaje para todos los sectores del mercado, mediante procesos innovadores y circulares.">
    <meta name="keywords" content="Empaque, embalaje, cartón, productos Glama, Glama, panel honeycomb, caja con divisiones, caja con separadores, caja exhibidora, caja troquelada, cartón corrugado">
    <meta name="author" content="Wise WSI Solutions">

    <link rel="icon" type="image/png" href="img/logo.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178975190-1"></script>
  </head>
  <body>
    <?php include ('includes/header.php'); ?>
    <div class="container-fluid container-slider">
      <!-- INICIA SLIDER HOME -->
      <div id="glamahomeslider" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active" id="slide1">
            <div class="carousel-caption d-none d-md-block pt-0">
              <p class="text-left mb-0">Máxima resistencia y durabilidad</p>
              <h1 class="text-left mb-4">HONEYCOMB</h1>
              <a href="productos/producto-13.php">
                <div class="btn-slider">Conocer más</div>
            </a>
            </div>
          </div>
          <div class="carousel-item" id="slide2">
            <div class="carousel-caption d-none d-md-block pt-0">
              <p class="text-left mb-0">La solución más versátil y rentable</p>
              <h1 class="text-left mb-4">CAJA<br>REGULAR RANURADA</h1>
              <a href="productos/producto-1.php">
                <div class="btn-slider">Conocer más</div>
            </a>
            </div>
          </div>
          <div class="carousel-item" id="slide3" style="background-image: url(../img/home/slider/sld-03-1.jpg);">
            <div class="carousel-caption d-none d-md-block pt-0">
              <p class="text-left mb-0">Análisis de la industria</p>
              <h1 class="text-left mb-4">CONSIDERACIONES PARA<br>LA ENTREGA DE ALIMENTOS<br>Y COMIDA</h1>
              <a href="pdf/20201123alimentosenmexico.pdf" target="_blank">
                <div class="btn-slider">Conocer más</div>
            </a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#glamahomeslider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#glamahomeslider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- TERMINA SLIDER HOME -->
    </div>
    <!-- INICIA PRODUCTOS -->
    <div class="container pt-5 pb-5" id="ServiciosProductos">
      <h1 class="title">Productos</h1>
      <p class="subtitle">Soluciones de empaque y embalaje diseñadas para cumplir con las expectativas y necesidades reales de tu organización.</p>
      <div class="container mt-5 mb-4">
        <div class="row cont-sector-5more" id="prod-home-default">
            <div class="col item-productos">
              <a href="productos/producto-13.php">
                <p class="caption-prod">Panel<br>Honeycomb</p>
                <img src="img/home/productos/prod-1.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-2.php">
                <p class="caption-prod">Caja con divisiones<br> y separadores</p>
                <img src="img/home/productos/prod-2.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-8.php">
                <p class="caption-prod">Charola exhibidora<br>para producto</p>
                <img src="img/home/productos/prod-3.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-3.php">
                <p class="caption-prod">Caja con papeles<br>blancos</p>
                <img src="img/home/productos/prod-4.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-11.php">
                <p class="caption-prod">Caja<br>troquelada</p>
                <img src="img/home/productos/prod-5.jpg" class="w-100">
              </a>
            </div>
        </div>
        <div class="row cont-sector-5more" id="prod-home-sect1">
            <div class="col item-productos">
              <a href="productos/producto-2.php">
                <p class="caption-prod">Caja con divisiones<br> y separadores</p>
                <img src="img/home/productos/sect1/prod-1.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-5.php">
                <p class="caption-prod">Caja<br>para exportación</p>
                <img src="img/home/productos/sect1/prod-2.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-7.php">
                <p class="caption-prod">Caja en doble<br>corrugado</p>
                <img src="img/home/productos/sect1/prod-3.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-11.php">
                <p class="caption-prod">Caja<br>troquelada</p>
                <img src="img/home/productos/sect1/prod-4.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-20.php">
                <p class="caption-prod">Tarima<br>honeycomb</p>
                <img src="img/home/productos/sect1/prod-5.jpg" class="w-100">
              </a>
            </div>
        </div>
        <div class="row cont-sector-5more" id="prod-home-sect2">
            <div class="col item-productos">
              <a href="productos/producto-1.php">
                <p class="caption-prod">Caja regular<br>ranurada</p>
                <img src="img/home/productos/sect2/prod-1.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-6.php">
                <p class="caption-prod">Caja en corrugado<br>sencillo</p>
                <img src="img/home/productos/sect2/prod-2.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-11.php">
                <p class="caption-prod">Caja<br>troquelada</p>
                <img src="img/home/productos/sect2/prod-3.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-13.php">
                <p class="caption-prod">Panel<br>honeycomb</p>
                <img src="img/home/productos/sect2/prod-4.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-20.php">
                <p class="caption-prod">Tarima<br>honeycomb</p>
                <img src="img/home/productos/sect2/prod-5.jpg" class="w-100">
              </a>
            </div>
        </div>
        <div class="row cont-sector-5more" id="prod-home-sect3">
            <div class="col item-productos">
              <a href="productos/producto-1.php">
                <p class="caption-prod">Caja regular<br>ranurada</p>
                <img src="img/home/productos/sect3/prod-1.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-3.php">
                <p class="caption-prod">Caja con papeles<br>blancos</p>
                <img src="img/home/productos/sect3/prod-2.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-10.php">
                <p class="caption-prod">Charola en corrugado<br>sencillo</p>
                <img src="img/home/productos/sect3/prod-3.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-17.php">
                <p class="caption-prod">Empaque con cartón<br>caple</p>
                <img src="img/home/productos/sect3/prod-4.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-19.php">
                <p class="caption-prod">Caja con micro<br>corrugado (flauta E y B)</p>
                <img src="img/home/productos/sect3/prod-5.jpg" class="w-100">
              </a>
            </div>
        </div>
        <div class="row cont-sector-5more" id="prod-home-sect4">
            <div class="col item-productos">
              <a href="productos/producto-1.php">
                <p class="caption-prod">Caja regular<br>ranurada</p>
                <img src="img/home/productos/sect4/prod-1.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-2.php">
                <p class="caption-prod">Caja con divisiones<br>y separadores</p>
                <img src="img/home/productos/sect4/prod-2.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-6.php">
                <p class="caption-prod">Caja en corrugado<br>sencillo</p>
                <img src="img/home/productos/sect4/prod-3.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-17.php">
                <p class="caption-prod">Empaque con cartón<br>caple</p>
                <img src="img/home/productos/sect4/prod-4.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-19.php">
                <p class="caption-prod">Caja con micro<br>corrugado (flauta E y B)</p>
                <img src="img/home/productos/sect4/prod-5.jpg" class="w-100">
              </a>
            </div>
        </div>
        <div class="row cont-sector-5more" id="prod-home-sect5">
            <div class="col item-productos">
              <a href="productos/producto-1.php">
                <p class="caption-prod">Caja regular<br>ranurada</p>
                <img src="img/home/productos/sect5/prod-1.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-2.php">
                <p class="caption-prod">Caja con divisiones<br>y separadores</p>
                <img src="img/home/productos/sect5/prod-2.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-3.php">
                <p class="caption-prod">Caja con papeles<br>blancos</p>
                <img src="img/home/productos/sect5/prod-3.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-17.php">
                <p class="caption-prod">Empaque con cartón<br>caple</p>
                <img src="img/home/productos/sect5/prod-4.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-18.php">
                <p class="caption-prod">Empalmado</p>
                <img src="img/home/productos/sect5/prod-5.jpg" class="w-100">
              </a>
            </div>
        </div>
        <div class="row cont-sector-5more" id="prod-home-sect6">
            <div class="col item-productos">
              <a href="productos/producto-3.php">
                <p class="caption-prod">Caja con papeles<br>blancos</p>
                <img src="img/home/productos/sect6/prod-1.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-8.php">
                <p class="caption-prod">Charola exhibidora<br>para producto</p>
                <img src="img/home/productos/sect6/prod-2.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-11.php">
                <p class="caption-prod">Caja<br>troquelada</p>
                <img src="img/home/productos/sect6/prod-3.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-17.php">
                <p class="caption-prod">Empaque con cartón<br>caple</p>
                <img src="img/home/productos/sect6/prod-4.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-18.php">
                <p class="caption-prod">Empalmado</p>
                <img src="img/home/productos/sect6/prod-5.jpg" class="w-100">
              </a>
            </div>
        </div>
        <div class="row cont-sector-5more" id="prod-home-sect7">
            <div class="col item-productos">
              <a href="productos/producto-1.php">
                <p class="caption-prod">Caja regular<br>ranurada</p>
                <img src="img/home/productos/sect7/prod-1.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-2.php">
                <p class="caption-prod">Caja con divisiones<br>y separadores</p>
                <img src="img/home/productos/sect7/prod-2.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-8.php">
                <p class="caption-prod">Charola exhibidora<br>para producto</p>
                <img src="img/home/productos/sect7/prod-3.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-9.php">
                <p class="caption-prod">Caja con tratamiento retardante<br>a la humedad</p>
                <img src="img/home/productos/sect7/prod-4.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-20.php">
                <p class="caption-prod">Tarima<br>honeycomb</p>
                <img src="img/home/productos/sect7/prod-5.jpg" class="w-100">
              </a>
            </div>
        </div>
        <div class="row cont-sector-5more" id="prod-home-sect8">
            <div class="col item-productos">
              <a href="productos/producto-3.php">
                <p class="caption-prod">Caja con papeles<br>blancos</p>
                <img src="img/home/productos/sect8/prod-1.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-.php">
                <p class="caption-prod">Caja grapada<br>o pegada</p>
                <img src="img/home/productos/sect8/prod-2.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-4.php">
                <p class="caption-prod">Caja con tratamiento retardante<br>a la humedad</p>
                <img src="img/home/productos/sect8/prod-3.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-9.php">
                <p class="caption-prod">Caja<br>troquelada</p>
                <img src="img/home/productos/sect8/prod-4.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-11.php">
                <p class="caption-prod">Caja<br>con ventilación</p>
                <img src="img/home/productos/sect8/prod-5.jpg" class="w-100">
              </a>
            </div>
        </div>
        <div class="row cont-sector-5more" id="prod-home-sect9">
            <div class="col item-productos">
              <a href="productos/producto-12.php">
                <p class="caption-prod">Caja regular<br>ranurada</p>
                <img src="img/home/productos/sect9/prod-1.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-1.php">
                <p class="caption-prod">Caja grapada<br>o pegada</p>
                <img src="img/home/productos/sect9/prod-2.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-4.php">
                <p class="caption-prod">Panel<br>honeycomb</p>
                <img src="img/home/productos/sect9/prod-3.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-13.php">
                <p class="caption-prod">Esquinero</p>
                <img src="img/home/productos/sect9/prod-4.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-14.php">
                <p class="caption-prod">Tarima<br>honeycomb</p>
                <img src="img/home/productos/sect9/prod-5.jpg" class="w-100">
              </a>
            </div>
        </div>
        <div class="row cont-sector-5more" id="prod-home-sect10">
            <div class="col item-productos">
              <a href="productos/producto-20.php">
                <p class="caption-prod">Caja regular<br>ranurada</p>
                <img src="img/home/productos/sect10/prod-1.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-2.php">
                <p class="caption-prod">Caja con divisiones<br>y separadores</p>
                <img src="img/home/productos/sect10/prod-2.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-6.php">
                <p class="caption-prod">Caja en corrugado<br>sencillo</p>
                <img src="img/home/productos/sect10/prod-3.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-7.php">
                <p class="caption-prod">Caja en doble<br>corrugado</p>
                <img src="img/home/productos/sect10/prod-4.jpg" class="w-100">
              </a>
            </div>
            <div class="col item-productos">
              <a href="productos/producto-19.php">
                <p class="caption-prod">Caja con micro<br>corrugado (flauta E y B)</p>
                <img src="img/home/productos/sect10/prod-5.jpg" class="w-100">
              </a>
            </div>
        </div>
        <div class="row mt-4 mb-5">
            <div class="col-5 cont-select-ps">
                <div class="select-prod-serv" id="sectores-select">
                  <ul class="lista-sectores">
                    <li data-sector="Automotriz">Automotríz</li>
                    <li data-sector="Textil">Textil</li>
                    <li data-sector="Consumo">Consumo de bienes</li>
                    <li data-sector="Electronicos">Electrónicos</li>
                    <li data-sector="Farmaceutico">Farmacéutico</li>
                    <li data-sector="Salud">Salud y belleza</li>
                    <li data-sector="Quimicos">Químicos</li>
                    <li data-sector="Alimentos">Alimentos y bebidas</li>
                    <li data-sector="Industrial">Industrial</li>
                    <li data-sector="Comercio">Comercio electrónico</li>
                  </ul>
                  Sectores del mercado
                  <img src="img/home/productos/triangle.svg" class="arrow-select-ps" id="arrow-sectores">
                </div>
            </div>
            <div class="col-5 cont-select-ps">
              <div class="select-prod-serv"  id="productos-select">
                <ul class="lista-productos">
                  <li><a href="productos/producto-1.php">Caja regular ranurada</a></li>
                  <li><a href="productos/producto-2.php">Caja con divisiones y separadores</a></li>
                  <li><a href="productos/producto-3.php">Caja con papeles blancos</a></li>
                  <li><a href="productos/producto-4.php">Caja grapada o pegada</a></li>
                  <li><a href="productos/producto-5.php">Caja para exportación</a></li>
                  <li><a href="productos/producto-6.php">Caja en corrugado sencillo</a></li>
                  <li><a href="productos/producto-7.php">Caja en doble corrugado</a></li>
                  <li><a href="productos/producto-8.php">Charola exhibidora para producto</a></li>
                  <li><a href="productos/producto-9.php">Caja con tratamiento retardante a la humedad</a></li>
                  <li><a href="productos/producto-10.php">Charola en corrugado sencillo</a></li>
                  <li><a href="productos/producto-11.php">Caja troquelada</a></li>
                  <li><a href="productos/producto-12.php">Caja con ventilación</a></li>
                  <li><a href="productos/producto-13.php">Panel honeycomb</a></li>
                  <li><a href="productos/producto-14.php">Esquinero</a></li>
                  <li><a href="productos/producto-15.php">Charola de huevo</a></li>
                  <li><a href="productos/producto-16.php">Caja de archivo</a></li>
                  <li><a href="productos/producto-17.php">Empaque con cartón caple</a></li>
                  <li><a href="productos/producto-18.php">Empalmado</a></li>
                  <li><a href="productos/producto-19.php">Caja con micro corrugado (flauta E y B)</a></li>
                  <li><a href="productos/producto-20.php">Tarima honeycomb</a></li>
                </ul>
                Productos
                <img src="img/home/productos/triangle.svg" class="arrow-select-ps" id="arrow-productos">
              </div>
            </div>
            <div class="col-2 cont-btn-ps">
              <a href="productos.php">
                <div class="btn-vertodas"> Ver todas</div>
              </a>
            </div>
        </div>
      </div>
    </div>
    <!-- TERMINA PRODUCTOS -->
    <!-- INICIA EXPERIENCIA Y LOGROS -->
    <div class="container-fluid pt-5 pb-5" id="ExperienciaLogros">
    <div class="overlay-video"></div>
    <video id="video" preload autoplay muted playsinline loop>
    <source src="img/home/experiencia-logros/bg.mp4" type="video/mp4"></source>
    </video> 
      <div class="container pt-3 pb-3 cont-logros">
        <h1 class="title-exp mb-2">Experiencia y<br>logros alcanzados</h1>
        <div class="row mt-5">
          <div class="col item-exp-logros">
            <p  class="green-title-exp">Papel reciclado</p>
            <img src="img/home/experiencia-logros/icon1.svg" class="icon-exp">
            <br>
            <p></p>
            <span class="green-title-exp">150 mil</span>
            <br>
            toneladas de<br>papel reciclado<br>anualmente
          </div>
          <div class="col item-exp-logros">
            <p  class="green-title-exp">Cartón corrugado</p>
            <img src="img/home/experiencia-logros/icon2.svg" class="icon-exp">
            <br>
            <span class="green-title-exp">72,000</span>
            <br>
            toneladas fabricadas<br>cada año
          </div>
          <div class="col item-exp-logros">
            <p  class="green-title-exp">Empaque</p>
            <img src="img/home/experiencia-logros/icon3.svg" class="icon-exp">
            <br>
            <span class="green-title-exp">200 millones</span>
            <br>
            de piezas fabricadas<br>anualmente
          </div>
          <div class="col item-exp-logros">
            <p  class="green-title-exp">Procesos circulares</p>
            <img src="img/home/experiencia-logros/icon4.svg" class="icon-exp">
            <br>
            tratamiento de aguas<br>y generación de energías limpias<br>durante procesos de fabricación<br>de sus productos
          </div>
        </div>
      </div>
    </div>
    <!-- TERMINA EXPERIENCIA Y LOGROS -->
    <!-- INICIA CONECTATE A NUESTRA REDES SOCIALEAS -->
    <div class="container pt-5 pb-5" id="ConectateRedesSociales">
      <h1 class="title">Conéctate a nuestras redes sociales</h1>
      <p class="subtitle">Conoce lanzamientos de productos nuevos, entrevistas y análisis de la industria.</p>
      <div class="conatiner mt-5">
        <div class="row justify-content-center">
          <div class="col item-rs mb-4">
            <a href="https://www.linkedin.com/company/productos-glama/" target="_blank">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="img/home/redes-sociales/item-1.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">LinkedIn</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col item-rs mb-4">
            <a href="https://www.facebook.com/productosglama" target="_blank">
              <div class="card" style="width: 18rem;">
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fproductosglama%2F&tabs=timeline&width=340&height=150&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId=1214221415366486" width="100%" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                <div class="card-body">
                  <p class="card-text">Facebook</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col item-rs mb-4">
            <a href="https://www.youtube.com/channel/UCHUObKTim84bZz_qcanryuw" target="_blank">
              <div class="card" style="width: 18rem;">
              <iframe width="100%" height="150" src="https://www.youtube.com/embed/lFTx-Xt35W0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                  <p class="card-text">Youtube</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- TERMINA CONECTATE A NUESTRA REDES SOCIALEAS -->
    <?php include('includes/footer.php'); ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/scripts-home.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/sesion-reg.js"></script>
  </body>
</html>