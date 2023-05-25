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
  <body class="conocenos-body">
    <?php include ('includes/header.php'); ?>
    <!-- INICIA CONTACTO -->
    <div class="container pt-5 pb-5" id="SeccionConocenos">
      <h1 class="title text-left">Sistema de mensajes GLAMA</h1>
      <div class="container mt-4 mb-4">
        <div class="row">
          <div class="col-12 cont-info-contacto">
          <h4 class="title-name-producto">Enviar nuevo mensaje</h4>
          <form id="mensajenuevo" method="post" action="mail.php" enctype="multipart/form-data">
            <input type="hidden" id="idUserMsj" name="idUserMsj" value="<?php print $_SESSION['id'];?>">
            <label>Asunto</label><br>
            <input class="input-mensajes" type="text" id="asuntoMsj" name="asuntoMsj"><br>
            <label>Mensaje</label><br>
            <textarea class="textarea-mensajes" id="mensajeMsj" name="mensajeMsj"></textarea><br>
            <label>File</label><br>
            <input type="file" class="input-mensajes" name="uploadfile1" multiple ><br><br>
            <input type="file" class="input-mensajes" name="uploadfile2" multiple ><br><br>
            <input type="file" class="input-mensajes" name="uploadfile3" multiple ><br><br>
            <input type="file" class="input-mensajes" name="uploadfile4" multiple ><br><br>
            <input type="file" class="input-mensajes" name="uploadfile5" multiple ><br><br>
            <input class="btn-mensajes" type="submit" id="enviarMensaje" name="submit" value="ENVIAR">
          </form>
          </div>
        </div>
      </div>
      <h1 class="title text-left mt-5">Historial de Mensajes</h1>
      <table class="table mt-4 table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col" class="text-center">Asunto</th>
            <th scope="col" class="text-center">Mensaje</th>
            <th scope="col" class="text-center">Fecha</th>
            <th scope="col" class="text-center">Estatus</th>
          </tr>
        </thead>
        <tbody>
        <?php
        include "lib/conexionDB.php";
        $sqlConsultMsj = "SELECT * 
        FROM mensajeUser
        WHERE id_user = '".$_SESSION['id']."' ORDER BY fecha_hora DESC";
        $resultRegExist = mysqli_query($ConexMySQL, $sqlConsultMsj);
        while ($mensajesRes = $resultRegExist->fetch_array()) {
          if($mensajesRes['estatus']=== "1"){
             $estatus = "<strong>Enviado</strong>";
          }
          else if ($mensajesRes['estatus']=== "2"){
            $estatus = "<span style='color:green;'>Respuesta de Glama</span>";
          }
          else{
            $estatus = "<span style='color:orange;'>Revisado</span>";
          }
          echo "<tr>
          <td>".$mensajesRes['asunto']."</td>
          <td class='ellipsis'>".$mensajesRes['mensaje']."</td>
          <td class='text-center'>".$mensajesRes['fecha_hora']."</td>
          <td class='text-center'><a href='detalle-mensaje.php?idmsj=".$mensajesRes['id']."'>".$estatus."</a></td>
        </tr>";
        }
        ?>
          
        </tbody>
      </table>
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

 
function multi_attach_mail($to, $subject, $message, $senderEmail, $senderName, $files = array()){ 
 
  $from = $senderName." <".$senderEmail.">";  
  $headers = "From: $from"; 

  // Boundary  
  $semi_rand = md5(time());  
  $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  

  // Headers for attachment  
  $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";  

  // Multipart boundary  
  $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
  "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";  

  // Preparing attachment 
  if(!empty($files)){ 
      for($i=0;$i<count($files);$i++){ 
          if(is_file($files[$i])){ 
              $file_name = basename($files[$i]); 
              $file_size = filesize($files[$i]); 
               
              $message .= "--{$mime_boundary}\n"; 
              $fp =    @fopen($files[$i], "rb"); 
              $data =  @fread($fp, $file_size); 
              @fclose($fp); 
              $data = chunk_split(base64_encode($data)); 
              $message .= "Content-Type: application/octet-stream; name=\"".$file_name."\"\n" .  
              "Content-Description: ".$file_name."\n" . 
              "Content-Disposition: attachment;\n" . " filename=\"".$file_name."\"; size=".$file_size.";\n" .  
              "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
          } 
      } 
  } 
   
  $message .= "--{$mime_boundary}--"; 
  $returnpath = "-f" . $senderEmail; 
   
  // Send email 
  $mail = @mail($to, $subject, $message, $headers, $returnpath);  
   
  // Return true, if email sent, otherwise return false 
  if($mail){ 
      return true; 
  }else{ 
      return false; 
  } 
}

