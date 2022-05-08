<?php
include "./lib/Cup.php";
$playcup = new Cup();
//$ronda = "J1grpA1-2";
//$resultado = $playcup->listMatchCup("J1grpA1-2");
$totalcup = $playcup->devolverCup();

if ($resultado != null) {
    //Cuantas filas nos devuelve
    while ($fila = $resultado->fetch_assoc()) {
        echo "El equipo " . $fila['team_local'] . "<br>";
    }
}

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
    <title>ChumPlay - Jugar</title>
</head>

<body>
    <div class="sidebar">
        <img src="img/logo.png" alt="ChumPlay" title="ChumPlay">

        <a href="index.php"> <i class="fa fa-home fa-sm"></i>Noticias</a>
        <a class="active" href="play.php"><i class="fa fa-solid fa-futbol fa-sm"></i>Jugar</a>
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
        <h1>Jugar</h1>
        <form action="XXXX.php" method="post">
            <label for="lNameTorneo">Nombre Torneo</label>
            <input name="lNameTorneo" type="text">

            <input type="submit" value="Crear">
            <br>
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
                                            <input type="hidden" name="J1grpA1-2" value="J1grpA1-2">
                                            <td>J1<input name="J1grpA1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpA2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreA1-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpA3-4" value="J1grpA3-4">
                                            <td>J1<input name="J1grpA3" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpA4" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreA3-4" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpA4-2" value="J2grpA4-2">
                                            <td>J2<input name="J2grpA4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpA2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreA4-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpA1-3" value="J2grpA1-3">
                                            <td>J2<input name="J2grpA1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpA3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreA1-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpA2-3" value="J3grpA2-3">
                                            <td>J3<input name="J3grpA2" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpA3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreA2-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpA4-1" value="J3grpA4-1">
                                            <td>J3<input name="J3grpA4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpA1" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreA4-1" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpB1-2" value="J1grpB1-2">
                                            <td>J1<input name="J1grpB1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpB2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreB1-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpB3-4" value="J1grpB3-4">
                                            <td>J1<input name="J1grpB3" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpB4" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreB3-4" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpB4-2" value="J2grpB4-2">
                                            <td>J2<input name="J2grpB4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpB2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreB4-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpB1-3" value="J2grpB1-3">
                                            <td>J2<input name="J2grpB1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpB3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreB1-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpB2-3" value="J3grpB2-3">
                                            <td>J3<input name="J3grpB2" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpB3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreB2-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpB4-1" value="J3grpB4-1">
                                            <td>J3<input name="J3grpB4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpB1" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreB4-1" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpC1-2" value="J1grpC1-2">
                                            <td>J1<input name="J1grpC1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpC2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreC1-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpC3-4" value="J1grpC3-4">
                                            <td>J1<input name="J1grpC3" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpC4" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreC3-4" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpC4-2" value="J2grpC4-2">
                                            <td>J2<input name="J2grpC4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpC2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreC4-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpC1-3" value="J2grpC1-3">
                                            <td>J2<input name="J2grpC1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpC3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreC1-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpC2-3" value="J3grpC2-3">
                                            <td>J3<input name="J3grpC2" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpC3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreC2-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpC4-1" value="J3grpC4-1">
                                            <td>J3<input name="J3grpC4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpC1" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreC4-1" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpD1-2" value="J1grpD1-2">
                                            <td>J1<input name="J1grpD1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpD2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreD1-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpD3-4" value="J1grpD3-4">
                                            <td>J1<input name="J1grpD3" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpD4" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreD3-4" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpD4-2" value="J2grpD4-2">
                                            <td>J2<input name="J2grpD4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpD2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreD4-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpD1-3" value="J2grpD1-3">
                                            <td>J2<input name="J2grpD1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpD3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreD1-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpD2-3" value="J3grpD2-3">
                                            <td>J3<input name="J3grpD2" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpD3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreD2-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpD4-1" value="J3grpD4-1">
                                            <td>J3<input name="J3grpD4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpD1" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreD4-1" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpE1-2" value="J1grpE1-2">
                                            <td>J1<input name="J1grpE1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpE2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreE1-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpE3-4" value="J1grpE3-4">
                                            <td>J1<input name="J1grpE3" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpE4" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreE3-4" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpE4-2" value="J2grpE4-2">
                                            <td>J2<input name="J2grpE4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpE2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreE4-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpE1-3" value="J2grpE1-3">
                                            <td>J2<input name="J2grpE1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpE3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreE1-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpE2-3" value="J3grpE2-3">
                                            <td>J3<input name="J3grpE2" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpE3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreE2-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpE4-1" value="J3grpE4-1">
                                            <td>J3<input name="J3grpE4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpE1" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreE4-1" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpF1-2" value="J1grpF1-2">
                                            <td>J1<input name="J1grpF1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpF2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreF1-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpF3-4" value="J1grpF3-4">
                                            <td>J1<input name="J1grpF3" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpF4" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreF3-4" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpF4-2" value="J2grpF4-2">
                                            <td>J2<input name="J2grpF4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpF2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreF4-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpF1-3" value="J2grpF1-3">
                                            <td>J2<input name="J2grpF1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpF3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreF1-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpF2-3" value="J3grpF2-3">
                                            <td>J3<input name="J3grpF2" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpF3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreF2-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpF4-1" value="J3grpF4-1">
                                            <td>J3<input name="J3grpF4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpF1" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreF4-1" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpG1-2" value="J1grpG1-2">
                                            <td>J1<input name="J1grpG1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpG2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreG1-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpG3-4" value="J1grpG3-4">
                                            <td>J1<input name="J1grpG3" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpG4" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreG3-4" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpG4-2" value="J2grpG4-2">
                                            <td>J2<input name="J2grpG4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpG2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreG4-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpG1-3" value="J2grpG1-3">
                                            <td>J2<input name="J2grpG1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpG3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreG1-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpG2-3" value="J3grpG2-3">
                                            <td>J3<input name="J3grpG2" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpG3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreG2-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpG4-1" value="J3grpG4-1">
                                            <td>J3<input name="J3grpG4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpG1" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreG4-1" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpH1-2" value="J1grpH1-2">
                                            <td>J1<input name="J1grpH1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpH2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreH1-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J1grpH3-4" value="J1grpH3-4">
                                            <td>J1<input name="J1grpH3" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J1grpH4" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J1scoreH3-4" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpH4-2" value="J2grpH4-2">
                                            <td>J2<input name="J2grpH4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpH2" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreH4-2" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J2grpH1-3" value="J2grpH1-3">
                                            <td>J2<input name="J2grpH1" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J2grpH3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J2scoreH1-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpH2-3" value="J3grpH2-3">
                                            <td>J3<input name="J3grpH2" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpH3" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreH2-3" type="text" maxlength="1"></td>
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
                                            <input type="hidden" name="J3grpH4-1" value="J3grpH4-1">
                                            <td>J3<input name="J3grpH4" value="<?php echo $fila['team_local'] ?>" readonly type="text">vs</td>
                                            <td><input name="J3grpH1" value="<?php echo $fila['team_visitor'] ?>" readonly type="text"></td>
                                            <td><input class="result" name="J3scoreH4-1" type="text" maxlength="1"></td>
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