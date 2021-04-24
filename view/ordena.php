<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <title>Ordena - Los Panas</title>
  </head>
  <body>
    <script type="text/javascript" src="scripts/banner.js"></script>
    <form id="formaOrden" method="get" accept-charset="utf-8">
      <div class="ordena" id="entradas">
        <h1>Entradas</h1>
        <label>Chistorra</label>
        <select name="chistorra" id="chistorra">
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
        <label>Pulpo a la Gallega con Cachelos (180 Gr)</label>
        <select name="pulpo" id="pulpo">
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
      </div>
      <div class="ordena" id="sopas">
        <h1>Sopas</h1>
        <label>Jugo de Carne</label>
        <select name="jugoCarne" id="jugoCarne">
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
      </div>
      <div class="ordena" id="ensaladas">
        <h1>Ensaladas</h1>
        <label>Ensalada de Tomate con Queso de Cabra</label>
        <select name="ensalada" id="ensalada">
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
      </div>
      <div class="ordena" id="platosFuertes">
        <h1>Platos Fuertes</h1>
        <label>Solomillo Compostelano (200 Gr)</label>
        <select name="solomillo" id="solomillo">
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
        <label>Arrachera (250 Gr)</label>
        <select name="arrachera" id="arrachera">
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
        <label>Salmón a la Rubio (220 Gr)</label>
        <select name="salmon" id="salmon">
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
      </div>
      <div class="ordena" id="bebidas">
        <h1>Bebidas</h1>
        <label>Limonada de Verano</label>
        <select name="limonada" id="limonada">
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
        <label>Marqués de Riscal ABA</label>
        <select name="marques" id="marques">
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
      </div>
      <div class="ordena" id="postres">
        <h1>Postres</h1>
        <label>Helado de Turrón</label>
        <select name="helado" id="helado">
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
      </div>
    </form>
    <button class="botones" id="ordenar">Ordenar</button>
    <button class="botones" id="finalizar">Finalizar Día</button>
    <script type="text/javascript" src="scripts/ordenar.js"></script>
  </body>
</html>
