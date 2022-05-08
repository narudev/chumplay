<?php
include "./lib/Users.php";
include "./lib/Session_Users.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Fichero de control de seguridad</title>
  <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
  <div>
    <?php
    //Control de las acciones a realizar
    if (isset($_POST["accion"])) {
      //Generamos el nuevo objeto
      $user = new users();
      $seguridad = new Session_Users();

      //Registro de usuario

      if ($_POST["accion"] == "registro") {


        if ($_POST["pass0"] == $_POST["pass1"]) {

          $checkEmail = $user->comprobarEmail($_POST["email"]);

          if ($checkEmail > 1) { 
            //Email duplicado
            echo "<h2>El Email ya existe. Revisa los datos</h2></br>";
            echo "<a href=new_player.php>Volver</a>";
            exit();
          } 

          $usuarioReg = $user->insertarUsuario(
            $_POST["nombre"],
            $_POST["apellidos"],
            $_POST["email"],
            $_POST["pass0"]
          );
          if ($usuarioReg != null) {
            echo "<h2>Usuario registrado correctamente</h2></br>";
            echo "<label>Nombre</label>";
            echo "<input type='text' value=" . $usuarioReg["nombre"] . " readonly>";
            echo "<label>Apellidos</label>";
            echo "<input type='text' value=" . $usuarioReg["apellidos"] . " readonly>";
            echo "<label>Usuario</label>";
            echo "<input type='text' value=" . $usuarioReg["email"] . " readonly>";
            echo "</br><center><a href=login.php>Ir al login</a></center>";
          } else {
            //Usuario no insertado
            echo "<h2>El usuario no ha sido insertado. Revisa los datos</h2></br>";
            echo "<a href=register.php>Volver al formulario de registro</a>";
          }
        } else {
          //Contraseñas diferentes
          echo "<h2>Las contraseñas no son iguales</h2></br>";
          echo "<a href=register.php>Volver al formulario de registro</a>";
        }
      }
      //Login de usuario
      elseif ($_POST["accion"] == "login") {
        if ($seguridad->comprobarRemember()) {
          echo "<h2>Usuario encontrado</h2></br>";
        } else {
          $usuarioReg = $user->buscarUsuario($_POST["usuario"]);
          if ($usurioReg != null) {
            //Comparamos los passwords
            if ($usuarioReg["pass"] == sha1($_POST["pass0"])) {
              echo "<h2>Usuario encontrado</h2></br>";
              if (isset($_POST["remember"])) $seguridad->addUsuario($usuarioReg["usuario"], $usuarioReg["pass"], true);
              else $seguridad->addUsuario($usuarioReg["usuario"], $usuarioReg["pass"], false);
            } else {
              echo "<h2>Las contraseñas no coinciden</h2></br>";
              echo "<a href=login.php>Volver al formulario de login</a>";
            }
          } else {
            echo "<h2>Usuario no encontrado</h2></br>";
            echo "<a href=login.php>Volver al formulario de login</a>";
          }
        }
      }
      //LogOut
      elseif ($_POST["accion"] == "logout") {
        $seguridad->logOut();
        echo "<h2>LogOut</h2></br>";
        echo "<a href=login.php>Volver al formulario de login</a>";
      }
    }
    ?>
  </div>
</body>

</html>