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

    <meta name="description" content="La sustentabilidad es la pieza clave que articula el modelo de negocio de Productos Glama, nuestro proceso de fabricación es amigable con el medioambiente.">
    <meta name="keywords" content="Modelo de negocio, proceso de fabricación, amigable con el medioambiente, sustentabilidad, medioambiente, reducción del uso de agua, empresa sostenible, ODS, agenda 2030, UN, metas circulares, negocio circular, empaque positivo, materiales reusables/reciclados, energías limpias, entorno mejor, ahorro de energía, cuidar el agua, tratamiento de agua, molinos de papel, aprovechamiento de residuos, aprovechar desperdicios, separación de residuos, sociedad consciente, nuestra gente, prevención y capacitación, seguridad, higiene, protección al medio ambiente, programas de seguridad y visión, nuestra comunidad, apoyo a las zonas aledañas, programa de reforestación, arboles, sostenibilidad, sustentabilidad">
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

    <!-- INICIA LISTA DE PRODUCTOS -->
    <div class="container pt-5 pb-5" id="seccionsostenibilidad">
    <div class="row">
    <h1 class="title text-left">Sostenibilidad</h1>
          <div class="col-12 pl-0 pr-0">
            <p>
            Productos Glama desarrolla soluciones de empaque y embalaje que atienda las necesidades del presente sin comprometer las generaciones del mañana.
            </p>
          </div>
        </div>
    <div class="row">
          <!-- INICIA MENU LATERAL IZQUIERDO -->
          <div class="col-5 cont-menu-lat-izq">
            <ul class="menu-nav-izq-conocenos">
              <li class="ancla active-item-menu-izq-cono" data-ancla="informacion-cono" id="item-1">Sustentabilidad circular <img src="img/conocenos/arrow-r.png" class="arrow-item-m-i-conocenos"></li>
              <li class="ancla" data-ancla="informacion-cono" id="item-2">Metas sostenibles de la empresa <img src="img/conocenos/arrow-r.png" class="arrow-item-m-i-conocenos"></li>
            </ul>
          </div>
          <!-- TERMINA MENU LATERAL IZQUIERDO -->
          <div class="col-7 cont-info-conocenos" id="informacion-cono">
            <div class="row">
              <div class="col-12 img-info-conocenos image-header-s-item1">
                <div class="text-header-image">
                  reinventar,<br>innovar,<br>cuidar.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 cuerpo-texto-info-conocenos">
                <!-- QUE HACEMOS INICIA -->
                <div class="d-none infotxt-conocenos forced-view" id="info-sustentabilidad">
                  <h4 class="title-info-conocenos">Compromiso con el medio ambiente, desde el diseño hasta la producción y reutilización de nuestros productos.</h4>
                  <p>
                    El cambio climático es uno de los mayores desafíos a nivel mundial que enfrentamos todos; por ello, con una visión responsable y de largo plazo, Productos Glama es una empresa comprometida con mitigar el deterioro de los sistemas naturales y el medioambiente. 
                    <br><br>
                    Conoce las características más relevantes de la estrategia circular instrumentada por Productos Glama:
                  </p>
                  
                  <div class="row mt-4">
                    <div class="col-4 item-infografia-conocenos">
                      <h6 class="text-graydark font-weight-bold">Aprovechamiento de residuos </h6>
                      <img src="img/sostenibilidad/icon1.svg" class="icon-conocenos">
                      <p class="text-infografia-conocenos">
                        Para Productos Glama el objetivo es claro: convertir el desperdicio en un recurso estratégico y de valor. El modelo de reciclaje de la empresa utiliza papeles reciclados como materia prima para ofrecer productos 100% sustentables.
                      </p>
                    </div>
                    <div class="col-4 item-infografia-conocenos">
                      <h6 class="text-graydark font-weight-bold">Consumo de energía</h6>
                      <img src="img/sostenibilidad/icon2.svg" class="icon-conocenos">
                      <p class="text-infografia-conocenos">
                        Productos Glama cuenta con un sistema de cogeneración de energía que le permite no sólo ser una empresa autosuficiente para cubrir la totalidad de sus necesidades, sino también coadyuvar en minimizar el impacto al medioambiente, evitando el uso excesivo de combustibles fósiles durante la fabricación de sus productos.
                      </p>
                    </div>
                    <div class="col-4 item-infografia-conocenos">
                      <h6 class="text-graydark font-weight-bold">Gestión del Agua</h6>
                      <img src="img/sostenibilidad/icon3.svg" class="icon-conocenos">
                      <p class="text-infografia-conocenos">
                        A través de una planta de tratamiento de aguas residuales, Productos Glama aprovecha la utilización de este recurso natural durante todo el proceso para la elaboración de sus productos, buscando generar el menor impacto al medio ambiente. 
                      </p>
                    </div>   
                    <div class="col-12 item-infografia-conocenos">
                      <h6 class="text-graydark font-weight-bold">Reincorporación de insumos y materias primas</h6>
                      <img src="img/sostenibilidad/icon3.svg" class="icon-conocenos">
                      <p class="text-infografia-conocenos">
                        El último eslabón de la propuesta circular de Productos Glama es, probablemente, el eje estratégico más importante de su proceso de producción. Por un lado, permite que todos los productos fabricados por la empresa se fabriquen con papeles 100% sostenibles, evitando que no terminen en vertederos y; adicionalmente, compensa la necesidad de usar materia prima virgen. 
                      </p>
                    </div>                   
                  </div>
                  <p class="text-center">
                    <img src="img/sostenibilidad/infografia2.svg" style="width:80%;">
                  </p>
                </div>
                <!-- QUE HACEMOS TERMINA -->
                <!-- TRAYECTORIA INICIA -->
                <div class="d-none infotxt-conocenos" id="info-metas">
                  <h4 class="title-info-conocenos">La sustentabilidad es la pieza clave que articula el modelo de negocio de Productos Glama.</h4>
                  <p>
                    Actualmente, el proceso que realiza Productos Glama para la fabricación de sus productos sustentables equivale a:
                  </p>
                  <ul>
                    <li>Por cada tonelada de papel reciclado se evita talar ~15 árboles adultos, impactando positivamente en el medioambiente.</li>
                    <li>Ahorro del ~60% de energía no renovable vs  energía limpia que se utiliza actualmente  para fabricar papel en los molinos de la empresa </li>
                    <li>Reducción de ~70% del agua en comparación con la utilizada para producir papel a partir de fibras vírgenes.</li> 
                  </ul>
                  <p>
                    El objetivo es construir una gran empresa sostenible que busque no sólo dejar un futuro que no comprometa los recursos de las siguientes generaciones, sino uno que regenere y asegure un mejor mañana para todos. 
                    <br><br>
                    Por ello y alineado con los Objetivos de Desarrollo Sostenible 2030 de las Naciones Unidas, Productos Glama ha planteado 9 metas circulares de largo plazo agrupadas en 3 grupos que guiarán su camino por los siguientes años:
                  </p>
                  <p class="text-center">
                    <img src="img/sostenibilidad/infografia.svg" style="width:80%;">
                  </p>
                  <h6 class="subtitle-info-conocenos">Negocio circular</h6>
                  <p><strong>Empaque positivo</strong></p>
                  <ul>
                    <li>
                      Fabricar la totalidad de nuestros productos con materiales reusables/reciclados para 2030.
                    </li>
                  </ul>
                  <p><strong>Aliados y proveedores </strong></p>
                  <ul>
                    <li>
                      Asegurar que el 100% de los insumos utilizados para la fabricación de nuestros productos sean sustentables para 2030.
                    </li>
                  </ul>
                  <h6 class="subtitle-info-conocenos">Entorno mejor</h6>
                  <p><strong>Ahorro de energía</strong></p>
                  <ul>
                    <li>
                    Adicionar una nueva planta de cogeneración de energía limpia para 2030.
                    </li>
                  </ul>
                  <p><strong>Cuidado del agua</strong></p>
                  <ul>
                    <li>
                      Duplicar la capacidad de tratamiento de agua para su aprovechamiento en molinos de papel.
                    </li>
                  </ul>
                  <p><strong>Aprovechamiento de residuos</strong></p>
                  <ul>
                    <li>
                      Aprovechar la totalidad del desperdicio de todas nuestras plantas productivas, enviando 0% de residuos a vertederos.
                    </li>
                    <li>
                      Separación integral de residuos para su aprovechamiento en otras cadenas productivas.
                    </li>
                  </ul>
                  <h6 class="subtitle-info-conocenos">Sociedad consciente</h6>
                  <p><strong>Nuestra gente</strong></p>
                  <ul>
                    <li>Fortalecer medidas de prevención y capacitación a nuestro equipo en temas de seguridad, higiene y protección al medioambiente.</li>
                    <li>Fortalecer nuestros programas de seguridad y visión “cero accidentes”.</li>
                  </ul>
                  <p><strong>Nuestra comunidad</strong></p>
                  <ul>
                    <li>Apoyar a las zonas aledañas de la empresa con programas de reforestación (1,000 arboles reforestados anualmente).</li>
                  </ul>
                </div>
                <!-- TRAYECTORIA TERMINA -->
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- TERMINA LISTA DE PRODUCTOS --> 
    <?php include('includes/footer.php'); ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/scripts-sostentabilidad.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/sesion-reg.js"></script>
  </body>
</html>