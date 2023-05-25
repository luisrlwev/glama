<?php
session_start();
if(isset($_SESSION['id_admin'])){

  include "lib/conexionDB.php";
  $sqlConsultMsj = "SELECT count(*) AS mensajes 
  FROM mensajeUser WHERE estatus='1'";
  $resultRegExist = mysqli_query($ConexMySQL, $sqlConsultMsj);
  $mensajesResTotal = $resultRegExist->fetch_array();

  $sqlConsultMsj2 = "SELECT count(*) AS mensajes 
  FROM respuestaUser WHERE estatus='1'";
  $resultRegExist2 = mysqli_query($ConexMySQL, $sqlConsultMsj2);
  $mensajesResTotal2 = $resultRegExist2->fetch_array();
  
  $TotaldeMensajes = number_format($mensajesResTotal['mensajes']) + number_format($mensajesResTotal2['mensajes']);
?>
<!DOCTYPE html>
<html lang="es_MX">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Productos Glama, S.A. de C.V.</title>

    <meta name="description" content="Estamos listos para ayudarte. Productos Glama te escucha.">
    <meta name="keywords" content="Contacto, Productos Glama, mmagana@glama.com.mx, atencionclientes@glama.com.mx, emauricio@apsa.com.mx, Ventas10@glama.com.mx, Ventas1@glama.com.mx, Ventas8@glama.com.mx, Empaque, embalaje, fabricación, cartón, productos Glama, Glama">
    <meta name="author" content="Wise WSI Solutions">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/sweetalert2.min.css" rel="stylesheet">
    <style>
      .table td, .table th {
          font-size: 14px;
      }
      .ellipsis {
        max-width: 130px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
      }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-178975190-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-178975190-1');
    </script>
  </head>
  <body class="conocenos-body" style="background-color: #262626;">
    <!-- INICIA CONTACTO -->
    <div class="container pt-5 pb-5 h-100">
      <div class="row justify-content-center">
       <div class="col-7">
         <h4 class="text-center" style="color:white;">Seleccione una opción:</h4>
        <a href="reporte-usuarios.php">
          <div class="btn-menu-admin" >VER REPORTE USUARIOS</div>
        </a>
        <a href="mensajes-usuarios.php">
        <div class="btn-menu-admin">SISTEMA DE MENSAJES<span class="totalmensajes"><?php print $TotaldeMensajes; ?></span></div>
        </a>
        <a href="newsletter-list.php">
        <div class="btn-menu-admin">SUSCRIPTORES NEWSLETTER</div>
        </a>
        <h6 class="text-center"><a href="lib/logout.php" style="color:#08b37a;">Cerrar Sesión</a></h6>
       </div>
      </div>
    </div>
    <?php
    }
    else{
      echo "<script>
  window.location.assign('index.php');
  </script>";
    }
    ?>
    <!-- TERMINA CONTACTO -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/tether.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script src="js/scripts-admin.js"></script>
    <script src="../js/sweetalert2.min.js"></script>
    <script src="../js/sesion-reg.js"></script>
  </body>
</html>
