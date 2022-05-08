<?php
include "../../lib/Users.php";
include "../../lib/Session_Users.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="icon" type="image/x-icon" href="../../img/favicon-32x32.png">
    <link rel="stylesheet" type="text/css" href="../../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js" integrity="sha512-5qbIAL4qJ/FSsWfIq5Pd0qbqoZpk5NcUVeAAREV2Li4EKzyJDEGlADHhHOSSCw0tHP7z3Q4hNHJXa81P92borQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/es.min.js"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Scripts -->
    <script type="text/javascript" defer src="../../js/main.js"></script>
    <script type="text/javascript" defer src="../../js/notices.js"></script>
    <title>ChumPlay - Crear Usuario</title>
</head>

<body>

    <div class="sidebar">

        <img src="../../img/logo.png" alt="ChumPlay" title="ChumPlay">

        <a href="../../index.php"> <i class="fa fa-home fa-sm"></i>Noticias</a>
        <a href="../../play.php"><i class="fa fa-solid fa-futbol fa-sm"></i>Jugar</a>
        <a href="../../rating.php"><i class="fa fa-solid fa-table-list fa-sm"></i>Clasificación</a>
        <a href="../../rules.php"><i class="fa fa-solid fa-question fa-sm"></i>Reglas</a>
        <a href="../../profile.php"><i class="fa fa-solid fa-user fa-sm"></i>Perfil</a>
        <hr>
        <label class="admin">Administración</label>
        <a href="../create_cup.php"><i class="fa fa-solid fa-trophy fa-sm"></i>Torneo</a>
        <a class="active" href="../players.php"><i class="fa fa-solid fa-users fa-sm"></i>Usuarios</a>
        <a href="../notices.php"><i class="fa fa-solid fa-users fa-sm"></i>Noticias</a>

    </div>

    <div class="content">
        <?php
        //Control de las acciones a realizar
        if (isset($_POST["accion"])) {
            //Generamos el nuevo objeto
            $user = new Users();
            $seguridad = new Session_Users();

            //Registro de usuario
            
                if ($_POST["accion"] == "registro") {


                    if ($_POST["pass0"] == $_POST["pass1"]) {

                        $checkEmail = $user->comprobarEmail($_POST["email"]);

                        if ($checkEmail > 0) {
                            //Email duplicado
                            echo "<h1>Registro Usuario</h1>";
                            echo "<h2>El Email ya existe. Revisa los datos</h2></br>";
                            echo "<a class='a_players' href=new_user.php>Volver</a>";
                            exit();
                        }

                        $usuarioReg = $user->insertarUsuario(
                            $_POST["nombre"],
                            $_POST["apellidos"],
                            $_POST["email"],
                            $_POST["pass0"]
                        );
                        if ($usuarioReg != null) {
                            ?>
                            <h1>Registro Usuario</h1>
                            <h2>Usuario registrado correctamente</h2>
                            
                            <table>
                                <tr>
                                    <td width="20">Nombre</td>
                                    <td width="30"><input type="text" class="form-control" name="nombre" size="25" value="<?php echo $usuarioReg["nombre"]; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width="20">Apellidos</td>
                                    <td width="30"><input type="text" class="form-control" name="apellidos" size="25" value="<?php echo $usuarioReg["apellidos"]; ?> " /></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><input type="text"  class="form-control" name="email" size="25" value="<?php echo $usuarioReg["email"]; ?>" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a class="a_players" href=../players.php>Volver</a>
                                    </td>
                                </tr>
                            </table>
                            <?php
                        } else {
                            //Usuario no insertado
                            echo "<h1>Registro Usuario</h1>";
                            echo "<h2>El usuario no ha sido insertado. Revisa los datos</h2></br>";
                            echo "<a  class='a_players' href=new_user.php>Volver al formulario de registro</a>";
                        }
                    } else {
                        //Contraseñas diferentes
                        echo "<h1>Registro Usuario</h1>";
                        echo "<h2>Las contraseñas no son iguales</h2></br>";
                        echo "<a  class='a_players' href=new_user.php>Volver al formulario de registro</a>";
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
    <div class="footer">
        Javier Durán - Desarrollo de Aplicaciones Web - Cesur
    </div>
</body>

</html>