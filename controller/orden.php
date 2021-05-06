<?php
include "../model/dataBaseConnection.php";
include "../model/getMenuData.php";

if (isset($_GET['ordenar'])) {
  $results = getAllMenu($conn);
  $total = 0;
  foreach ($results as $item) {
    $cantidad = $_GET[$item['platilloID']];
    $total += $cantidad*$item['precio'];
  }
  echo "El total es $total";
}
elseif (isset($_GET['cerrarCuenta'])){
  echo "Usted es mesero";
}
elseif (isset($_GET['finalizarDia'])){
  echo "Usted es admin";
}
?>
