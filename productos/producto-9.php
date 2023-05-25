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

    <meta name="description" content="Caja con tratamiento retardante de humedad manufactura de la lámina de cartón que contribuye a que la humedad no afecte rápidamente el empaque. ">
    <meta name="keywords" content="Caja con tratamiento retardante a la humedad, caja anti humedad, caja contra la humedad, caja para productos refrigerados, caja de carton para refrigeración">
    <meta name="author" content="Wise WSI Solutions">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/sweetalert2.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178975190-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-178975190-1');
    </script>
  </head>
  <body>
<?php include("../includes/header-int.php"); ?>
    <div class="container-fluid container-slider">
      <!-- INICIA SLIDER PRODUCTOS -->
      <div id="glamahomeslider" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active" id="imageheader-producto9">
            <div class="carousel-caption d-none d-md-block pt-0 text-caption-slider-productos">
              <h1 class="text-left mb-4">Protección, seguridad, resistencia</h1>
              <a href="#" class="ancla" data-ancla="cotizarform"><div class="btn-slider2">Cotizar ahora</div></a>
            </div>
          </div>
        </div>
      </div>
      <!-- TERMINA SLIDER PRODUCTOS -->
    </div>
    <!-- INICIA LISTA DE PRODUCTOS -->
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-6 cont-info-gallery-prod">
          <div class="container ">
            <div class="row d-md-block">
                <div class="col-md-8 float-md-right">
                        <img class="img-fluid img-thumbnail" src="../img/productos/producto9/item-1.jpg" alt="" id="full-view">
                </div>
                <div class="col-lg-4 col-md-4 col-6 pb-1 float-md-right thumb-gallery">
                  <img class="img-fluid img-thumbnail prevista" src="../img/productos/producto9/item-2.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-6 pb-1 float-md-right thumb-gallery">
                  <img class="img-fluid img-thumbnail prevista" src="../img/productos/producto9/item-3.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-4 col-6 pb-1 float-md-right thumb-gallery">
                  <img class="img-fluid img-thumbnail prevista" src="../img/productos/producto9/item-4.jpg" alt="">
                </div>
            </div>
          </div>
        </div>
        <div class="col-6 cont-info-gallery-prod">
          <div class="h-100 block-info-prod">
            <h4 class="title-name-producto">Caja con tratamiento retardante a la humedad</h4>
            <ul class="caracteristicas-producto">
              <li>Elaborada con papel 100% reciclado.</li>
              <li>Proceso en la manufactura de la lámina de cartón que contribuye a que la humedad no afecte rápidamente el empaque.</li>
              <li>Generalmente, este tipo de producto se utiliza para transportar y/o almacenar productos alimenticios que requieren refrigeración por un tiempo corto.</li>
              <li>Se fabrica a las necesidades y especificaciones del cliente, en cualquier tamaño y tipo de material e impresión.</li>
            </ul>
            <a href="#" class="ancla" data-ancla="cotizarform"><div class="btn-detalles-prod float-md-right mb-4">Cotizar ahora</div></a>
            <a href="../productos.php">
              <div class="btn-detalles-prod float-md-right mb-4 mr-2">< Ir a Productos</div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- TERMINA LISTA DE PRODUCTOS --> 
    <!-- INICIA AREA DE CONTACTO PRODUCTO -->
    <div class="container-fluid contenedor-zona-contacto" id="cotizarform">
      <div class="row">
        <div class="container pt-4 pb-4">
          <div class="row">
            <div class="col-md-9">
              <h5 class="title-white-zona-contacto">¿Necesitas más información?</h5>
              <h2 class="title-green-zona-contacto">Contáctanos ahora.</h2>
              <form id="formMoreInfoGlama">
                <div class="row">
                  <div class="col col2-contacto-zona">
                    <label class="label-form-zona-contacto">Nombre completo<sup>*</sup></label>
                    <input type="text" class="form-control input-zona-contacto" id="nombrefc" name="nombrefc" onkeypress="return /[a-z A-Z]/i.test(event.key)">
                    <label class="label-form-zona-contacto">Empresa u organización<sup>*</sup></label>
                    <input type="text" class="form-control input-zona-contacto" id="empresafc" name="empresafc" onkeypress="return /[a-z A-Z]/i.test(event.key)">
                    <label class="label-form-zona-contacto">Correo electrónico<sup>*</sup></label>
                    <input type="text" class="form-control input-zona-contacto" id="emailfc" name="emailfc">
                  </div>
                  <div class="col col2-contacto-zona">
                    <label class="label-form-zona-contacto">Teléfono</label>
                    <input type="text" class="form-control input-zona-contacto" id="telefonofc" name="telefonofc" onkeypress="return /[0-9]/i.test(event.key)">
                    <label class="label-form-zona-contacto">Producto de interés</label>
                    <input type="text" class="form-control input-zona-contacto" id="productofc" name="productofc">
                    <label class="label-form-zona-contacto">País<sup>*</sup></label>
                    <input type="text" class="form-control input-zona-contacto" id="paisfc" name="paisfc" onkeypress="return /[a-z A-Z]/i.test(event.key)">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="label-form-zona-contacto">Mensaje</label>
                    <textarea class="form-control textarea-zona-contacto" id="mensajefc" name="mensajefc"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-1">
                    <input class="form-control check-zona-contacto" type="checkbox" id="aceptopromosfc" name="aceptopromosfc">
                  </div>
                  <div class="col-11">
                    <p class="legales-form">
                      Sí, me gustaría recibir actualizaciones sobre las marcas, productos y servicios de Productos Glama. Puede darse de baja en cualquier momento utilizando el vínculo que aparece en los correos electrónicos que reciba.
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-1">
                    <input class="form-control check-zona-contacto" type="checkbox" id="aceptoavisofc" name="aceptoavisofc">
                  </div>
                  <div class="col-11">
                    <p class="legales-form">
                      Confirmo que leí y acepté el contenido de la declaración de privacidad. Tiene el derecho de objetar, en cualquier momento, sobre el procesamiento y tratamiento de sus datos personales para propósitos de mercadeo directo contactándonos.
                    </p>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-3">
              <div class="row align-items-end h-100">
                <input type="button" class="btn btn-enviar-msg" value="Enviar mensaje">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- TERMINA AREA DE CONTACTO PRODUCTO -->
<?php include("../includes/footer-int.php"); ?>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="../js/sweetalert2.min.js"></script>
    <script src="../js/sesion-reg-int.js"></script>
  </body>
</html>