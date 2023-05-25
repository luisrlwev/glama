<?php
include "conexionDB.php";
session_start();
$idMsj = $_POST["idUserMsj"];
$asuntoMsj = $_POST["asuntoMsj"];
$mensajeMsj = $_POST["mensajeMsj"];

// VALIDAMOS QUE EXISTEN TODOS LOS DATOS REQUERIDOS DEL FORMULARIO
if(isset($idMsj) && isset($asuntoMsj) && isset($mensajeMsj)){
 
    // GRABAMOS EL MENSAJE
        $sqlRecord = "INSERT INTO mensajeUser 
        (id_user, asunto, mensaje, estatus)
        VALUES ('$idMsj',
                '$asuntoMsj',
                '$mensajeMsj',
                '1')";
            
            if (mysqli_query($ConexMySQL, $sqlRecord)) {
                $sqlRecord2 = "SELECT * FROM usuarios WHERE id='".$idMsj."'";
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
                Buen dia hemos recibido su mensaje:
                <br><br>
                <strong>Asunto:</strong><br>'.$asuntoMsj.'<br><br>
                <strong>Mensaje:</strong><br>'.$mensajeMsj.'
                <br><br>
                <a href="http://glama.com.mx/mensaje-box.php?userMail='.$mensajesRes2['email'].'&passMail='.$mensajesRes2['pass'].'">Ver mensaje</a>
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
                Mensaje del usuario: <strong>'.$mensajesRes2['nombre'].'</strong>
                <br><br>
                <strong>Email:</strong><br>'.$mensajesRes2['email'].'<br><br>
                <strong>Asunto:</strong><br>'.$asuntoMsj.'<br><br>
                <strong>Mensaje:</strong><br>'.$mensajeMsj.'
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
                $success2 = mail("contacto@glama.com.mx", $subject, $messageAdmin, $headers);
                if (!$success && !$success2) {
                    echo "false";
                }else{
                    echo "true";
                }
              } else {
                echo "false";
                print $sqlRecord;
              }
}else{
    echo "false";
    print $sqlRecord;
}
?>