if (isset($_POST["submit"])) {
  $files =[];

  if ($_FILES["uploadfile1"]["name"]) {
      $filename1 = $_FILES["uploadfile1"]["name"];
      $tempname1 = $_FILES["uploadfile1"]["tmp_name"];
      $folder1 = "image/" . $filename1;
  
      if (move_uploaded_file($tempname1, $folder1)) {
          $msg1 = "Image1 uploaded successfully";
          $files[0] =  "image/" . $filename1;
            
      } else {
          $msg1 = "Failed to upload image";
      }
  }
  if ($_FILES["uploadfile2"]["name"]) {
  $filename2 = $_FILES["uploadfile2"]["name"];
  $tempname2 = $_FILES["uploadfile2"]["tmp_name"];
  $folder2 = "image/" . $filename2;

  if (move_uploaded_file($tempname2, $folder2)) {
      $msg2 = "Image2 uploaded successfully";
      $files[1] =  "image/" . $filename2;

  } else {
      $msg2 = "Failed to upload image";
  }
  }
  if ($_FILES["uploadfile3"]["name"]) {
  $filename3 = $_FILES["uploadfile3"]["name"];
  $tempname3 = $_FILES["uploadfile3"]["tmp_name"];
  $folder3 = "image/" . $filename3;
  if (move_uploaded_file($tempname3, $folder3)) {
      $msg3 = "Image3 uploaded successfully";
      $files[2] =  "image/" . $filename3;

  } else {
      $msg3 = "Failed to upload image";
  }
  }
  if ($_FILES["uploadfile4"]["name"]) {
  $filename4 = $_FILES["uploadfile4"]["name"];
  $tempname4 = $_FILES["uploadfile4"]["tmp_name"];
  $folder4 = "image/" . $filename4;

  if (move_uploaded_file($tempname4, $folder4)) {
      $msg4 = "Image4 uploaded successfully";
      $files[3] =  "image/" . $filename4;
       
  } else {
      $msg4 = "Failed to upload image";
  }
  }
  if ($_FILES["uploadfile5"]["name"]) {
  $filename5 = $_FILES["uploadfile5"]["name"];
  $tempname5 = $_FILES["uploadfile5"]["tmp_name"];
  $folder5 = "image/" . $filename5;

  if (move_uploaded_file($tempname5, $folder5)) {
      $msg5 = "Image5 uploaded successfully";
      $files[4] =  "image/" . $filename5;

  } else {
      $msg5 = "Failed to upload image";
  }
  }
// Email configuration 
$to1 = 'ventas@glama.com.mx';
$to2 = 'productosglama@gmail.com';
$to3 = 'fernandomagmar@gmail.com';
$to4 = 'daniel.villena@wisewsisolutions.com';
$to5 = 'ingrid@wisewsisolutions.com';
$to6 = 'jafetgonzalez117@gmail.com';   
$from = 'info@glama.com.mx';
$fromName = 'Productos GLAMA';


// Email subject
$subject = 'Productos GLAMA'; 



// Attachment files 

 


$htmlContent = ' 
<h3>Productos GLAMA</h3>
<p>Affair : ' . $_POST['asuntoMsj'] . '</p>
<p>Mensaje : ' . $_POST['mensajeMsj'] . '</p> 
  <p><b>Total Attachments:</b> '.count($files).'</p>'; 

// Call function and pass the required arguments 
$sendEmail = multi_attach_mail($to1, $subject, $htmlContent, $from, $fromName, $files); 
$sendEmail = multi_attach_mail($to2, $subject, $htmlContent, $from, $fromName, $files); 
$sendEmail = multi_attach_mail($to3, $subject, $htmlContent, $from, $fromName, $files); 
$sendEmail = multi_attach_mail($to4, $subject, $htmlContent, $from, $fromName, $files); 
$sendEmail = multi_attach_mail($to5, $subject, $htmlContent, $from, $fromName, $files);
$sendEmail = multi_attach_mail($to6, $subject, $htmlContent, $from, $fromName, $files); 

// Email sending status 
if($sendEmail){ 
  echo 'El correo ha sido enviado.';
}else{
  echo 'El correo no se ha enviado.';
}




}
?>