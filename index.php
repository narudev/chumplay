<?php
include "lib/Notices.php";
$notices = new Notices();
$resultado = $notices->listNotices();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="icon" type="image/x-icon" href="img/favicon-32x32.png">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">  
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js" integrity="sha512-5qbIAL4qJ/FSsWfIq5Pd0qbqoZpk5NcUVeAAREV2Li4EKzyJDEGlADHhHOSSCw0tHP7z3Q4hNHJXa81P92borQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/locale/es.min.js"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Scripts -->
    <script type="text/javascript" defer src="js/main.js"></script>
    <script type="text/javascript" defer src="js/notices.js"></script>
    <title>ChumPlay - Noticias</title>
</head>

<body>

    <div class="sidebar">

        <img src="img/logo.png" alt="ChumPlay" title="ChumPlay">

        <a class="active" href="index.php"> <i class="fa fa-home fa-sm"></i>Noticias</a>
        <a href="play.php"><i class="fa fa-solid fa-futbol fa-sm"></i>Jugar</a>
        <a href="rating.php"><i class="fa fa-solid fa-table-list fa-sm"></i>Clasificación</a>
        <a href="rules.php"><i class="fa fa-solid fa-question fa-sm"></i>Reglas</a>
        <a href="profile.php"><i class="fa fa-solid fa-user fa-sm"></i>Perfil</a>
        <hr>
        <label class="admin">Administración</label>
        <a href="admin/create_cup.php"><i class="fa fa-solid fa-trophy fa-sm"></i>Torneo</a>
        <a href="admin/players.php"><i class="fa fa-solid fa-users fa-sm"></i>Usuarios</a>
        <a href="admin/notices.php"><i class="fa fa-solid fa-file-lines"></i>Noticias</a>
        

    </div>

    <div class="content">
        <h1>Noticias</h1>
        <section id="content">
            <!--<div id="posts">
                 Cargar posts desde json 
            </div> -->
        <?php

            while ($row = $resultado->fetch_assoc()) { ?>
            
            <h2><?php echo $row['title']; ?></h2>
            <p>
                <?php echo $row['article']; ?>
            </p>
            <span class="date">Creado <?php
                $date = date_create($row['created']); 
                echo date_format($date, 'd/m/Y H:i:s' ); 
            ?></span>
            <!--<span class="date">Creado : <?php echo $row['created']; ?></span>-->
            <hr>
        <?php } ?>

        </section>
    </div>
    <div class="footer">
        Javier Durán - Desarrollo de Aplicaciones Web - Cesur
    </div>
</body>

</html>