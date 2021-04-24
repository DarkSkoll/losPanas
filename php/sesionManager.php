<?php

//Conexion base de datos
$servername = "localhost";
$username = "darkskoll";
$password = "archlinux";
$dataBase = "losPanas";

$conn = new mysqli($servername, $username, $password, $dataBase);

if(!$conn){
  echo "<h3>Fallo en la conexion</h3>";
}

//lectura de la forma

if(isset($_REQUEST['login'])){
  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];
}

//Recuperar de la base de datos

function login($conn, $username, $password){
  $sql = "SELECT * FROM usuarios WHERE username = '$username'";
  $query = mysqli_query($conn, $sql);
  return $query;
}

//conectarse y desconectarse

if(isset($_REQUEST['login'])){
  $results = login($conn, $username, $password);

  foreach($results as $r){

    $pwd_check = password_verify($password, $r['password']);

    if($pwd_check){
      $_SESSION['username'] = $r['username'];
    }

  }
}

if(isset($_REQUEST['logout'])){
  session_destroy();
  header("Location: /losPanas/login.php");
  exit();
}
?>
