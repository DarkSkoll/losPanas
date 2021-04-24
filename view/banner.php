<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <title>Los Panas</title>
  </head>
  <body>
    <header>
      <div id="fondoLogo">
        <img src="images/logoNoBg.png" alt="Los Panas" class="center" width="15%"/>
      </div>
    </header>
    <nav>
      <a href="../index.php" class="linkBarra">Inicio</a>
      <a href="menu.php" class="linkBarra">Menu</a>
      <a href="ordena.php" class="linkBarra">Ordena</a>
      <?php if(empty($_SESSION['username'])){?>
      <a href="login.php" class="linkBarra">Iniciar Sesión</a>
      <?php }?>
      <?php if(!empty($_SESSION['username'])){?>
      <a href="login.php" class="linkBarra">Cuenta</a>
      <?php }?>
    </nav>
