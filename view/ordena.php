<?php
include "../model/dataBaseConnection.php";
include "../model/getMenuData.php";
include "banner.php";
$tipos = array("Entradas","Sopas","Ensaladas","Platos Fuertes","Bebidas","Postres");
?>

<?php function imprimirFormaOrden($tipo,$conn){ ?>
<div class="ordena" id="<?php echo $tipo; ?>">
  <h1><?php echo $tipo ?></h1>
  <?php $results = getMenuType($conn,$tipo); ?>
  <?php foreach ($results as $r){ ?>
  <label for="<?php echo $r['platilloID']; ?>"><?php echo $r['nombre']; ?></label>
  <select name="<?php echo $r['platilloID']; ?>">
    <?php for($i = 0; $i <= $r['stock']; $i++){ ?>
    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    <?php } ?>
  </select><br></br>
  <?php } ?>
</div>
<?php } ?>

<form action="../controller/orden.php" method="get" accept-charset="utf-8">
<?php foreach ($tipos as $value) {
imprimirFormaOrden($value,$conn);
  } ?>
  <?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "cliente"){ ?>
  <input type="submit" value="Ordenar" name="ordenar" id="ordenar"/>
  <?php } ?>
</form>
</body>
</html>
