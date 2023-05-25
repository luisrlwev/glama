<?php
session_start();
if(isset($_SESSION['id_admin'])){
?>


<?php



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

  include "lib/conexionDB.php";

  $idMsj = $_POST["idUserMsj"];
  $idMsg = $_POST["idMensaje"];
  $mensajeMsj = $_POST["mensajeMsj"];
  
  // VALIDAMOS QUE EXISTEN TODOS LOS DATOS REQUERIDOS DEL FORMULARIO
  if(isset($idMsj) && isset($idMsg) && isset($mensajeMsj)){
   
      // GRABAMOS EL MENSAJE
          $sqlRecord = "INSERT INTO respuestaAdmin
          (id_user, id_mensaje, mensaje, estatus)
          VALUES ('$idMsj',
                  '$idMsg',
                  '$mensajeMsj',
                  '2')";
              
              if (mysqli_query($ConexMySQL, $sqlRecord)) {
                  $sqlRecord2 = "SELECT * FROM usuarios WHERE id='".$idMsj."'";
                  $resultRegExist2 = mysqli_query($ConexMySQL, $sqlRecord2);
                  $mensajesRes2 = $resultRegExist2->fetch_array();
  
                  $sqlUpdateMsj = "UPDATE mensajeUser SET estatus ='3' WHERE id='".$idMsg."'";
                  $resultUpdateMsj = mysqli_query($ConexMySQL, $sqlUpdateMsj);
  
                   // $to  = $_POST['email'];
                  $to  = $mensajesRes2['email'];
                  // $to  = 'maya25084@gmail.com';
                  // subject
                  $subject = 'Respuesta de administrador en Sistema GLAMA';
                  // message
                  $message = '
                  <html>
                  <head>
                  <meta charset="utf-8">
                  <titleRespuesta de administrador en Sistema GLAMA</title>
                  </head>
                  <body>
                  <p>Mensaje: '.$mensajeMsj.'</p>
                  
                  <img src="https://www.glama.com.mx/img/headermail.jpg" style="max-width:1024px; margin:0 auto;">
                  <p>
                  Buen dia su mensaje ha sido respondido, por favor ingresa al sitio web de GLAMA.
                  <br><br>
                  </p>
                  </body>
                  </html>
                  ';
  
                  // To send HTML mail, the Content-type header must be set
                  $headers  = 'MIME-Version: 1.0' . "\r\n";
                  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  
                  // Additional headers
                  $headers .= 'From: GLAMA <ventas@glama.com.mx>' . "\r\n";
  
                  // $success = mail($to, $subject, $message, $headers);
                  // if (!$success && !$success2) {
                  //     echo "false1";
                  // }else{
                  //     echo "true";
                  // }
                } else {
                  echo "false2";
                }
  }else{
      echo "false3";
  }





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
// $to1 = 'ventas@glama.com.mx';
$to = $_POST['email'];  
$from = 'info@glama.com.mx';
$fromName = 'GLAMA message system';

// Email subject
$subject = 'GLAMA message system'; 



// Attachment files 

 


$htmlContent = ' 
<h3>GLAMA message system</h3> 
<p>Mensaje : ' . $_POST["mensajeMsj"] . '</p> 
  <p><b>Total Attachments:</b> '.count($files).'</p>'; 

// Call function and pass the required arguments 
$sendEmail = multi_attach_mail($to, $subject, $htmlContent, $from, $fromName, $files);  

// Email sending status 
if($sendEmail){ 
  echo 'The email has sent successfully.'; 
}else{ 
  echo 'Mail sending failed!'; 
}




}

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
      .horafecha{
        min-width: 77px;
    font-size: 10px !important;
    font-weight: 600;
      }
    </style>
  </head>
  <body class="conocenos-body" style="background-color: #262626; color:white;">
    <?php
    include "lib/conexionDB.php";
    $SelectMsj = $_GET['idmsg'];
    $sqlConsultMsj = "SELECT * 
    FROM mensajeUser
    WHERE id = '".$SelectMsj."'";
    $resultRegExist = mysqli_query($ConexMySQL, $sqlConsultMsj);
    $mensajesRes = $resultRegExist->fetch_array();
    ?>
    <!-- INICIA CONTACTO -->
    <div class="container pt-5 pb-5">
      <a href="mensajes-usuarios.php" style="color:#08b37a; width: fit-content;"><h6>< Regresar a mensajes</h6></a>
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
      <h4 class="title-name-producto">Responder mensaje</h4>
          <form method="POST" enctype="multipart/form-data" action="responder-mensaje.php?idmsg=<?php echo $_GET['idmsg'];?>&email=<?php print @$_GET['email'];?>">
            <input type="hidden" id="idUserMsj" name="idUserMsj" value="<?php print $mensajesRes['id_user'];?>">
            <input type="hidden" id="idMensaje" name="idMensaje" value="<?php print $mensajesRes['id'];?>"><br>
            <input type="hidden" name="email" value="<?php echo @$_GET['email'] ?>"> <br>
            <label>Mensaje</label><br>
            <textarea class="textarea-mensajes" id="mensajeMsj" name="mensajeMsj"></textarea>
            <label>File</label><br>
            <input type="file" class="input-mensajes" name="uploadfile1" multiple ><br><br>
            <input type="file" class="input-mensajes" name="uploadfile2" multiple ><br><br>
            <input type="file" class="input-mensajes" name="uploadfile3" multiple ><br><br>
            <input type="file" class="input-mensajes" name="uploadfile4" multiple ><br><br>
            <input type="file" class="input-mensajes" name="uploadfile5" multiple ><br><br>
            <input class="btn-mensajes" type="submit" name="submit"  value="ENVIAR">
          </form>
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
        WHERE id_mensaje = '".$SelectMsj."' ORDER BY fecha_hora DESC";
        $resultRegExist = mysqli_query($ConexMySQL, $sqlConsultMsj);
        //CONTABILIZAMOS SI EXISTE UNA RESPUESTA DEL ADMIN
        $row_RegExist = mysqli_num_rows($resultRegExist);
        while ($mensajesRes = $resultRegExist->fetch_array()) {
          if($mensajesRes['estatus']!=1){
             $estatus = "Visto";
          }
          else{
            $estatus = "No Visto";
          }
          echo "<tr>
          <td>Productos Glama</td>
          <td class='ellipsis'>".$mensajesRes['mensaje']."</td>
          <td class='text-center horafecha'>".$mensajesRes['fecha_hora']."</td>
        </tr>";
        }
        $sqlConsultMsjUser = "SELECT * 
        FROM respuestaUser
        WHERE id_mensaje = '".$SelectMsj."' ORDER BY fecha_hora DESC";
        $resultRegExistUser = mysqli_query($ConexMySQL, $sqlConsultMsjUser);
        //CONTABILIZAMOS SI EXISTE UNA RESPUESTA DEL USUARIO
        $row_RegExistUser = mysqli_num_rows($resultRegExistUser);
        while ($mensajesResUser = $resultRegExistUser->fetch_array()) {
          if($mensajesResUser['estatus']!=1){
             $estatusUser = "Visto";
          }
          else{
            $estatusUser = "No Visto";
          }
          echo "<tr>
          <td>Usaurio</td>
          <td class='ellipsis'>".$mensajesResUser['mensaje']."</td>
          <td class='text-center horafecha'>".$mensajesResUser['fecha_hora']."</td>
        </tr>";
        }
        ?>
          
        </tbody>
      </table>
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


