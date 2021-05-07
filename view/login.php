<?php
include "banner.php";
include "../model/dataBaseConnection.php";
include "../controller/retrieveLoginInfo.php";
include "../model/getUserData.php";
include "../model/getRegistro.php";
include "../controller/login.php";
include "../controller/logout.php";
include "../controller/pagar.php";
?>

<?php if(empty($_SESSION['username'])){?>
<div class="logger">

  <form method="POST">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Usuario">
    <input type="password" name="password" placeholder="Contraseña">
    <button type="submit" name="login">Login</button>
  </form>

</div>
<?php }?>

<?php if(!empty($_SESSION['username'])){?>
<div>
  <h1>Hola <?php echo $_SESSION['username'];?></h1>
</div>

<?php if($_SESSION["tipo"] == "cliente"){
$cuenta = $_SESSION["cuenta"];
$total = $_SESSION["total"];
?>
<div class="cuenta">
  <h1>Cuenta</h1>
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
<form method="POST">
  <button name="pagar">Pagar</button>
</form>
<?php }elseif($_SESSION["tipo"] == "administrador"){ ?>
<?php
$registro = getAllReg($conn);
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
    <?php } ?>
    <?php $total += $item["ganancia"]; ?>
    <tr>
      <td>Total</td>
      <td>$<?php echo $total ?></td>
    </tr>
  </table>
</div>
<?php } ?>
<form method="POST">
  <button name="logout">Logout</button>
</form>
<?php }?>
</body>
</html>
