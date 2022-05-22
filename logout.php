<?php

include "lib/Session_Users.php";

$seguridad = new Session_Users();

$seguridad->logOut();

?>