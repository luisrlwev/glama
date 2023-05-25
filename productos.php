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

    <meta name="description" content="Soluciones de empaque y embalaje diseñadas para cumplir con las expectativas y necesidades reales de tu organización.">
    <meta name="keywords" content="Empaque, embalaje, fabricación, cartón, Productos Glama, Glama, caja de cartón, caja regular ranurada, caja con divisiones, caja con separadores, caja grapada, caja pegada, caja para exportación, caja en corrugado sencillo, caja doble corrugado, charola exhibidora de carton, caja contra humedad, charola en corrugado sencillo, caja troquelada, caja de carton con ventilación, panel honeycomb, esquinero, charola de huevo, caja de huevo, caja de ahorro, empaque con carton cape, empalmado, caja micro corrugado, caja microcorrugado, tarima honeycomb">
    <meta name="author" content="Wise WSI Solutions">
    
    <link rel="icon" type="image/png" href="img/logo.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css" rel="stylesheet">
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
    <?php include ('includes/header.php'); ?>
    <div class="container-fluid container-slider header-img-carrousel">
      <!-- INICIA SLIDER PRODUCTOS -->
      <div id="glamahomeslider" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner">
          <div class="carousel-item active" id="imageheader-productos">
            <div class="carousel-caption d-none d-md-block pt-0">
              <h1 class="text-left mb-4">Nuestros<br>Productos</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- TERMINA SLIDER PRODUCTOS -->
    </div>
    <!-- INICIA LISTA DE PRODUCTOS -->
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-12">
          <h1 class="title">Productos</h1>
          <p class="subtitle">Soluciones de empaque y embalaje diseñadas para cumplir con las expectativas y necesidades reales de tu organización.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto1/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Caja regular ranurada</h5>
              <p class="palabras-clave">práctica, funcional, estándar</p>
              <a href="productos/producto-1.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto2/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Caja con divisiones y separadores</h5>
              <p class="palabras-clave">protege, organiza, aísla</p>
              <a href="productos/producto-2.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto3/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Caja con papeles blancos</h5>
              <p class="palabras-clave">llamativa, limpia, segura</p>
              <a href="productos/producto-3.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto4/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Caja grapada o pegada</h5>
              <p class="palabras-clave">segura, resistente, protectora</p>
              <a href="productos/producto-4.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto5/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Caja para exportación</h5>
              <p class="palabras-clave">innovación, resistencia, protección</p>
              <a href="productos/producto-5.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto6/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Caja en corrugado sencillo</h5>
              <p class="palabras-clave">liviana, resistente, segura</p>
              <a href="productos/producto-6.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto7/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Caja en doble corrugado</h5>
              <p class="palabras-clave">resistente, confiable, segura</p>
              <a href="productos/producto-7.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto8/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Charola exhibidora para producto</h5>
              <p class="palabras-clave">vistosa, resistente, atractiva</p>
              <a href="productos/producto-8.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto9/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Caja con tratamiento retardante a la humedad</h5>
              <p class="palabras-clave">protección, seguridad, resistencia</p>
              <a href="productos/producto-9.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto10/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Charola en corrugado sencillo</h5>
              <p class="palabras-clave">liviana, segura, versátil</p>
              <a href="productos/producto-10.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto11/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Caja troquelada</h5>
              <p class="palabras-clave">cómoda, versátil, segura</p>
              <a href="productos/producto-11.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto12/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Caja con ventilación</h5>
              <p class="palabras-clave">versátil, cómoda, resistente</p>
              <a href="productos/producto-12.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto13/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Panel honeycomb</h5>
              <p class="palabras-clave">innovador, protector, resistente</p>
              <a href="productos/producto-13.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto14/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Esquinero</h5>
              <p class="palabras-clave">protección, estabilidad, seguridad</p>
              <a href="productos/producto-14.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto15/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Charola de huevo</h5>
              <p class="palabras-clave">protección, movilidad, almacenaje</p>
              <a href="productos/producto-15.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto16/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Caja de archivo</h5>
              <p class="palabras-clave">protección, almacenamiento, manejabilidad</p>
              <a href="productos/producto-16.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto17/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Empaque con cartón caple</h5>
              <p class="palabras-clave">vistoso, atractivo, versátil</p>
              <a href="productos/producto-17.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto18/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Empalmado</h5>
              <p class="palabras-clave">llamativo, resistente, versátil</p>
              <a href="productos/producto-18.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto19/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Caja con micro corrugado (flauta E y B)</h5>
              <p class="palabras-clave">moldeable, versátil, resistente</p>
              <a href="productos/producto-19.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch mt-3 mb-3 item-product">
          <div class="card">
            <img class="card-img-top" src="img/productos/producto20/item-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Tarima honeycomb</h5>
              <p class="palabras-clave">innovadora, resistente, única</p>
              <a href="productos/producto-20.php" class="btn btn-vertodas btn-item-product">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- TERMINA LISTA DE PRODUCTOS --> 
    <!-- INICIA AREA DE CONTACTO PRODUCTO -->
    <div class="container-fluid contenedor-zona-contacto">
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
    <?php include('includes/footer.php'); ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/sesion-reg.js"></script>
  </body>
</html>