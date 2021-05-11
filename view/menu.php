<?php
include "banner.php";
include "../model/dataBaseConnection.php";
include "../model/getMenuData.php";
$tipos = array("Entradas","Sopas","Ensaladas","Platos Fuertes","Bebidas","Postres");
?>


<?php function imprimirFormaOrden($tipo,$conn){ ?>
<div class="menu" id="<?php echo $tipo; ?>">
  <h1><?php echo $tipo ?></h1>
  <?php $results = getMenuType($conn,$tipo); ?>
  <?php foreach ($results as $r){ ?>
  <h2><?php echo $r['nombre']; ?></h2>
  <?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "administrador"){ ?>
  <form method="get" action="editor.php">
    <input type="hidden" name="nombrePlatillo" value="<?php echo $r['nombre']; ?>">
    <button type="submit" value="Editar">Editar</button>
  </form>
  <?php } ?>
  <figure>
    <img src="<?php echo $r['image']; ?>" width="100%"/>
    <figcaption><?php echo $r['descripcion']; ?><br></br>$<?php printf("%.2F", $r['precio']); ?></figcaption>
  </figure>
  <?php } ?>
</div>
<?php } ?>

<?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "administrador"){ ?>
<form method="get" action="anadir.php">
  <button type="submit" value="Añadir">Añadir</button>
</form>
<?php } ?>

<?php foreach ($tipos as $value) {
  imprimirFormaOrden($value,$conn);
} ?>

</body>
</html>
