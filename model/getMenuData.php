<?php
function getMenuType($conn, $tipo){
  $sql = "SELECT * FROM menu WHERE tipo = '$tipo'";
  $query = mysqli_query($conn, $sql);
  return $query;
}

function getMenuItem($conn, $nombre){
  $sql = "SELECT * FROM menu WHERE nombre = '$nombre'";
  $query = mysqli_query($conn, $sql);
  return $query;
}

function getAllMenu($conn){
  $sql = "SELECT * FROM menu WHERE 1";
  $query = mysqli_query($conn, $sql);
  return $query;
}
?>
