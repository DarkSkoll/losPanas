<?php
include "banner.php";
include "../model/dataBaseConnection.php";
include "../model/getMenuData.php";
$nombreOri = $_GET['nombrePlatillo'];
$results = getMenuItem($conn,$nombreOri);
foreach ($results as $r) {
  $descripcionOri = $r['descripcion'];
  $precioOri = $r['precio'];
  $imagenOri = $r['image'];
  $tipoOri = $r['tipo'];
}
$tipos = array("Entradas","Sopas","Ensaladas","Platos Fuertes","Bebidas","Postres");
?>
<br></br><br></br>
<form class="logger" method="get" accept-charset="utf-8" action="../model/updateDB.php">
  <label for="nombre">Nombre :</label><br></br>
  <input type="text" name="nombre" value="<?php echo $nombreOri; ?>" size="80"><br></br>
  <label for="descripcion">Descripción :</label><br></br>
  <input type="text" name="descripcion" value="<?php echo $descripcionOri; ?>" size="80"></textarea><br></br>
  <label for="precio">Precio :</label><br></br>
  <input type="text" name="precio" value="<?php printf("%.2F",$precioOri); ?>" size="80"><br></br>
  <label for="imagen">Imagen :</label><br></br>
  <input type="text" name="imagen" value="<?php echo $imagenOri; ?>" size="80"><br></br>
  <label for="tipo">Tipo :</label><br></br>
  <select name="tipo" id="tipo">
    <?php foreach ($tipos as $value) { ?>
    <?php if(strcmp($value,$tipoOri) == 0 ){ ?>
    <option value="<?php echo $value; ?>" selected><?php echo $value ?></option>
    <?php }else{ ?>
    <option value="<?php echo $value; ?>"><?php echo $value ?></option>
    <?php } ?>
    <?php } ?>
  </select><br></br>
  <input type="hidden" name="nombreOri" value="<?php echo $nombreOri; ?>">
  <button type="submit" name="actualizar" value="Actualizar">Actualizar</button>
  <button type="submit" name="borrar" value="Eliminar">Eliminar</button>
</form>
