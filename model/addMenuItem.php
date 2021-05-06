<?php
include "dataBaseConnection.php";

$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];
$imagen = $_GET['imagen'];
$tipo = $_GET['tipo'];

if (isset($_GET['añadir'])) {
  $sql = "INSERT INTO `menu`(`nombre`, `descripcion`, `precio`, `tipo`, `stock`, `image`) VALUES ('$nombre','$descripcion','$precio','$tipo','15','$imagen')";
  if(mysqli_query($conn, $sql)){
    echo "Cambio en la base de datos";
  } else {
    echo "ERROR: no se pudo ejecutar $sql. " . mysqli_error($conn);
  }
  header("Location: /losPanas/view/menu.php");
}
?>
