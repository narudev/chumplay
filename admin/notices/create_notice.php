<?php
include "../../lib/Notices.php";

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
        <a href="../players.php"><i class="fa fa-solid fa-users fa-sm"></i>Usuarios</a>
        <a class="active" href="../notices.php"><i class="fa fa-solid fa-users fa-sm"></i>Noticias</a>

    </div>

    <div class="content">
        <?php
        //Control de las acciones a realizar
        if (isset($_POST["accion"])) {
            //Generamos el nuevo objeto
            $notice = new Notices();
           
            //Registro de noticia
            
                if ($_POST["accion"] == "notice") {

                        $datenow = date_create()->format('Y-m-d H:i:s');
                        

                        $noticeInsert = $notice->insertNotice(
                            $_POST["title"],
                            $_POST["article"],
                            $datenow
                        );
                        if ($noticeInsert != null) {
                            ?>
                            <h1>Insertar Noticia</h1>
                            <h2>Noticia introducida correctamente</h2>
                            
                            <?php
                        } else {
                            //Noticia no insertada
                            echo "<h1>Noticia</h1>";
                            echo "<h2>La noticia no ha sido insertado. Revisa los datos</h2></br>";
                            echo "<a  class='a_players' href=new_notice.php>Volver</a>";
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