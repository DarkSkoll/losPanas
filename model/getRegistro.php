<?php
function getAllReg($conn){
  $sql = "SELECT * FROM Registro WHERE 1";
  $query = mysqli_query($conn, $sql);
  return $query;
}

function getDayReg($conn){
  $sql = "SELECT * FROM Registro WHERE `fecha`=CURDATE()";
  $query = mysqli_query($conn, $sql);
  return $query;
}
?>
