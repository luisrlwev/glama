<?php
include "conexionDB.php";
session_start();
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

                $success = mail($to, $subject, $message, $headers);
                if (!$success && !$success2) {
                    echo "false1";
                }else{
                    echo "true";
                }
              } else {
                echo "false2";
              }
}else{
    echo "false3";
}
?>