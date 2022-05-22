<?php
include "../../lib/Notices.php";
include "../../lib/Session_Users.php";

$seguridad = new Session_Users();

$nameuser_session = $seguridad->getUsuario();
$roluser_session = $seguridad->getRol();
$iduser_session = $seguridad->getID();

if (!isset($nameuser_session) || $roluser_session == 0) {
    header("location:../../index.php");
    exit();
}

$notices = new Notices();
$id = $_GET['id'];
$row = $notices->getNoticebyID($id);

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
    <title>ChumPlay - Modificar Noticia</title>
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
            <a href="../cup.php"><i class="fa fa-solid fa-trophy fa-sm"></i>Torneo</a>
            <a href="../players.php"><i class="fa fa-solid fa-users fa-sm"></i>Usuarios</a>
            <a class="active" href="../notices.php"><i class="fa fa-solid fa-file-lines"></i>Noticias</a>
        <?php }
        ?>
    </div>

    <div class="content">
        <h1>Actualizar Noticia</h1>

        <form name="modificar_noticia" method="POST" action="update_notice.php">

            <div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="title">Título</label>
                <input type="text" class="form-control" name="title" size="25" value="<?php echo $row['title']; ?>" />
                <br>
                <label for="titulo">Noticia</label>
                <br>
            </div>
            <div>
                <textarea cols="120" rows="30" name="article"><?php echo $row['article']; ?></textarea>
            </div>
            <div>
                <input type="hidden" name="accion" value="update">
                <input class="a_players" type="submit" name="Guardar" value="Actualizar" title="Actualizar Noticia" />
                <a class="a_players" href=../notices.php>Volver </a> 
            </div> 
        </form> 
    </div> 
    <div class="footer">
            Javier Durán - Desarrollo de Aplicaciones Web - Cesur
    </div>
</body>

</html>