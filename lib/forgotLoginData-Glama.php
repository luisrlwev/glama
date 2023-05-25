<?php
include "conexionDB.php";

$emailForgotPass = $_POST["emailrecupera"];

if(isset($emailForgotPass)){
    // HACEMOS CONSULTA DE SI EXISTE USUARIO
    $sqlConsult = "SELECT * 
    FROM usuarios
    WHERE email = '$emailForgotPass'";
    $resultemailForgotPass = mysqli_query($ConexMySQL, $sqlConsult);

    // SI YA EXISTE GENERAMOS COOKIES PARA LOGEO
    $numrow_emailForgotPass = mysqli_num_rows($resultemailForgotPass);
    if ($numrow_emailForgotPass > 0) {
        
        // GENERAMOS EL FETCH ASSOC PARA EXTRAER VALORES
        $rowGetemailForgotPass = mysqli_fetch_assoc($resultemailForgotPass);

        // $to  = $_POST['email'];
        $to  = $emailForgotPass;
        // $to  = 'maya25084@gmail.com';
        // subject
        $subject = 'Recuperar datos acceso GLAMA';
        // message
        $message = '
        <html>
        <head>
        <meta charset="utf-8">
        <title>Recuperar datos acceso GLAMA</title>
        </head>
        <body>
        <img src="https://glama.com.mx/img/headermail.jpg" style="max-width:1024px; margin:0 auto;">
        <p>
        Buen dia sus datos de acceso a <strong>GLAMA</strong> son:
        <br><br>
        <strong>Usuario:</strong> '.$rowGetemailForgotPass["email"].'<br><br>
        <strong>Contraseña:</strong> '.$rowGetemailForgotPass["pass"].'
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
        if (!$success) {
            echo "false";
        }else{
            echo "true";
        }
    }
    else{
        echo "false";
    }
}
?>