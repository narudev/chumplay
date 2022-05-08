<?php
include "db.php";
/**
 *
 */
class Users extends db
{

  function __construct()
  {
    //De esta forma realizamos la conexion a la base de datos
    parent::__construct();
  }

  /*
  Rol Usuario:
    0 - Usuario
    1 - Admin
  */

  //Listamos todos los usuarios
  function listUsers()
  {
    //Consulta
    $sql = "SELECT * from tbl_users";
    //Realizamos consulta
    return $this->realizarConsulta($sql);
  }

  function getUserbyID($id)
  {
    //Construimos la consulta
    $sql = "SELECT * from tbl_users WHERE id='" . $id . "'";
    //Realizamos la consulta
    $resultado = $this->realizarConsulta($sql);

    if ($resultado != false) {
      if ($resultado != false) {
        return $resultado->fetch_assoc();
      } else {
        return null;
      }
    } else {
      return null;
    }
  }

  //Insertamos un nuevo usuario
  function insertarUsuario($nombre, $apellidos, $email, $pass, $rol = "0")
  {
    //Construimos la consulta
    $sql = "INSERT INTO tbl_users (id, nombre, apellidos,email, rol, pass)
          VALUES (NULL, '" . $nombre . "', '" . $apellidos . "', '" . $email . "', '" . $rol . "', '" . sha1($pass) . "')";
    //Realizamos la consulta
    $resultado = $this->realizarConsulta($sql);
    if ($resultado != false) {
      //Recogemos el ultimo usuario insertado
      $sql = "SELECT * from tbl_users ORDER BY id DESC";
      //Realizamos la consulta
      $resultado = $this->realizarConsulta($sql);
      if ($resultado != false) {
        return $resultado->fetch_assoc();
      } else {
        return null;
      }
    } else {
      return null;
    }
  }

  function updateUsuario($id, $nombre, $apellidos, $email, $pass)
  {
    if ($this->error == false) {
      //Consulta
      $sql = "UPDATE tbl_users SET nombre = '" . $nombre . "' , apellidos = '" . $apellidos . "', email = '" . $email . "', pass = '" . sha1($pass) . "' WHERE ID = " . $id;
      $resultado = $this->realizarConsulta($sql);
      if (!$resultado) {
        echo $sql;
        echo "Falló la actualizacion de la tabla: (" . $this->errno . ") " . $this->error;
        return false;
      }
      return true;
    } else {
      return false;
    }
  }

  function deleteUsuario($id){
    if ($this->error == false) {
      //Consulta
      $sql = "DELETE FROM tbl_users WHERE ID = " . $id;
      $resultado = $this->realizarConsulta($sql);
      if (!$resultado) {
        echo $sql;
        echo "Falló la actualizacion de la tabla: (" . $this->errno . ") " . $this->error;
        return false;
      }
      return true;
    } else {
      return false;
    }
  }

  //Comprobamos si email esta registrado
  function comprobarEmail($email)
  {
    //Consulta
    $sql = "SELECT * from tbl_users WHERE email='" . $email . "'";
    //Realizamos consulta
    $resultado = $this->realizarConsulta($sql);

    $cont = $resultado->num_rows;

    return $cont;
  }

  //DEvolvemos un nuevo usuario
  function buscarUsuario($email)
  {
    //Construimos la consulta
    $sql = "SELECT * from tbl_users WHERE email='" . $email . "'";
    //Realizamos la consulta
    $resultado = $this->realizarConsulta($sql);
    if ($resultado != false) {
      if ($resultado != false) {
        return $resultado->fetch_assoc();
      } else {
        return null;
      }
    } else {
      return null;
    }
  }
}
