<?php
include "banner.php";
include "../model/dataBaseConnection.php";
?>
<form method="get" accept-charset="utf-8" action="../model/addMenuItem.php">
  <label for="nombre">Nombre :</label><br></br>
  <input type="text" name="nombre" value="" size="80"><br></br>
  <label for="descripcion">Descripción :</label><br></br>
  <input type="text" name="descripcion" value="" size="80"></textarea><br></br>
  <label for="precio">Precio :</label><br></br>
  <input type="text" name="precio" value="" size="20"><br></br>
  <label for="precio">Imagen :</label><br></br>
  <input type="text" name="imagen" value="" size="20"><br></br>
  <label for="precio">Tipo :</label><br></br>
  <input type="text" name="tipo" value="" size="20"><br></br>
  <input type="submit" name="actualizar" value="Añadir">
</form>
