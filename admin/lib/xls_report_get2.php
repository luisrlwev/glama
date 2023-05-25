<?php
    header('Content-type:application/xls');
    header('Content-Disposition: attachment; filename=reporteNewsletter.xls');
    
    include("conexionDB.php");
    
    $sqlConsultUsers = "SELECT * 
    FROM newsletter";
    $resultUsers = mysqli_query($ConexMySQL, $sqlConsultUsers);
    echo "<table>
    <thead>
      <tr>
      <th scope='col'>Nombre</th>
      <th scope='col'>Correo</th>
      <th scope='col'>Empresa</th>
      <th scope='col'>Pais</th>
      </tr>
    </thead>
    <tbody>";
    while ($UsersRes = $resultUsers->fetch_array()) {
      
        echo "<tr>";
        echo "<td>".$UsersRes['nombre']."</td>
        <td><a href='mailto:".$UsersRes['email']."'>".$UsersRes['email']."</a></td>
        <td>".$UsersRes['empresa']."</td>
        <td>".$UsersRes['pais']."</td>";
      }
    echo "</tbody>
    </table>";
?>