<?php
include "banner.php";
include "../model/dataBaseConnection.php";
include "../model/getMenuData.php";
?>

<div class="menu" id="entradas">
  <h1>Entradas</h1>
  <?php $results = getMenuType($conn,"entrada"); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <figure>
    <img src="images/menu/<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>


<div class="menu" id="sopas">
  <?php $results = getMenuType($conn,"sopa"); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <figure>
    <img src="images/menu/<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>



<div class="menu" id="ensaladas">
  <?php $results = getMenuType($conn,"ensalada"); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <figure>
    <img src="images/menu/<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>


<div class="menu" id="platosFuertes">
  <?php $results = getMenuType($conn,"platoFuerte"); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <figure>
    <img src="images/menu/<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>



<div class="menu" id="bebidas">
  <?php $results = getMenuType($conn,"bebida"); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <figure>
    <img src="images/menu/<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>




<div class="menu" id="postres">
  <?php $results = getMenuType($conn,"postre"); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <figure>
    <img src="images/menu/<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>



</body>
</html>
