<?php

session_start();

// importar logica de loggeo
include "php/sesionManager.php";
include "view/banner.php"

?>

    <?php if(empty($_SESSION['username'])){?>
        <div class="container my-5">

            <form method="POST">
                <h2>Login</h2>
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" name="login">Login</button>
            </form>

        </div>
    <?php }?>

    <?php if(!empty($_SESSION['username'])){?>
        <div>
            <h1>Hello <?php echo $_SESSION['username'];?></h1>
        </div>

        <form method="POST">
            <button name="logout">Logout</button>
        </form>
    <?php }?>
  </body>
</html>
