<?php
include "../model/dataBaseConnection.php";

if(isset($_REQUEST['cerrar'])){
  $sql = "UPDATE `menu` SET `stock`='15' WHERE 1";
  if(mysqli_query($conn, $sql)){
    echo "Cambio en la base de datos";
  } else {
    echo "ERROR: no se pudo ejecutar $sql. " . mysqli_error($conn);
  }
  header("Location: /losPanas/view/login.php");
}
?>
