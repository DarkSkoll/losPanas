<?php
include "../model/dataBaseConnection.php";
include "../model/getMenuData.php";

session_start();

function buscarEnCuenta($nombre, $array) {
  foreach ($array as $key => $val) {
    if ($val["nombre"] === $nombre) {
      return $key;
    }
  }
  return null;
}

$totalDia = 0;
$total = $_SESSION['total'];
$tmp = null;
if (isset($_GET['ordenar'])) {
  $cuenta = $_SESSION['cuenta'];
  $results = getAllMenu($conn);
  foreach ($results as $item) {
    $cantidad = $_GET[$item['platilloID']];
    if($cantidad != 0){
      $precioUnitario = $item['precio'];
      $precioTotal = $precioUnitario*$cantidad;
      $key = buscarEnCuenta($item["nombre"],$cuenta);
      echo $key;
      if(!is_null($key)){
        echo $cuenta[$key]["nombre"];
        echo $cuenta[$key]["cantidad"];
        echo $cuenta[$key]["unitario"];
        echo $cuenta[$key]["total"];
        $cuenta[$key]["cantidad"] += $cantidad;
        $cuenta[$key]["total"] += $precioTotal;
      }else{
        $tmp = array(
          "nombre" => $item["nombre"],
          "cantidad" => $cantidad,
          "unitario" => $precioUnitario,
          "total" => $precioTotal);
        array_push($cuenta,$tmp);
      }
      $total += $precioTotal;
    }
  }
  $_SESSION['cuenta'] = $cuenta;
  $_SESSION['total'] = $total;
  header("Location: /losPanas/view/login.php");
}
elseif (isset($_GET['cerrarCuenta'])){
  echo "Usted es mesero";
}
elseif (isset($_GET['finalizarDia'])){
  echo "Usted es admin";
}
?>
