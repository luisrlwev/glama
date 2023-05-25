<?php
    header('Content-type:application/xls');
    header('Content-Disposition: attachment; filename=reporteUsuarios.xls');
    
    include("conexionDB.php");
    
    $sqlConsultUsers = "SELECT * 
    FROM usuarios
    ORDER BY fecha DESC";
    $resultUsers = mysqli_query($ConexMySQL, $sqlConsultUsers);
    echo "<table>
    <thead>
      <tr>
      <th scope='col'>Id</th>
      <th scope='col'>Nombre</th>
      <th scope='col'>Correo</th>
      <th scope='col'>Empresa</th>
      <th scope='col'>Fecha de registro</th>
      </tr>
    </thead>
    <tbody>";
    while ($UsersRes = $resultUsers->fetch_array()) {
      
        echo "<tr>";
        echo "  <th scope='row'>".$UsersRes['id']."</th>
        <td>".$UsersRes['nombre']."</td>
        <td><a href='mailto:".$UsersRes['email']."'>".$UsersRes['email']."</a></td>
        <td>".$UsersRes['empresa']."</td>
        <td>".$UsersRes['fecha']."</td>";
      }
    echo "</tbody>
    </table>";
?>