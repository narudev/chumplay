<?php

include "db.php";

class Notices extends db
{

    function __construct()
    {
        //De esta forma realizamos la conexion a la base de datos
        parent::__construct();
    }


    //Listamos todos las noticias
    function listNotices($orderDesc = false)
    {
        if ($orderDesc == false) {
            $sql = "SELECT * from tbl_notices ORDER BY ID DESC";
        } else {
            //Consulta
            $sql = "SELECT * from tbl_notices";
        }

        //Realizamos consulta
        return $this->realizarConsulta($sql);
    }

    function listNoticesOrderDesc()
    {
        //Consulta
        $sql = "SELECT * from tbl_notices ORDER BY ID DESC";
        //Realizamos consulta
        return $this->realizarConsulta($sql);
    }

    function getNoticebyID($id)
    {
        //Construimos la consulta
        $sql = "SELECT * from tbl_notices WHERE id='" . $id . "'";
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


    function updateNotice($id, $title, $article)
    {
        if ($this->error == false) {
            //Consulta
            $sql = "UPDATE tbl_notices SET title = '" . $title . "' , article = '" . $article . "' WHERE ID = " . $id;
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

    function deleteNotice($id)
    {
        if ($this->error == false) {
            //Consulta
            $sql = "DELETE FROM tbl_notices WHERE ID = " . $id;
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

    //Insertamos un nuevo usuario
    function insertNotice($title, $article, $created)
    {
        //Construimos la consulta
        $sql = "INSERT INTO tbl_notices (id, title, article,created)
          VALUES (NULL, '" . $title . "', '" . $article . "', '" . $created . "')";
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
}
