<?php
if(isset($_REQUEST['logout'])){
  if($_SESSION["total"] != 0 && $_SESSION["tipo"] == "cliente"){
    echo "<script>alert(\"Por favor realice su pago\");</script>";
    return;
  }
  session_destroy();
  header("Location: /losPanas/view/login.php");
  exit();
}
?>
