<?php
include "banner.php";
include "../model/dataBaseConnection.php";
$tipos = array("Entradas","Sopas","Ensaladas","Platos Fuertes","Bebidas","Postres");
?>
<br></br>
<br></br>
<form class="logger" method="get" accept-charset="utf-8" action="../model/addMenuItem.php">
  <label for="nombre">Nombre :</label><br></br>
  <input type="text" name="nombre" value="" size="80"><br></br>
  <label for="descripcion">Descripción :</label><br></br>
  <input type="text" name="descripcion" value="" size="80"></textarea><br></br>
  <label for="precio">Precio :</label><br></br>
  <input type="text" name="precio" value="" size="20"><br></br>
  <label for="precio">Imagen :</label><br></br>
  <input type="text" name="imagen" value="" size="20"><br></br>
  <label for="tipo">Tipo :</label><br></br>
  <select name="tipo" id="tipo">
    <?php foreach ($tipos as $value) { ?>
    <option value="<?php echo $value; ?>"><?php echo $value ?></option>
    <?php } ?>
  </select><br></br>
  <button type="submit" name="añadir" value="Añadir">Añadir</button>
</form>
