<?php
include "banner.php";
include "../model/dataBaseConnection.php";
include "../controller/retrieveLoginInfo.php";
include "../model/getUserData.php";
include "../controller/login.php";
include "../controller/logout.php";
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

<form method="POST">
  <button name="logout">Logout</button>
</form>
<?php }?>
</body>
</html>
