<?php
include "dataBaseConnection.php";

$nombreOri = $_GET['nombreOri'];
$nombre = $_GET['nombre'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];
$tipo = $_GET['tipo'];
$imagen = $_GET['imagen'];

if (isset($_GET['actualizar'])) {
  $sql = "UPDATE `menu` SET `nombre`='$nombre',`descripcion`='$descripcion',`precio`='$precio',`tipo`='$tipo',`image`='$imagen' WHERE `nombre`='$nombreOri'";
  if(mysqli_query($conn, $sql)){
    echo "Cambio en la base de datos";
  } else {
    echo "ERROR: no se pudo ejecutar $sql. " . mysqli_error($conn);
  }
  header("Location: /losPanas/view/menu.php");
}
elseif (isset($_GET['borrar'])) {
  $sql = "DELETE FROM `menu` WHERE `nombre`='$nombreOri'";
  if(mysqli_query($conn, $sql)){
    echo "Cambio en la base de datos";
  } else {
    echo "ERROR: no se pudo ejecutar $sql. " . mysqli_error($conn);
  }
  header("Location: /losPanas/view/menu.php");
}
?>
