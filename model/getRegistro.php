<?php
function getAllReg($conn){
  $sql = "SELECT * FROM Registro WHERE 1";
  $query = mysqli_query($conn, $sql);
  return $query;
}
?>
