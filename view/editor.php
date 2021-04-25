<?php
include "banner.php";
include "../model/dataBaseConnection.php";
include "../model/getMenuData.php";
$nombreOri = $_GET['nombrePlatillo'];
$results = getMenuItem($conn,$nombre);
foreach ($results as $r) {
  $descripcionOri = $r['descripcion'];
  $precioOri = $r['precio'];
}
?>
<form method="get" accept-charset="utf-8">
  <label for="nombre">Nombre :</label><br></br>
  <input type="text" name="nombre" value="<?php echo $nombreOri; ?>" size="80"><br></br>
  <label for="descripcion">Descripción :</label><br></br>
  <input type="text" name="descripcion" value="<?php echo $descripcionOri; ?>" size="80"></textarea><br></br>
<label for="nombre">Precio :</label><br></br>
<input type="text" name="nombre" value="<?php printf("%.2F",$precioOri); ?>" size="20"><br></br>
<input type="submit" name="actualizar" value="Actualizar">
<input type="submit" name="borrar" value="Eliminar">
</form>
<?php
if (isset($_GET['actualizar'])) {
  $sql = "UPDATE menu SET nombre=$nombre, descripcion=$descripcion, precio=$precio WHERE nombre=$nombreOri";
  mysqli_query($conn,$sql);
  header("Location: /losPanas/view/menu.php");
}
elseif (isset($_GET['borrar'])) {
  header("Location: /losPanas/view/menu.php");
}
?>
