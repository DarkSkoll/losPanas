<?php
function login($conn, $username, $password){
  $sql = "SELECT * FROM usuarios WHERE username = '$username'";
  $query = mysqli_query($conn, $sql);
  return $query;
}
?>
