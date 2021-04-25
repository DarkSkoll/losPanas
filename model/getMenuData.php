<?php
function getMenuType($conn, $tipo){
  $sql = "SELECT * FROM menu WHERE tipo = '$tipo'";
  $query = mysqli_query($conn, $sql);
  return $query;
}
?>
