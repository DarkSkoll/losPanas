<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="view/css/styles.css" type="text/css">
    <title>Los Panas</title>
  </head>
  <body>
    <header>
      <div id="fondoLogo">
        <img src="view/images/logoNoBg.png" alt="Los Panas" class="center" width="15%"/>
      </div>
    </header>
    <nav>
      <a href="index.php" class="linkBarra">Inicio</a>
      <a href="view/menu.php" class="linkBarra">Menu</a>
      <a href="view/ordena.php" class="linkBarra">Ordena</a>
      <?php if(empty($_SESSION['username'])){?>
      <a href="view/login.php" class="linkBarra">Iniciar Sesión</a>
      <?php }?>
      <?php if(!empty($_SESSION['username'])){?>
      <a href="view/login.php" class="linkBarra">Cuenta</a>
      <?php }?>
    </nav>
    <img src="view/images/slide/img3.jpg" alt="platillo" class="center" width="100%"/>
    <div class="nosotros">
      <h1>Nosotros</h1>
      <figure>
        <img src="view/images/gente.jpg" alt="gente" width="40%"/>
        <figcaption>Gente, sonrisas y celebraciones enmarcadas por paisajes de ensueño que afirman la alegría del andar. Sabores, aromas y texturas que mantienen vivo el recuerdo de instantes que se fusionan con la expresión de lo esencial. Una tierra llena de virtudes, relata mitos y leyendas de aquellos hombres de buena fortuna, que se han puesto el mundo por montera para entrar por la puerta grande.</figcaption>
      </figure>
      <figure>
        <figcaption>Porque preservar la tradición y evocar nuestro origen a través de uno de los actos más representativos de la historia de la humanidad, mantiene viva nuestra identidad; asumimos y respetamos las memorias de nuestra cultura para proyectarlas con orgullo a las nuevas generaciones. Queremos consolidar un legado que sea una reserva testimonial de valores que se fortalecen con el tiempo, para mostrar los 365 días del año nuestro aprecio por la oportunidad de servir a quienes más nos importan.</figcaption>
        <img src="view/images/lugar.jpg" alt="local" width="50%"/>
      </figure>
      <figure>
        <img src="view/images/slide/img2.jpg" alt="gente" width="40%"/>
        <figcaption>Desde <b>1985</b> somos el corazón de sueños que se cocinan a fuego lento donde la tradicion y la auténtica sazón de la cocina española hace posible la experiencia del buen comer.</figcaption>
      </figure>
    </div>
  </body>
</html>
