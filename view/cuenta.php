<?php
include "banner.php";
$cuenta = $_SESSION["cuenta"];
$total = $_SESSION["total"];
?>

<div class="cuenta">
  <h1>Cuenta <?php echo $_SESSION['username']; ?>:</h1>
  <table>
    <tr>
      <th>Platillo</th>
      <th>Cantidad</th>
      <th>Precio Unitario</th>
      <th>Precio Total</th>
    </tr>
    <?php foreach ($cuenta as $item) { ?>
    <tr>
      <td><?php echo $item["nombre"]; ?></td>
      <td><?php echo $item["cantidad"]; ?></td>
      <td>$<?php echo $item["unitario"]; ?></td>
      <td>$<?php echo $item["total"]; ?></td>
    </tr>
    <?php } ?>
    <tr>
      <td>Total</td>
      <td>$<?php echo $total ?></td>
    </tr>
  </table>
</div>

