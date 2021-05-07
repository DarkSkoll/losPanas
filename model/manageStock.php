<?php
include "dataBaseConnection.php";

function reducirStock($cantidad){
  $sql = "INSERT INTO `menu`(`nombre`, `descripcion`, `precio`, `tipo`, `stock`, `image`) VALUES ('$nombre','$descripcion','$precio','$tipo','15','$imagen')";
  if(mysqli_query($conn, $sql)){
    echo "Cambio en la base de datos";
  } else {
    echo "ERROR: no se pudo ejecutar $sql. " . mysqli_error($conn);
  }
}
?>
