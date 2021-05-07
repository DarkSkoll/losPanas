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

function reducirStock($cantidad,$cantidadOri,$nombre,$conn){
  $cantidadOri-=$cantidad;
  $sql = "UPDATE `menu` SET `stock`='$cantidadOri' WHERE `nombre`='$nombre'";
  if(mysqli_query($conn, $sql)){
    echo "Cambio en la base de datos";
  } else {
    echo "ERROR: no se pudo ejecutar $sql. " . mysqli_error($conn);
  }
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
      $cantidadOri = $item["stock"];
      reducirStock($cantidad,$cantidadOri,$item["nombre"],$conn);
      if(!is_null($key)){
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
