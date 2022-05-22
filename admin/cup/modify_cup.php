<?php
include "../../lib/Cup.php";
include "../../lib/Session_Users.php";

$seguridad = new Session_Users();

$nameuser_session = $seguridad->getUsuario();
$roluser_session = $seguridad->getRol();
$iduser_session = $seguridad->getID();

if (!isset($nameuser_session) || $roluser_session == 0) {
    header("location:../../index.php");
    exit();
}

$playcup = new Cup();
//$totalcup = $playcup->devolverCup();

$id_cup = $_GET['id'];

if($_GET){

    //Comprobar que no exista el partido
    //$playcup->createMatchCup($id_cup,'','','J1grpA1-2','');
}


$id_cupP = $_POST['name_cup'];

$row = $playcup->getCupbyId($id_cup);

$name_cup = $row['name_cup'];

if($_POST){
    $name_cup = $_POST['name_cup'];  //Variable para poner el nombre en el header cuando actualiza
    //GRUPO A
    $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpA1"],$_POST["J1grpA2"],$_POST["J1grpA1-2"],$_POST["J1scoreA1-2"]);
    $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpA3"],$_POST["J1grpA4"],$_POST["J1grpA3-4"],$_POST["J1scoreA3-4"]);     
    $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpA4"],$_POST["J2grpA2"],$_POST["J2grpA4-2"],$_POST["J2scoreA4-2"]);
    $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpA1"],$_POST["J2grpA3"],$_POST["J2grpA1-3"],$_POST["J2scoreA1-3"]);
    $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpA2"],$_POST["J3grpA3"],$_POST["J3grpA2-3"],$_POST["J3scoreA2-3"]);
    $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpA4"],$_POST["J3grpA1"],$_POST["J3grpA4-1"],$_POST["J3scoreA4-1"]);
   //GRUPO B
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpB1"],$_POST["J1grpB2"],$_POST["J1grpB1-2"],$_POST["J1scoreB1-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpB3"],$_POST["J1grpB4"],$_POST["J1grpB3-4"],$_POST["J1scoreB3-4"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpB4"],$_POST["J2grpB2"],$_POST["J2grpB4-2"],$_POST["J2scoreB4-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpB1"],$_POST["J2grpB3"],$_POST["J2grpB1-3"],$_POST["J2scoreB1-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpB2"],$_POST["J3grpB3"],$_POST["J3grpB2-3"],$_POST["J3scoreB2-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpB4"],$_POST["J3grpB1"],$_POST["J3grpB4-1"],$_POST["J3scoreB4-1"]);
   //GRUPO C
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpC1"],$_POST["J1grpC2"],$_POST["J1grpC1-2"],$_POST["J1scoreC1-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpC3"],$_POST["J1grpC4"],$_POST["J1grpC3-4"],$_POST["J1scoreC3-4"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpC4"],$_POST["J2grpC2"],$_POST["J2grpC4-2"],$_POST["J2scoreC4-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpC1"],$_POST["J2grpC3"],$_POST["J2grpC1-3"],$_POST["J2scoreC1-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpC2"],$_POST["J3grpC3"],$_POST["J3grpC2-3"],$_POST["J3scoreC2-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpC4"],$_POST["J3grpC1"],$_POST["J3grpC4-1"],$_POST["J3scoreC4-1"]);
   //GRUPO D
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpD1"],$_POST["J1grpD2"],$_POST["J1grpD1-2"],$_POST["J1scoreD1-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpD3"],$_POST["J1grpD4"],$_POST["J1grpD3-4"],$_POST["J1scoreD3-4"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpD4"],$_POST["J2grpD2"],$_POST["J2grpD4-2"],$_POST["J2scoreD4-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpD1"],$_POST["J2grpD3"],$_POST["J2grpD1-3"],$_POST["J2scoreD1-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpD2"],$_POST["J3grpD3"],$_POST["J3grpD2-3"],$_POST["J3scoreD2-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpD4"],$_POST["J3grpD1"],$_POST["J3grpD4-1"],$_POST["J3scoreD4-1"]);
   //GRUPO E
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpE1"],$_POST["J1grpE2"],$_POST["J1grpE1-2"],$_POST["J1scoreE1-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpE3"],$_POST["J1grpE4"],$_POST["J1grpE3-4"],$_POST["J1scoreE3-4"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpE4"],$_POST["J2grpE2"],$_POST["J2grpE4-2"],$_POST["J2scoreE4-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpE1"],$_POST["J2grpE3"],$_POST["J2grpE1-3"],$_POST["J2scoreE1-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpE2"],$_POST["J3grpE3"],$_POST["J3grpE2-3"],$_POST["J3scoreE2-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpE4"],$_POST["J3grpE1"],$_POST["J3grpE4-1"],$_POST["J3scoreE4-1"]);
   //GRUPO F
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpF1"],$_POST["J1grpF2"],$_POST["J1grpF1-2"],$_POST["J1scoreF1-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpF3"],$_POST["J1grpF4"],$_POST["J1grpF3-4"],$_POST["J1scoreF3-4"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpF4"],$_POST["J2grpF2"],$_POST["J2grpF4-2"],$_POST["J2scoreF4-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpF1"],$_POST["J2grpF3"],$_POST["J2grpF1-3"],$_POST["J2scoreF1-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpF2"],$_POST["J3grpF3"],$_POST["J3grpF2-3"],$_POST["J3scoreF2-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpF4"],$_POST["J3grpF1"],$_POST["J3grpF4-1"],$_POST["J3scoreF4-1"]);
   //GRUPO G
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpG1"],$_POST["J1grpG2"],$_POST["J1grpG1-2"],$_POST["J1scoreG1-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpG3"],$_POST["J1grpG4"],$_POST["J1grpG3-4"],$_POST["J1scoreG3-4"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpG4"],$_POST["J2grpG2"],$_POST["J2grpG4-2"],$_POST["J2scoreG4-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpG1"],$_POST["J2grpG3"],$_POST["J2grpG1-3"],$_POST["J2scoreG1-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpG2"],$_POST["J3grpG3"],$_POST["J3grpG2-3"],$_POST["J3scoreG2-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpG4"],$_POST["J3grpG1"],$_POST["J3grpG4-1"],$_POST["J3scoreG4-1"]);
   //GRUPO H
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpH1"],$_POST["J1grpH2"],$_POST["J1grpH1-2"],$_POST["J1scoreH1-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J1grpH3"],$_POST["J1grpH4"],$_POST["J1grpH3-4"],$_POST["J1scoreH3-4"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpH4"],$_POST["J2grpH2"],$_POST["J2grpH4-2"],$_POST["J2scoreH4-2"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J2grpH1"],$_POST["J2grpH3"],$_POST["J2grpH1-3"],$_POST["J2scoreH1-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpH2"],$_POST["J3grpH3"],$_POST["J3grpH2-3"],$_POST["J3scoreH2-3"]);
   $playcup->updateMatchCup($_POST["id_cup"],$_POST["J3grpH4"],$_POST["J3grpH1"],$_POST["J3grpH4-1"],$_POST["J3scoreH4-1"]);
   
}


