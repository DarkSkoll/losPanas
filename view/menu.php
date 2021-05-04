<?php
include "banner.php";
include "../model/dataBaseConnection.php";
include "../model/getMenuData.php";
?>

  <?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "administrador"){ ?>
  <form method="get" action="anadir.php">
    <input type="submit" value="Añadir">
  </form>
  <?php } ?>

<div class="menu" id="entradas">
  <h1>Entradas</h1>
  <?php $results = getMenuType($conn,"entrada"); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "administrador"){ ?>
  <form method="get" action="editor.php">
    <input type="hidden" name="nombrePlatillo" value="<?php echo $r['nombre']; ?>">
    <input type="submit" value="Editar">
  </form>
  <?php } ?>
  <figure>
    <img src="<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>


<div class="menu" id="sopas">
  <h1>Sopas</h1>
  <?php $results = getMenuType($conn,"sopa"); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "administrador"){ ?>
  <form method="get" action="editor.php">
    <input type="hidden" name="nombrePlatillo" value="<?php echo $r['nombre']; ?>">
    <input type="submit" value="Editar">
  </form>
  <?php } ?>
  <figure>
    <img src="<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>



<div class="menu" id="ensaladas">
  <h1>Ensaladas</h1>
  <?php $results = getMenuType($conn,"ensalada"); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "administrador"){ ?>
  <form method="get" action="editor.php">
    <input type="hidden" name="nombrePlatillo" value="<?php echo $r['nombre']; ?>">
    <input type="submit" value="Editar">
  </form>
  <?php } ?>
  <figure>
    <img src="<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>


<div class="menu" id="platosFuertes">
  <h1>Platos Fuertes</h1>
  <?php $results = getMenuType($conn,"platoFuerte"); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "administrador"){ ?>
  <form method="get" action="editor.php">
    <input type="hidden" name="nombrePlatillo" value="<?php echo $r['nombre']; ?>">
    <input type="submit" value="Editar">
  </form>
  <?php } ?>
  <figure>
    <img src="<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>



<div class="menu" id="bebidas">
  <h1>Bebidas</h1>
  <?php $results = getMenuType($conn,"bebida"); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "administrador"){ ?>
  <form method="get" action="editor.php">
    <input type="hidden" name="nombrePlatillo" value="<?php echo $r['nombre']; ?>">
    <input type="submit" value="Editar">
  </form>
  <?php } ?>
  <figure>
    <img src="<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>




<div class="menu" id="postres">
  <h1>Postres</h1>
  <?php $results = getMenuType($conn,"postre"); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "administrador"){ ?>
  <form method="get" action="editor.php">
    <input type="hidden" name="nombrePlatillo" value="<?php echo $r['nombre']; ?>">
    <input type="submit" value="Editar">
  </form>
  <?php } ?>
  <figure>
    <img src="<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>



</body>
</html>
