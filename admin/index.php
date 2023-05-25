<?php
session_start();
if(isset($_SESSION['id_admin'])){
  echo "<script>
  window.location.assign('admin-dashboard.php');
  </script>";
}
else{
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
        <form class="form-login-admin" id="formAdmin">
          <div class="form-group">
            <img src="../img/logo.png" class="logo-header" style="position:relative; top: 0px; margin-bottom: 20px;"><br>
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control text-center" id="emailAdmin" name="emailAdmin" aria-describedby="emailHelp" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control text-center" id="passwordAdmin" name="passwordAdmin" placeholder="Password">
          </div>
          <input type="button" class="btn btn-primary" style="background-color:#08b37a; border:1px solid #08b37a;" id="EnviarAdmin" value="ENVIAR">
        </form>
       </div>
      </div>
    </div>
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
<?php
}
?>