?>
<!DOCTYPE html>
<html  lang="en">

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
    <title>ChumPlay - Modificar Torneo</title>
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
    <h1>Actualizar Torneo <?php echo $name_cup;?></h1>
        
        <form action="modify_cup.php" method="post">
            <input type="hidden" name="name_cup" value="<?php echo $row['name_cup'];?>">
            <!--<h2><?php echo $row['name_cup'];?></h2>-->
            
            <input class="a_players" type="submit" value="Actualizar">
            <a class="a_players" href="update_rating.php">Actualizar Clasificación </a>

            <div class="box">
                <fieldset>
                    <legend>Grupo A</legend>
                    <div class="box-grid">
                        <table>
                            <tbody>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpA1-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpA1-2" value="J1grpA1-2">
                                            <td>J1<input name="J1grpA1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpA2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreA1-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreA1-2" name="J1scoreA1-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpA3-4"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpA3-4" value="J1grpA3-4">
                                            <td>J1<input name="J1grpA3" value="<?php echo $fila['team_local'] ?>" type="text">vs</td>
                                            <td><input name="J1grpA4" value="<?php echo $fila['team_visitor'] ?>" type="text"></td>
                                            <!--<td><input class="result" name="J1scoreA3-4" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreA3-4" name="J1scoreA3-4">
                                            <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpA4-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpA4-2" value="J2grpA4-2">
                                            <td>J2<input name="J2grpA4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpA2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreA4-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreA4-2" name="J2scoreA4-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpA1-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpA1-3" value="J2grpA1-3">
                                            <td>J2<input name="J2grpA1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpA3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreA1-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreA1-3" name="J2scoreA1-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpA2-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpA2-3" value="J3grpA2-3">
                                            <td>J3<input name="J3grpA2" value="<?php echo $fila['team_local'] ?>" type="text">vs</td>
                                            <td><input name="J3grpA3" value="<?php echo $fila['team_visitor'] ?>" type="text"></td>
                                            <!--<td><input class="result" name="J3scoreA2-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreA2-3" name="J3scoreA2-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpA4-1"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpA4-1" value="J3grpA4-1">
                                            <td>J3<input name="J3grpA4" value="<?php echo $fila['team_local'] ?>" type="text">vs</td>
                                            <td><input name="J3grpA1" value="<?php echo $fila['team_visitor'] ?>" type="text"></td>
                                            <!--<td><input class="result" name="J3scoreA4-1" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreA4-1" name="J3scoreA4-1">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Grupo B</legend>
                    <div class="box-grid">
                        <table>
                            <tbody>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpB1-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpB1-2" value="J1grpB1-2">
                                            <td>J1<input name="J1grpB1" value="<?php echo $fila['team_local'] ?>" type="text">vs</td>
                                            <td><input name="J1grpB2" value="<?php echo $fila['team_visitor'] ?>" type="text"></td>
                                            <!--<td><input class="result" name="J1scoreB1-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreB1-2" name="J1scoreB1-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpB3-4"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpB3-4" value="J1grpB3-4">
                                            <td>J1<input name="J1grpB3" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpB4" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreB3-4" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreB3-4" name="J1scoreB3-4">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpB4-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpB4-2" value="J2grpB4-2">
                                            <td>J2<input name="J2grpB4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpB2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreB4-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreB4-2" name="J2scoreB4-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpB1-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpB1-3" value="J2grpB1-3">
                                            <td>J2<input name="J2grpB1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpB3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreB1-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreB1-3" name="J2scoreB1-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpB2-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpB2-3" value="J3grpB2-3">
                                            <td>J3<input name="J3grpB2" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpB3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreB2-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreB2-3" name="J3scoreB2-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpB4-1"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpB4-1" value="J3grpB4-1">
                                            <td>J3<input name="J3grpB4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpB1" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreB4-1" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreB4-1" name="J3scoreB4-1">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </div>
            <div class="box">
                <fieldset>
                    <legend>Grupo C</legend>
                    <div class="box-grid">
                        <table>
                            <tbody>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpC1-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpC1-2" value="J1grpC1-2">
                                            <td>J1<input name="J1grpC1" value="<?php echo $fila['team_local'] ?>" type="text">vs</td>
                                            <td><input name="J1grpC2" value="<?php echo $fila['team_visitor'] ?>" type="text"></td>
                                            <!--<td><input class="result" name="J1scoreC1-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreC1-2" name="J1scoreC1-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpC3-4"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpC3-4" value="J1grpC3-4">
                                            <td>J1<input name="J1grpC3" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpC4" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreC3-4" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreC3-4" name="J1scoreC3-4">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpC4-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpC4-2" value="J2grpC4-2">
                                            <td>J2<input name="J2grpC4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpC2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreC4-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreC4-2" name="J2scoreC4-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpC1-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpC1-3" value="J2grpC1-3">
                                            <td>J2<input name="J2grpC1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpC3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreC1-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreC1-3" name="J2scoreC1-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpC2-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpC2-3" value="J3grpC2-3">
                                            <td>J3<input name="J3grpC2" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpC3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreC2-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreC2-3" name="J3scoreC2-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpC4-1"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpC4-1" value="J3grpC4-1">
                                            <td>J3<input name="J3grpC4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpC1" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreC4-1" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreC4-1" name="J3scoreC4-1">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Grupo D</legend>
                    <div class="box-grid">
                        <table>
                            <tbody>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpD1-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpD1-2" value="J1grpD1-2">
                                            <td>J1<input name="J1grpD1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpD2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreD1-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreD1-2" name="J1scoreD1-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpD3-4"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpD3-4" value="J1grpD3-4">
                                            <td>J1<input name="J1grpD3" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpD4" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreD3-4" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreD3-4" name="J1scoreD3-4">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpD4-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpD4-2" value="J2grpD4-2">
                                            <td>J2<input name="J2grpD4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpD2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreD4-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreD4-2" name="J2scoreD4-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpD1-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpD1-3" value="J2grpD1-3">
                                            <td>J2<input name="J2grpD1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpD3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreD1-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreD1-3" name="J2scoreD1-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpD2-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpD2-3" value="J3grpD2-3">
                                            <td>J3<input name="J3grpD2" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpD3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreD2-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreD2-3" name="J3scoreD2-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpD4-1"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpD4-1" value="J3grpD4-1">
                                            <td>J3<input name="J3grpD4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpD1" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreD4-1" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreD4-1" name="J3scoreD4-1">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </div>
            <div class="box">
                <fieldset>
                    <legend>Grupo E</legend>
                    <div class="box-grid">
                        <table>
                            <tbody>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpE1-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpE1-2" value="J1grpE1-2">
                                            <td>J1<input name="J1grpE1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpE2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreE1-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreE1-2" name="J1scoreE1-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpE3-4"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpE3-4" value="J1grpE3-4">
                                            <td>J1<input name="J1grpE3" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpE4" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreE3-4" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreE3-4" name="J1scoreE3-4">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpE4-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpE4-2" value="J2grpE4-2">
                                            <td>J2<input name="J2grpE4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpE2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreE4-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreE4-2" name="J2scoreE4-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpE1-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpE1-3" value="J2grpE1-3">
                                            <td>J2<input name="J2grpE1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpE3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreE1-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreE1-3" name="J2scoreE1-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpE2-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpE2-3" value="J3grpE2-3">
                                            <td>J3<input name="J3grpE2" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpE3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreE2-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreE2-3" name="J3scoreE2-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpE4-1"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpE4-1" value="J3grpE4-1">
                                            <td>J3<input name="J3grpE4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpE1" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreE4-1" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreE4-1" name="J3scoreE4-1">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Grupo F</legend>
                    <div class="box-grid">
                        <table>
                            <tbody>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpF1-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpF1-2" value="J1grpF1-2">
                                            <td>J1<input name="J1grpF1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpF2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreF1-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreF1-2" name="J1scoreF1-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpF3-4"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpF3-4" value="J1grpF3-4">
                                            <td>J1<input name="J1grpF3" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpF4" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreF3-4" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreF3-4" name="J1scoreF3-4">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpF4-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpF4-2" value="J2grpF4-2">
                                            <td>J2<input name="J2grpF4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpF2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreF4-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreF4-2" name="J2scoreF4-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpF1-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpF1-3" value="J2grpF1-3">
                                            <td>J2<input name="J2grpF1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpF3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreF1-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreF1-3" name="J2scoreF1-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpF2-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpF2-3" value="J3grpF2-3">
                                            <td>J3<input name="J3grpF2" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpF3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreF2-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreF2-3" name="J3scoreF2-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpF4-1"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpF4-1" value="J3grpF4-1">
                                            <td>J3<input name="J3grpF4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpF1" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreF4-1" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreF4-1" name="J3scoreB4-1">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>      
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </div>
            <div class="box">
                <fieldset>
                    <legend>Grupo G</legend>
                    <div class="box-grid">
                        <table>
                            <tbody>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpG1-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpG1-2" value="J1grpG1-2">
                                            <td>J1<input name="J1grpG1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpG2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreG1-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreG1-2" name="J1scoreG1-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpG3-4"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpG3-4" value="J1grpG3-4">
                                            <td>J1<input name="J1grpG3" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpG4" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreG3-4" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreG3-4" name="J1scoreG3-4">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpG4-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpG4-2" value="J2grpG4-2">
                                            <td>J2<input name="J2grpG4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpG2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreG4-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreG4-2" name="J2scoreG4-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpG1-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpG1-3" value="J2grpG1-3">
                                            <td>J2<input name="J2grpG1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpG3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreG1-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreG4-2" name="J2scoreG4-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpG2-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpG2-3" value="J3grpG2-3">
                                            <td>J3<input name="J3grpG2" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpG3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreG2-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreG2-3" name="J3scoreG2-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpG4-1"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpG4-1" value="J3grpG4-1">
                                            <td>J3<input name="J3grpG4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpG1" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreG4-1" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreG4-1" name="J3scoreG4-1">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Grupo H</legend>
                    <div class="box-grid">
                        <table>
                            <tbody>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpH1-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpH1-2" value="J1grpH1-2">
                                            <td>J1<input name="J1grpH1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpH2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreH1-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreH1-2" name="J1scoreH1-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J1grpH3-4"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J1grpH3-4" value="J1grpH3-4">
                                            <td>J1<input name="J1grpH3" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J1grpH4" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J1scoreH3-4" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J1scoreH3-4" name="J1scoreH3-4">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpH4-2"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpH4-2" value="J2grpH4-2">
                                            <td>J2<input name="J2grpH4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpH2" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreH4-2" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreH4-2" name="J2scoreH4-2">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J2grpH1-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J2grpH1-3" value="J2grpH1-3">
                                            <td>J2<input name="J2grpH1" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J2grpH3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J2scoreH1-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J2scoreH1-3" name="J2scoreH1-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpH2-3"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpH2-3" value="J3grpH2-3">
                                            <td>J3<input name="J3grpH2" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpH3" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreH2-3" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreH2-3" name="J3scoreH2-3">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $ronda = $playcup->listMatchCup("J3grpH4-1"); //recoger toda la fila de la Jornada y el partido
                                    if ($ronda != null) {
                                        //Cuantas filas nos devuelve
                                        while ($fila = $ronda->fetch_assoc()) {
                                            ?>
                                            <input type="hidden" name="id_cup" value="1">
                                            <input type="hidden" name="J3grpH4-1" value="J3grpH4-1">
                                            <td>J3<input name="J3grpH4" value="<?php echo $fila['team_local'] ?>"  type="text">vs</td>
                                            <td><input name="J3grpH1" value="<?php echo $fila['team_visitor'] ?>"  type="text"></td>
                                            <!--<td><input class="result" name="J3scoreH4-1" type="text" maxlength="1"></td>-->
                                            <td><select class="resultSelect" id="J3scoreH4-1" name="J3scoreB4-1">
                                                    <option value="<?php echo $fila['result'] ?>"><?php echo $fila['result'] ?></option>
                                                    <option value="1">1</option>
                                                    <option value="X">X</option>
                                                    <option value="2">2</option>
                                                </select>
                                            </td>
                                    <?php }
                                    } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </fieldset>

            </div>
        </form>

    </div>
    <div class="footer">
        Javier Durán - Desarrollo de Aplicaciones Web - Cesur
    </div>
</body>

</html>