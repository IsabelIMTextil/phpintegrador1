<?php

require "pages/header.php";

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/admin.css">
  </head>
  <body>
    <div class="center">
      
      <form method="post">
        <div class="txt_field">
          <input type="text" required>
          <span></span>
          <label>Usuario</label>
        </div>
        <div class="txt_field">
          <input type="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Olvidó su contraseña?</div>
        <!-- <input type="submit" value="Login" > -->

        <!-- boton login -->
        <?php
                  
                  echo "<td><a class='button [btn btn-primary btn-block]'href='conex.php' target='_blank'>Login</a></td></tr>"; 
?>




        <div class="signup_link">
          No es miembro? <a href="#">Registrarse</a>
        </div>
      </form>
    </div>
    <div class="espacio">

    </div>
  </body>
</html>

<?php
require "pages/footer.php";
?>