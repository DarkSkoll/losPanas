<?php
//Conexion base de datos
$servername = "localhost";
$username = "darkskoll";
$password = "archlinux";
$dataBase = "losPanas";

$conn = new mysqli($servername, $username, $password, $dataBase);

if(!$conn){
  echo "Fallo en la conexion";
}
?>
