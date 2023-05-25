<?php
include "conexionDB.php";
session_start();
$emailLogin = $_POST["emailsesion"];
$passLogin = $_POST["contrasenasesion"];

if(isset($emailLogin) && isset($passLogin)){
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


        echo "true";
    }
    else{
        echo "false";
    }
}
?>