<?php
if(isset($_REQUEST['logout'])){
  session_destroy();
  header("Location: /losPanas/view/login.php");
  exit();
}
?>
