<?php
if(isset($_REQUEST['login'])){
  $results = login($conn, $username, $password);

  foreach($results as $r){

    $pwd_check = password_verify($password, $r['password']);

    if($pwd_check){
      $_SESSION['username'] = $r['username'];
      $_SESSION['tipo'] = $r['tipo'];
    }

  }
}
?>
