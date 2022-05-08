<?php
include "../lib/Notices.php";
$notices = new Notices();
$resultado = $notices->listNotices(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="icon" type="image/x-icon" href="../img/favicon-32x32.png">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js" integrity="sha512-5qbIAL4qJ/FSsWfIq5Pd0qbqoZpk5NcUVeAAREV2Li4EKzyJDEGlADHhHOSSCw0tHP7z3Q4hNHJXa81P92borQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/es.min.js"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Scripts -->
    <script type="text/javascript" defer src="../js/main.js"></script>
    <script type="text/javascript" defer src="../js/notices.js"></script>
    <title>ChumPlay - Usuarios</title>
</head>

<body>

    <div class="sidebar">

        <img src="../img/logo.png" alt="ChumPlay" title="ChumPlay">

        <a href="../index.php"> <i class="fa fa-home fa-sm"></i>Noticias</a>
        <a href="../play.php"><i class="fa fa-solid fa-futbol fa-sm"></i>Jugar</a>
        <a href="../rating.php"><i class="fa fa-solid fa-table-list fa-sm"></i>Clasificación</a>
        <a href="../rules.php"><i class="fa fa-solid fa-question fa-sm"></i>Reglas</a>
        <a href="../profile.php"><i class="fa fa-solid fa-user fa-sm"></i>Perfil</a>
        <hr>
        <label class="admin">Administración</label>
        <a href="create_cup.php"><i class="fa fa-solid fa-trophy fa-sm"></i>Torneo</a>
        <a href="players.php"><i class="fa fa-solid fa-users fa-sm"></i>Usuarios</a>
        <a class="active" href="admin/notices.php"><i class="fa fa-solid fa-file-lines"></i>Noticias</a>

    </div>

    <div class="content">
        <h1>Noticias</h1>
        <a class="a_players" href="notices/new_notice.php">Nueva Noticia</a>
        
        <p></p>
        <div class="tbl_users_div">
            <table class="tbl_users">
                <thead>
                    <tr>
                        <th><b>ID</b></th>
                        <th><b>Titulo</b></th>
                        <th><b>Fecha</b></th>
                        <th></th>
                    </tr>
                <tbody>
                    <?php

                    while ($row = $resultado->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?>
                            <td><?php echo $row['title']; ?>
                            </td>
                            <td><?php echo $row['created']; ?>
                            </td>
                            <td>
                            <a href="notices/modify_notice.php?id=<?php echo $row['id']; ?>" title="Modificar"><i class="fa fa-solid fa-pen-to-square"></i></a>
                            <a href="notices/delete_notice.php?id=<?php echo $row['id']; ?>" title="Elminar"><i class="fa fa-solid fa-trash"></i></i></a>
                            </td>
                            <!--
                            <td>
                                <a class="a_players" href="modify_user.php?id=<?php echo $row['id']; ?>">Modificar</a>
                            </td>
                            <td>
                                <a class="a_players" href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                            </td>
                    -->
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="footer">
        Javier Durán - Desarrollo de Aplicaciones Web - Cesur
    </div>
</body>

</html>