<?php

include "Users.php";
include "Session_Users.php";

if(!empty($_POST['email'])){ //Comprobamos que el campo email no este en blanco
    
    $user = new Users();
    $seguridad = new Session_Users();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $usuarioReg = $user->buscarUsuario($email);

    if($usuarioReg != null){ //Comprobamos que el usuario exista
        //Comparamos Pass
        if($usuarioReg["pass"] == sha1($password)){
            $seguridad->addUsuarioSession($usuarioReg["id"],$usuarioReg["nombre"],$usuarioReg['rol']);
            header("location: ../home.php");
        }else{ // Existe pero contraseña incorrecta
            echo '<script type="text/javascript">;';
                echo ' alert("Contraseña Incorrecta");';
                echo 'window.location= "../index.php";';  
            echo '</script>;';
        }
    }else{ //Email no se encuentra
        echo '<script type="text/javascript">;';
            echo ' alert("Email no registrado");';
            echo 'window.location= "../index.php";';  
        echo '</script>;';
    }
}else{
    echo '<script type="text/javascript">;'; 
    echo 'alert("Introduce datos");';
    echo 'window.location= "../index.php";';
    echo '</script>;';
}

?>