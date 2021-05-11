<?php
include "banner.php";
include "../model/dataBaseConnection.php";
include "../controller/retrieveLoginInfo.php";
include "../model/getUserData.php";
include "../model/getRegistro.php";
include "../controller/login.php";
include "../controller/logout.php";
include "../controller/pagar.php";
include "../controller/cerrar.php";
?>

<?php if(empty($_SESSION['username'])){?>
<br></br>
<div class="logger">
  <form method="POST">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Usuario">
    <input type="password" name="password" placeholder="Contraseña"><br></br>
    <button type="submit" name="login">Login</button>
  </form>

</div>
<?php }?>

<?php if(!empty($_SESSION['username'])){?>
<div class="cuenta">
  <h1>Hola <?php echo $_SESSION['username'];?></h1>
</div>

<?php if($_SESSION["tipo"] == "cliente"){
$cuenta = $_SESSION["cuenta"];
$total = $_SESSION["total"];
?>
<div class="cuenta">
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
      <td></td>
      <td></td>
      <td>$<?php echo $total ?></td>
    </tr>
  </table>
</div>
<form class="sesion" method="POST">
  <button name="pagar">Pagar</button>
<?php }elseif($_SESSION["tipo"] == "administrador"){ ?>
<?php
$registro = getDayReg($conn);
$total = 0;
?>
<div class="cuenta">
  <table>
    <tr>
      <th>ID Pedido</th>
      <th>Fecha</th>
      <th>Total</th>
    </tr>
    <?php foreach ($registro as $item) { ?>
    <tr>
      <td><?php echo $item["idPedido"]; ?></td>
      <td><?php echo $item["fecha"]; ?></td>
      <td>$<?php echo $item["ganancia"]; ?></td>
    </tr>
    <?php $total += $item["ganancia"]; ?>
    <?php } ?>
    <tr>
      <td>Total</td>
      <td></td>
      <td>$<?php echo $total ?></td>
    </tr>
  </table>
</div>
<br></br>
<form class="sesion" method="POST">
  <button name="cerrar">Cerrar Día</button>
<?php } ?>
  <button name="logout">Logout</button>
</form>
<?php }?>
</body>
</html>
