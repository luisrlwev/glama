<?php
include "conexionDB.php";
session_start();
$idUserMsj = $_POST["idUserMsj"];
$idMsj = $_POST["idMsj"];
$mensajeMsj = $_POST["mensajeMsj"];

// VALIDAMOS QUE EXISTEN TODOS LOS DATOS REQUERIDOS DEL FORMULARIO
if(isset($idUserMsj) && isset($idMsj) && isset($mensajeMsj)){
 
    // GRABAMOS EL MENSAJE
        $sqlRecord = "INSERT INTO respuestaUser 
        (id_user, id_mensaje, mensaje, estatus)
        VALUES ('$idUserMsj',
                '$idMsj',
                '$mensajeMsj',
                '1')";
            
            if (mysqli_query($ConexMySQL, $sqlRecord)) {
                $sqlRecord2 = "SELECT * FROM usuarios WHERE id='".$idUserMsj."'";
                $resultRegExist2 = mysqli_query($ConexMySQL, $sqlRecord2);
                $mensajesRes2 = $resultRegExist2->fetch_array();
                 // $to  = $_POST['email'];
                $to  = $mensajesRes2['email'];
                // $to  = 'maya25084@gmail.com';
                // subject
                $subject = 'Mensaje de usuario en Sistema GLAMA';
                // message
                $message = '
                <html>
                <head>
                <meta charset="utf-8">
                <title>Mensaje de usuario en Sistema GLAMA</title>
                </head>
                <body>
                <img src="https://glama.com.mx/img/headermail.jpg" style="max-width:1024px; margin:0 auto;">
                <p>
                Buen dia ya se respondió su mensaje:
                <br><br>
                <strong>Respuesta:</strong><br>'.$mensajeMsj.'
                <br><br>
                <a href="http://glama.com.mx/detalle-mensaje.php?userMail='.$mensajesRes2['email'].'&passMail='.$mensajesRes2['pass'].'&idmsj='.$idMsj.'">Ver Respuesta</a>
                </p>
                </body>
                </html>
                ';

                $messageAdmin = '
                <html>
                <head>
                <meta charset="utf-8">
                <title>Mensaje de usuario en Sistema GLAMA</title>
                </head>
                <body>
                <img src="https://glama.com.mx/img/headermail.jpg" style="max-width:1024px; margin:0 auto;">
                <p>
                Respuesta recibida del usuario: <strong>'.$mensajesRes2['nombre'].'</strong>
                <br><br>
                <strong>Respuesta:</strong><br>'.$mensajeMsj.'
                </p>
                </body>
                </html>
                ';

                // To send HTML mail, the Content-type header must be set
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                // Additional headers
                $headers .= 'From: GLAMA <contacto@glama.com.mx>' . "\r\n";

                $success = mail($to, $subject, $message, $headers);
                $success2 = mail('contacto@glama.com.mx', $subject, $messageAdmin, $headers);
                if (!$success && !$success2) {
                    echo "false";            
                }else{
                    echo "true";
                }
              } else {
                echo "false";        
              }
}else{
    echo "false";
}
?>