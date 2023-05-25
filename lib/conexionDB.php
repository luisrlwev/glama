<?php
// $ConexMySQL = new mysqli("localhost", "usuario", "contraseña", "basedatos");
$ConexMySQL = new mysqli("localhost", "comrksbq_glamauser", "{mNmAZK7LV!&", "comrksbq_glama");
if ($ConexMySQL->connect_errno) {
    // echo "Fallo al conectar a MySQL: (" . $ConexMySQL->connect_errno . ") " . $ConexMySQL->connect_error;
}
// echo $ConexMySQL->host_info . "\n";
?>