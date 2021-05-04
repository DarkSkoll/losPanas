<?php
include "banner.php";
include "../model/dataBaseConnection.php";
include "../model/getMenuData.php";
?>
<form method="get" action="../controller/orden.php">
  <div class="ordena" id="entradas">
    <h1>Entradas</h1>
    <?php $results = getMenuType($conn,"entrada"); ?>
    <?php foreach ($results as $r){ ?>
    <label><?php echo $r['nombre'] ?></label>
    <select name="<?php echo $r['nombre'] ?>">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select><br></br>
    <?php } ?>
  </div>
  <div class="ordena" id="sopas">
    <h1>Sopas</h1>
    <?php $results = getMenuType($conn,"sopa"); ?>
    <?php foreach ($results as $r){ ?>
    <label><?php echo $r['nombre'] ?></label>
    <select name="<?php echo $r['nombre'] ?>">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select><br></br>
    <?php } ?>
  </div>
  <div class="ordena" id="ensaladas">
    <h1>Ensaladas</h1>
    <?php $results = getMenuType($conn,"ensalada"); ?>
    <?php foreach ($results as $r){ ?>
    <label><?php echo $r['nombre'] ?></label>
    <select name="<?php echo $r['nombre'] ?>">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select><br></br>
    <?php } ?>
  </div>
  <div class="ordena" id="platosFuertes">
    <h1>Platos Fuertes</h1>
    <?php $results = getMenuType($conn,"platoFuerte"); ?>
    <?php foreach ($results as $r){ ?>
    <label><?php echo $r['nombre'] ?></label>
    <select name="<?php echo $r['nombre'] ?>">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select><br></br>
    <?php } ?>
  </div>
  <div class="ordena" id="bebidas">
    <h1>Bebidas</h1>
    <?php $results = getMenuType($conn,"bebida"); ?>
    <?php foreach ($results as $r){ ?>
    <label><?php echo $r['nombre'] ?></label>
    <select name="<?php echo $r['nombre'] ?>">
      <option value="0">0</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select><br></br>
    <?php } ?>
    <div class="ordena" id="postres">
      <h1>Postres</h1>
      <?php $results = getMenuType($conn,"postre"); ?>
      <?php foreach ($results as $r){ ?>
      <label><?php echo $r['nombre'] ?></label>
      <select name="<?php echo $r['nombre'] ?>">
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select><br></br>
      <?php } ?>
    </div>
    <?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "administrador"){ ?>
    <button class="botones" name="finalizarDia">Finalizar Día</button>
    <?php } ?>
    <?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "mesero"){ ?>
    <button class="botones" name="cerrarCuenta">Cerrar cuenta</button>
    <?php } ?>
    <?php if(!empty($_SESSION['username']) && $_SESSION['tipo'] == "cliente"){ ?>
    <button class="botones" name="ordenar" value="Get Selected Values">Ordenar</button>
    <?php } ?>
</form>
</body>
</html>
