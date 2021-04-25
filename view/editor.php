<?php
include "banner.php";
include "../model/dataBaseConnection.php";
include "../model/getMenuData.php";
$nombreOri = $_GET['nombrePlatillo'];
$results = getMenuItem($conn,$nombreOri);
$descripcionOri = null;
$precioOri = null;
foreach ($results as $r) {
  $descripcionOri = $r['descripcion'];
  $precioOri = $r['precio'];
}
?>
<form method="get" accept-charset="utf-8" action="../model/updateDB.php">
  <label for="nombre">Nombre :</label><br></br>
  <input type="text" name="nombre" value="<?php echo $nombreOri; ?>" size="80"><br></br>
  <label for="descripcion">Descripción :</label><br></br>
  <input type="text" name="descripcion" value="<?php echo $descripcionOri; ?>" size="80"></textarea><br></br>
  <label for="precio">Precio :</label><br></br>
  <input type="text" name="precio" value="<?php printf("%.2F",$precioOri); ?>" size="20"><br></br>
  <input type="hidden" name="nombreOri" value="<?php echo $nombreOri; ?>">
  <input type="submit" name="actualizar" value="Actualizar">
  <input type="submit" name="borrar" value="Eliminar">
</form>
