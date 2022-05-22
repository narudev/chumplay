<?php
include "../../lib/Session_Users.php";
include "../../lib/Cup.php";
include "../../lib/Users.php";

$seguridad = new Session_Users();

$nameuser_session = $seguridad->getUsuario();
$roluser_session = $seguridad->getRol();
$iduser_session = $seguridad->getID();

if (!isset($nameuser_session) || $roluser_session == 0) {
    header("location:index.php");
    exit();
}



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
    <title>ChumPlay - Torneo</title>
</head>

<body>
    <div class="sidebar">
        <img src="../../img/logo.png" alt="ChumPlay" title="ChumPlay">
        <label class="namelogin">Hola <?php echo $nameuser_session; ?></label>

        <a href="../../home.php"> <i class="fa fa-home fa-sm"></i>Noticias</a>
        <a href="../../play.php"><i class="fa fa-solid fa-futbol fa-sm"></i>Jugar</a>
        <a href="../../rating.php"><i class="fa fa-solid fa-table-list fa-sm"></i>Clasificación</a>
        <a href="../../rules.php"><i class="fa fa-solid fa-question fa-sm"></i>Reglas</a>
        <a href="../../profile.php"><i class="fa fa-solid fa-user fa-sm"></i>Perfil</a>
        <a href="../../logout.php"><i class="fa fa-solid fa-arrow-right-from-bracket"></i>Salir</a>
        <?php if ($roluser_session == 1) { ?>
            <hr>
            <label class="admin">Administración</label>
            <a class="active" href="../cup.php"><i class="fa fa-solid fa-trophy fa-sm"></i>Torneo</a>
            <a href="../players.php"><i class="fa fa-solid fa-users fa-sm"></i>Usuarios</a>
            <a href="../notices.php"><i class="fa fa-solid fa-file-lines"></i>Noticias</a>
        <?php }
        ?>

    </div>

    <div class="content">
        <h1>Actualizar Clasificación</h1>
        <?php

        //GRUPO A    
        updateRating("J1grpA1-2");
        updateRating("J1grpA3-4");
        updateRating("J2grpA4-2");
        updateRating("J2grpA1-3");
        updateRating("J3grpA2-3");
        updateRating("J3grpA4-1");
        //GRUPO B
        updateRating("J1grpB1-2");
        updateRating("J1grpB3-4");
        updateRating("J2grpB4-2");
        updateRating("J2grpB1-3");
        updateRating("J3grpB2-3");
        updateRating("J3grpB4-1");    
        //GRUPO C
        updateRating("J1grpC1-2");
        updateRating("J1grpC3-4");
        updateRating("J2grpC4-2");
        updateRating("J2grpC1-3");
        updateRating("J3grpC2-3");
        updateRating("J3grpC4-1");
        //GRUPO D
        updateRating("J1grpD1-2");
        updateRating("J1grpD3-4");
        updateRating("J2grpD4-2");
        updateRating("J2grpD1-3");
        updateRating("J3grpD2-3");
        updateRating("J3grpD4-1");    
        //GRUPO E
        updateRating("J1grpE1-2");
        updateRating("J1grpE3-4");
        updateRating("J2grpE4-2");
        updateRating("J2grpE1-3");
        updateRating("J3grpE2-3");
        updateRating("J3grpE4-1");    
        //GRUPO F
        updateRating("J1grpF1-2");
        updateRating("J1grpF3-4");
        updateRating("J2grpF4-2");
        updateRating("J2grpF1-3");
        updateRating("J3grpF2-3");
        updateRating("J3grpF4-1");    
        //GRUPO G
        updateRating("J1grpG1-2");
        updateRating("J1grpG3-4");
        updateRating("J2grpG4-2");
        updateRating("J2grpG1-3");
        updateRating("J3grpG2-3");
        updateRating("J3grpG4-1");
        //GRUPO H
        updateRating("J1grpH1-2");
        updateRating("J1grpH3-4");
        updateRating("J2grpH4-2");
        updateRating("J2grpH1-3");
        updateRating("J3grpH2-3");
        updateRating("J3grpH4-1");    

        function updateRating($roundmatch)
        {

            $playcup = new Cup();
            $user = new Users();

            $ronda = $playcup->listMatchCup($roundmatch);
            $fila = $ronda->fetch_assoc();

            $bet = $playcup->getBet($roundmatch); //Traigo todas las apuestas que no esten puntuadas.

            while ($filaBet = $bet->fetch_assoc()) {

             
                if ($fila['result'] == $filaBet['bet']) {

                    $user->updatePointsUser($filaBet['id_users']);
                    $user->updatePointControl($filaBet['id_users'], $roundmatch);
                } else {
                    $user->updatePointControl($filaBet['id_users'], $roundmatch);
                }
            }
            
        }
        
        echo "<h4> Clasificación actualizada.</h4><br>";
        ?>
        <a class="a_players" href="modify_cup.php?id=1" title="Volver al Torneo">Volver al Torneo</i></a>
    </div>

    <div class="footer">
        Javier Durán - Desarrollo de Aplicaciones Web - Cesur
    </div>
</body>

</html>