<?php
include "conexionDB.php";
// error_reporting(E_ERROR | E_PARSE);
$nombrefc = $_POST['nombrefc'];
$empresafc = $_POST['empresafc'];
$emailfc = $_POST['emailfc'];
$telefonofc = $_POST['telefonofc'];
$productofc = $_POST['productofc'];
$paisfc = $_POST['paisfc'];
$mensajefc = $_POST['mensajefc'];
$aceptopromosfc = $_POST['aceptopromosfc'];
$aceptoavisofc = $_POST['aceptoavisofc'];

/* VERIFICAMOS SI EL USUARIO ACEPTO LOS TERMINOS Y CONDICIONES ASI COMO EL AVISO DE PRIVACIDAD */    
if(!empty($nombrefc) && !empty($empresafc) && !empty($emailfc) && !empty($paisfc)){
        if($aceptoavisofc=="on"){
            $recibirnoticias = "Sí";

            $sqlRecord = "INSERT INTO newsletter 
            (nombre, email, empresa, pais)
            VALUES ('$nombrefc',
                    '$emailfc',
                    '$empresafc',
                    '$paisfc')";
                
            if (mysqli_query($ConexMySQL, $sqlRecord)) {
                // $to  = $_POST['email'];
                $to = 'contacto@glama.com.mx, '.$emailfc;
                
                // subject
                $subject = 'Contacto GLAMA';
                // message
                $message = '
                <html>
                <head>
                <meta charset="utf-8">
                <title>Contacto GLAMA</title>
                </head>
                <body>
                <img src="http://glama.com.mx/img/headermail.jpg" style="max-width:1024px; margin:0 auto;">
                <p>
                Hemos recibido su mensaje con los siguientes datos:
                <br><br>
                <strong>Nombre:</strong> '.$nombrefc.'<br><br>
                <strong>Empresa:</strong> '.$empresafc.'<br><br>
                <strong>Email:</strong> '.$emailfc.'<br><br>
                <strong>Tel&eacute;fono:</strong> '.$telefonofc.'<br><br>
                <strong>Producto:</strong> '.$productofc.'<br><br>
                <strong>Pa&iacute;s:</strong> '.$paisfc.'<br><br>
                <strong>Mensaje:</strong> '.$mensajefc.'<br><br>
                <strong>Desea recibir noticias:</strong> '.$recibirnoticias.'<br><br>
                En breve uno de nuestros asesores lo contactará.<br>
                Productos GLAMA S.A. de C.V.<br>
                (55) 56992444<br><br>
                Plásticos 27, Santa Clara Coatitla, C.P. 55540<br> 
                Ecatepec de Morelos, Estado de México<br>
                <a href="https://www.glama.com.mx" target="_blank">www.glama.com.mx</a>
                </p>
                </body>
                </html>
                ';

                // To send HTML mail, the Content-type header must be set
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

                // Additional headers
                $headers .= 'From: Contacto GLAMA <contacto@glama.com.mx>' . "\r\n";

                $success = mail($to, $subject, $message, $headers);
                if (!$success) {
                    echo "0";
                }else{
                echo "1";
                }
            }
    }
}
else{
    echo "0";
}
?>