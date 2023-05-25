<?php
include "conexionDB.php";
session_start();
$nameRegistro = $_POST["nombrereg"];
$emailRegistro = $_POST["emailreg"];
$empresaRegistro = $_POST["empresareg"];
$passRegistro = $_POST["contrasenareg"];

// VALIDAMOS QUE EXISTEN TODOS LOS DATOS REQUERIDOS DEL FORMULARIO
if(isset($nameRegistro) && isset($empresaRegistro) && isset($emailRegistro) && isset($passRegistro)){
    // HACEMOS CONSULTA DE SI YA EXISTE ALGUN USUARIO CON EL TELEFONO O EMAIL
    $sqlConsult = "SELECT * 
                    FROM usuarios
                    WHERE email = '$emailRegistro'";
    $resultRegExist = mysqli_query($ConexMySQL, $sqlConsult);
    
    // SI YA EXISTE ALGUN REGISTRO NOTIFICAMOS QUE EL REGISTRO NO SE PUEDE LLEVAR ACABO
    $row_RegExist = mysqli_num_rows($resultRegExist);
    if ($row_RegExist > 0) {
        echo "existUser";
    }
    else{
        // GRABAMOS EL REGISTRO DE NUESTRO USUARIO
        $sqlRecord = "INSERT INTO usuarios 
        (nombre, email, empresa, pass)
        VALUES ('$nameRegistro',
                '$emailRegistro',
                '$empresaRegistro',
                '$passRegistro')";
            
            if (mysqli_query($ConexMySQL, $sqlRecord)) {

                //UNA VEZ REALIZADO EL REGISTRO OBTENEMOS EL ID DE USUARIO DENTRO DE LA DB
                $sqlGetIdDB = "SELECT * FROM usuarios WHERE email='$emailRegistro' AND pass='$passRegistro'"; 
                $resultGetId = $ConexMySQL->query($sqlGetIdDB);
                if($rowGetId = mysqli_fetch_assoc($resultGetId)) {

                    $_SESSION['id'] = $rowGetId['id'];
                    $_SESSION['nombre'] = $rowGetId['nombre'];
                    $_SESSION['email'] = $rowGetId['email'];

                    echo "true";
                  }
              } else {
                echo "false";
              }
    }
}else{
    echo "false";
}
?>