<?php
session_start();
if(isset($_SESSION['id_admin'])){

  include "lib/conexionDB.php";
  $sqlConsultUsers = "SELECT * 
  FROM mensajeUser
  ORDER BY fecha_hora DESC";
  $resultUsers = mysqli_query($ConexMySQL, $sqlConsultUsers);

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
       <div class="col-11">
       <h6><a href="admin-dashboard.php" style="color:#08b37a; width: fit-content; float: left;">< Regresar a inicio</a></h6>
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Asunto</th>
              <th scope="col">Mensaje</th>
              <th scope="col">Email</th>
              <th scope="col">Fecha</th>
              <th scope="col">Responder</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody>
          <?php
          while ($UsersRes = $resultUsers->fetch_array()) {
            $sqlConsultUser = "SELECT *
            FROM usuarios WHERE id='".$UsersRes['id_user']."'";
            $resultRegUser = mysqli_query($ConexMySQL, $sqlConsultUser);
            $dataUser = $resultRegUser->fetch_array();

            if($UsersRes['estatus']==1){
              $estado = "<span style='color:yellow;'>Pendiente</span>";
            }
            else{
              $estado = "<span style='color:green;'>Contestado</span>";
            }

            echo "<tr>
            <th scope='row'>".$dataUser['nombre']."</th>
            <td>".$UsersRes['asunto']."</td>            
            <td class='ellipsis'>".$UsersRes['mensaje']."</td>
            <td><a href='mailto:".$dataUser['email']."'>".$dataUser['email']."</a></td>
            <td>".$UsersRes['fecha_hora']."</td>
            <td><a href='responder-mensaje.php?idmsg=".$UsersRes['id']."&email=".$dataUser['email']."'>Responder</a></td>
            <td>".$estado."</td>
          </tr>";
          }
          ?>
          </tbody>
        </table>
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
