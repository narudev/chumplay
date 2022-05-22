<?php
/**
 * Controla la Sessiones de los usuarios
 */
class Session_Users
{
  private $usuario=null;
  private $rol = null;
  private $id = null;

  function __construct()
  {
    //Arrancamos la sesion
    session_start();
    if(isset($_SESSION["usuario"]) || isset($_SESSION["rol"]) || isset($_SESSION["id"]) ) {
      $this->usuario=$_SESSION["usuario"];
      $this->rol = $_SESSION["rol"];
      $this->id = $_SESSION["id"];
    }
  }

  public function getID(){
    return $this->id;
  }
  public function getUsuario(){
    return $this->usuario;
  }

  public function getRol(){
    return $this->rol;
  }

  public function addUsuarioSession($id,$usuario,$rol){
    //GEnerando la variable d e sesion
    $_SESSION['id'] = $id;
    $_SESSION["usuario"]=$usuario;
    $_SESSION['rol'] = $rol;
    $this->id = $id;
    $this->usuario=$usuario;
    $this->rol=$rol;
    
  }

  public function addUsuarioCookie($usuario,$pass,$remember=false){
    //GEnerando la variable de sesion
    $_SESSION["usuario"]=$usuario;
    $this->usuario=$usuario;
    //Almacenaremos el user/pass cookies
    if($remember)
    {
      setcookie("usuario",$usuario,time()+(60*60));
      setcookie("pass",$pass,time()+(60*60));
    }
  }

  public function comprobarRemember(){
    if(isset($_COOKIE["usuario"])){
      $_SESSION["usuario"]=$_COOKIE["usuario"];
      return true;
    }else{
      return false;
    }
  }

  public function logOut(){
    $_SESSION=[];
    session_destroy();
    header("location:index.php");
  }

}

?>