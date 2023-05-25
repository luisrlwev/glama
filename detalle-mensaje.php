<?php
include "lib/conexionDB.php";
session_start();
if(isset($_GET['userMail']) && isset($_GET['passMail'])){
  $emailLogin = $_GET['userMail'];
  $passLogin = $_GET['passMail'];
  // HACEMOS CONSULTA DE SI EXISTE USUARIO
  $sqlConsult = "SELECT * 
  FROM usuarios
  WHERE email = '$emailLogin' OR pass = '$passLogin'";
  $resultLogin = mysqli_query($ConexMySQL, $sqlConsult);

  // SI YA EXISTE GENERAMOS COOKIES PARA LOGEO
  $numrow_Login = mysqli_num_rows($resultLogin);
  if ($numrow_Login > 0) {
      
      // GENERAMOS EL FETCH ASSOC PARA EXTRAER VALORES
      $rowGetLoginData = mysqli_fetch_assoc($resultLogin);

      $_SESSION['id'] = $rowGetLoginData['id'];
      $_SESSION['nombre'] = $rowGetLoginData['nombre'];
      $_SESSION['email'] = $rowGetLoginData['email'];


  }
  else{
    echo "
        <!DOCTYPE html>
      <html lang='es_MX'>
        <head>
          <meta charset='utf-8'>
          <meta http-equiv='X-UA-Compatible' content='IE=edge'>
          <meta name='viewport' content='width=device-width, initial-scale=1'>

          <title>Productos Glama, S.A. de C.V.</title>

          <meta name='description' content='Estamos listos para ayudarte. Productos Glama te escucha.'>
          <meta name='keywords' content='Contacto, Productos Glama, mmagana@glama.com.mx, atencionclientes@glama.com.mx, emauricio@apsa.com.mx, Ventas10@glama.com.mx, Ventas1@glama.com.mx, Ventas8@glama.com.mx, Empaque, embalaje, fabricación, cartón, productos Glama, Glama'>
          <meta name='author' content='Wise WSI Solutions'>

          <link href='css/bootstrap.min.css' rel='stylesheet'>
          <link href='css/style.css' rel='stylesheet'>
          <link href='css/sweetalert2.min.css' rel='stylesheet'>
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
          <script async src='https://www.googletagmanager.com/gtag/js?id=UA-178975190-1'></script>
          <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-178975190-1');
          </script>
        </head>
        <body class='conocenos-body'>
        <script src='js/jquery.min.js'></script>
        <script src='js/tether.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/scripts.js'></script>
        <script src='js/scripts-mensaje-box.js'></script>
        <script src='js/sweetalert2.min.js'></script>
        <script>
        Swal.fire(
          'Lo sentimos',
          'Para accesar a esta sección debe estar registrado.',
          'warning'
        ).then((result) => {
          window.location.href = 'index.php';
        })
        </script>
      </body>
      </html>";
  }
}
if(isset($_SESSION['id'])){
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

    <link rel="icon" type="image/png" href="img/logo.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/sweetalert2.min.css" rel="stylesheet">
    <style>
      .table td, .table th {
          font-size: 14px;
      }
      .horafecha{
        min-width: 77px;
    font-size: 10px !important;
    font-weight: 600;
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
  <body class="conocenos-body">
    <?php include ('includes/header.php'); 
    include "lib/conexionDB.php";
    $SelectMsj = $_GET['idmsj'];
    $sqlConsultMsj = "SELECT * 
    FROM mensajeUser
    WHERE id = '".$SelectMsj."'";
    $resultRegExist = mysqli_query($ConexMySQL, $sqlConsultMsj);
    $mensajesRes = $resultRegExist->fetch_array();
    ?>
    <!-- INICIA CONTACTO -->
    <div class="container pt-5 pb-5" id="SeccionConocenos">
      <h1 class="title text-left">Sistema de mensajes GLAMA</h1>
      <a href="mensaje-box.php"><h4 class="title-name-producto">< Regresar a mensajes</h4></a>
      <div class="container mt-4 mb-4">
      <h1 class="title text-left">Detalle del mensaje</h1>
      <div class="row">
          <div class="col-12 cont-info-contacto">
            <label><strong>Asunto</strong></label><br>
            <?php print $mensajesRes['asunto'] ?><br><br>
            <label><strong>Mensaje</strong></label><br>
            <?php print $mensajesRes['mensaje'] ?><br><br>
          </div>
        </div>
      </div>
      <h1 class="title text-left mt-5">Historial de Respuestas</h1>
      <table class="table mt-4 table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col" class="text-center">Autor</th>
            <th scope="col" class="text-center">Respuesta</th>
            <th scope="col" class="text-center">Fecha</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $sqlConsultMsj = "SELECT * 
        FROM respuestaAdmin
        INNER JOIN usuarios_admin
        ON respuestaAdmin.id_user = usuarios_admin.id
        WHERE id_mensaje = '".$SelectMsj."' ORDER BY fecha_hora DESC";
        $resultRegExist = mysqli_query($ConexMySQL, $sqlConsultMsj);
        //CONTABILIZAMOS SI EXISTE UNA RESPUESTA DEL ADMIN
        $row_RegExist = mysqli_num_rows($resultRegExist);
        while ($mensajesRes2 = $resultRegExist->fetch_array()) {
          

          if($mensajesRes2['estatus']!=1){
             $estatus = "Ver respuesta";
          }
          else{
            $estatus = "Respuesta pendiente";
          }
          echo "<tr>
          <td>Productos Glama</td>
          <td class='ellipsis'>".$mensajesRes2['mensaje']."</td>
          <td class='text-center horafecha'>".$mensajesRes2['fecha_hora']."</td>
        </tr>";

          $sqlConsultMsjUser = "SELECT * 
          FROM respuestaUser
          WHERE id_mensaje = '".$SelectMsj."' ORDER BY fecha_hora DESC";
          $resultRegExistUser = mysqli_query($ConexMySQL, $sqlConsultMsjUser);
          while ($mensajesResUser3 = $resultRegExistUser->fetch_array()) {
            if($mensajesResUser3['estatus']!=1){
               $estatusUser = "Ver respuesta";
            }
            else{
              $estatusUser = "Respuesta pendiente";
            }
            echo "<tr>
            <td>Yo</td>
            <td class='ellipsis'>".$mensajesResUser3['mensaje']."</td>
            <td class='text-center horafecha'>".$mensajesResUser3['fecha_hora']."</td>
          </tr>";
          }
        }
        ?>
          
        </tbody>
      </table>
      <?php
      if($row_RegExist > 0){
      ?>
      <h1 class="title text-left mt-4">Enviar Nueva Respuesta</h1>
      <div class="container mt-4 mb-4">
          <div class="row">
          <div class="col-12 cont-info-contacto">
          <form id="respuestanueva">
            <input type="hidden" id="idUserMsj" name="idUserMsj" value="<?php print $_SESSION['id'];?>">
            <input type="hidden" id="idUserMsj" name="idMsj" value="<?php print $_GET['idmsj'];?>">
            <label>Mensaje</label><br>
            <textarea class="textarea-mensajes" id="mensajeMsj" name="mensajeMsj"></textarea>
            <input class="btn-mensajes" type="button" id="enviarRespuesta" value="ENVIAR">
          </form>
          </div>
        </div>
      </div>
      <?php
      }
      ?>
    </div>
    <!-- TERMINA CONTACTO -->
    <?php include('includes/footer.php'); ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/scripts-mensaje-box.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/sesion-reg.js"></script>
  </body>
</html>
<?php
}else{
  echo "
  <!DOCTYPE html>
<html lang='es_MX'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>Productos Glama, S.A. de C.V.</title>

    <meta name='description' content='Estamos listos para ayudarte. Productos Glama te escucha.'>
    <meta name='keywords' content='Contacto, Productos Glama, mmagana@glama.com.mx, atencionclientes@glama.com.mx, emauricio@apsa.com.mx, Ventas10@glama.com.mx, Ventas1@glama.com.mx, Ventas8@glama.com.mx, Empaque, embalaje, fabricación, cartón, productos Glama, Glama'>
    <meta name='author' content='Wise WSI Solutions'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/sweetalert2.min.css' rel='stylesheet'>
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
    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-178975190-1'></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-178975190-1');
    </script>
  </head>
  <body class='conocenos-body'>
  <script src='js/jquery.min.js'></script>
  <script src='js/tether.min.js'></script>
  <script src='js/bootstrap.min.js'></script>
  <script src='js/scripts.js'></script>
  <script src='js/scripts-mensaje-box.js'></script>
  <script src='js/sweetalert2.min.js'></script>
  <script>
  Swal.fire(
    'Lo sentimos',
    'Para accesar a esta sección debe estar registrado.',
    'warning'
  ).then((result) => {
    window.location.href = 'index.php';
  })
  </script>
</body>
</html>";
}
?>