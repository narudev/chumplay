<?php
include "./lib/Cup.php";
$cup = new Cup();
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
    <title>ChumPlay - Registar Torneo</title>
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
        <a class="active" href="create_cup.php"><i class="fa fa-solid fa-trophy fa-sm"></i>Torneo</a>
        <a href="players.php"><i class="fa fa-solid fa-users fa-sm"></i>Usuarios</a>

    </div>

    <div class="content">

        <?php

            
            $nameCup = $_POST["lNameTorneo"];
            
            //GRUPO A
            $cup->createMatchCup($nameCup,$_POST["J1grpA1"],$_POST["J1grpA2"],$_POST["J1grpA1-2"],$_POST["J1scoreA1-2"]);
            $cup->createMatchCup($nameCup,$_POST["J1grpA3"],$_POST["J1grpA4"],$_POST["J1grpA3-4"],$_POST["J1scoreA3-4"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpA4"],$_POST["J2grpA2"],$_POST["J2grpA4-2"],$_POST["J2scoreA4-2"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpA1"],$_POST["J2grpA3"],$_POST["J2grpA1-3"],$_POST["J2scoreA1-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpA2"],$_POST["J3grpA3"],$_POST["J3grpA2-3"],$_POST["J3scoreA2-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpA4"],$_POST["J3grpA1"],$_POST["J3grpA4-1"],$_POST["J3scoreA4-1"]);
            //GRUPO B
            $cup->createMatchCup($nameCup,$_POST["J1grpB1"],$_POST["J1grpB2"],$_POST["J1grpB1-2"],$_POST["J1scoreB1-2"]);
            $cup->createMatchCup($nameCup,$_POST["J1grpB3"],$_POST["J1grpB4"],$_POST["J1grpB3-4"],$_POST["J1scoreB3-4"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpB4"],$_POST["J2grpB2"],$_POST["J2grpB4-2"],$_POST["J2scoreB4-2"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpB1"],$_POST["J2grpB3"],$_POST["J2grpB1-3"],$_POST["J2scoreB1-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpB2"],$_POST["J3grpB3"],$_POST["J3grpB2-3"],$_POST["J3scoreB2-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpB4"],$_POST["J3grpB1"],$_POST["J3grpB4-1"],$_POST["J3scoreB4-1"]);
            //GRUPO C
            $cup->createMatchCup($nameCup,$_POST["J1grpC1"],$_POST["J1grpC2"],$_POST["J1grpC1-2"],$_POST["J1scoreC1-2"]);
            $cup->createMatchCup($nameCup,$_POST["J1grpC3"],$_POST["J1grpC4"],$_POST["J1grpC3-4"],$_POST["J1scoreC3-4"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpC4"],$_POST["J2grpC2"],$_POST["J2grpC4-2"],$_POST["J2scoreC4-2"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpC1"],$_POST["J2grpC3"],$_POST["J2grpC1-3"],$_POST["J2scoreC1-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpC2"],$_POST["J3grpC3"],$_POST["J3grpC2-3"],$_POST["J3scoreC2-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpC4"],$_POST["J3grpC1"],$_POST["J3grpC4-1"],$_POST["J3scoreC4-1"]);
            //GRUPO D
            $cup->createMatchCup($nameCup,$_POST["J1grpD1"],$_POST["J1grpD2"],$_POST["J1grpD1-2"],$_POST["J1scoreD1-2"]);
            $cup->createMatchCup($nameCup,$_POST["J1grpD3"],$_POST["J1grpD4"],$_POST["J1grpD3-4"],$_POST["J1scoreD3-4"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpD4"],$_POST["J2grpD2"],$_POST["J2grpD4-2"],$_POST["J2scoreD4-2"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpD1"],$_POST["J2grpD3"],$_POST["J2grpD1-3"],$_POST["J2scoreD1-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpD2"],$_POST["J3grpD3"],$_POST["J3grpD2-3"],$_POST["J3scoreD2-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpD4"],$_POST["J3grpD1"],$_POST["J3grpD4-1"],$_POST["J3scoreD4-1"]);
            //GRUPO E
            $cup->createMatchCup($nameCup,$_POST["J1grpE1"],$_POST["J1grpE2"],$_POST["J1grpE1-2"],$_POST["J1scoreE1-2"]);
            $cup->createMatchCup($nameCup,$_POST["J1grpE3"],$_POST["J1grpE4"],$_POST["J1grpE3-4"],$_POST["J1scoreE3-4"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpE4"],$_POST["J2grpE2"],$_POST["J2grpE4-2"],$_POST["J2scoreE4-2"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpE1"],$_POST["J2grpE3"],$_POST["J2grpE1-3"],$_POST["J2scoreE1-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpE2"],$_POST["J3grpE3"],$_POST["J3grpE2-3"],$_POST["J3scoreE2-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpE4"],$_POST["J3grpE1"],$_POST["J3grpE4-1"],$_POST["J3scoreE4-1"]);
            //GRUPO F
            $cup->createMatchCup($nameCup,$_POST["J1grpF1"],$_POST["J1grpF2"],$_POST["J1grpF1-2"],$_POST["J1scoreF1-2"]);
            $cup->createMatchCup($nameCup,$_POST["J1grpF3"],$_POST["J1grpF4"],$_POST["J1grpF3-4"],$_POST["J1scoreF3-4"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpF4"],$_POST["J2grpF2"],$_POST["J2grpF4-2"],$_POST["J2scoreF4-2"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpF1"],$_POST["J2grpF3"],$_POST["J2grpF1-3"],$_POST["J2scoreF1-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpF2"],$_POST["J3grpF3"],$_POST["J3grpF2-3"],$_POST["J3scoreF2-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpF4"],$_POST["J3grpF1"],$_POST["J3grpF4-1"],$_POST["J3scoreF4-1"]);
            //GRUPO G
            $cup->createMatchCup($nameCup,$_POST["J1grpG1"],$_POST["J1grpG2"],$_POST["J1grpG1-2"],$_POST["J1scoreG1-2"]);
            $cup->createMatchCup($nameCup,$_POST["J1grpG3"],$_POST["J1grpG4"],$_POST["J1grpG3-4"],$_POST["J1scoreG3-4"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpG4"],$_POST["J2grpG2"],$_POST["J2grpG4-2"],$_POST["J2scoreG4-2"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpG1"],$_POST["J2grpG3"],$_POST["J2grpG1-3"],$_POST["J2scoreG1-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpG2"],$_POST["J3grpG3"],$_POST["J3grpG2-3"],$_POST["J3scoreG2-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpG4"],$_POST["J3grpG1"],$_POST["J3grpG4-1"],$_POST["J3scoreG4-1"]);
            //GRUPO H
            $cup->createMatchCup($nameCup,$_POST["J1grpH1"],$_POST["J1grpH2"],$_POST["J1grpH1-2"],$_POST["J1scoreH1-2"]);
            $cup->createMatchCup($nameCup,$_POST["J1grpH3"],$_POST["J1grpH4"],$_POST["J1grpH3-4"],$_POST["J1scoreH3-4"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpH4"],$_POST["J2grpH2"],$_POST["J2grpH4-2"],$_POST["J2scoreH4-2"]);
            $cup->createMatchCup($nameCup,$_POST["J2grpH1"],$_POST["J2grpH3"],$_POST["J2grpH1-3"],$_POST["J2scoreH1-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpH2"],$_POST["J3grpH3"],$_POST["J3grpH2-3"],$_POST["J3scoreH2-3"]);
            $cup->createMatchCup($nameCup,$_POST["J3grpH4"],$_POST["J3grpH1"],$_POST["J3grpH4-1"],$_POST["J3scoreH4-1"]);
            
            /*
            echo "<br>";
            echo $nameCup;
            echo "<br>";
            echo $_POST["J1grpA1"];
            echo "<br>";
            echo $_POST["J1grpA2"];
            echo "<br>";
            echo $_POST["J1grpA1-2"];
            echo "<br>";
            echo $_POST["scoreA1-2"];
            */
        ?>

        <h1>TORNEO CREADO CON EXITO</h1>
    </div>
    <div class="footer">
        Javier Durán - Desarrollo de Aplicaciones Web - Cesur
    </div>
</body>

</html>