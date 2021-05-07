<?php
include "../model/dataBaseConnection.php";

if(isset($_REQUEST['pagar'])){
  $total = $_SESSION["total"];
  if($total == 0) return;
  $sql = "INSERT INTO `Registro`(`fecha`, `ganancia`) VALUES (CURDATE(),'$total')";
  if(mysqli_query($conn, $sql)){
    echo "Cambio en la base de datos";
  } else {
    echo "ERROR: no se pudo ejecutar $sql. " . mysqli_error($conn);
  }
  $_SESSION["total"] = 0;
  $_SESSION["cuenta"] = array();;
  header("Location: /losPanas/view/login.php");
}
?>
