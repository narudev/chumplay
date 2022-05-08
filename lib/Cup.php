<?php
include "db.php";


class Cup extends db
{

    function __construct()
    {
        //De esta forma realizamos la conexion a la base de datos
        parent::__construct();
    }



    function createMatchCup($name_cup, $team_local, $team_visitor, $roundmatch, $result)
    {
        if ($this->error == false) {
            //Construimos la consulta
            $sql = "INSERT INTO tbl_match (id,name_cup,team_local,team_visitor,roundmatch,result)
                    VALUES (NULL, '" . $name_cup . "','" . $team_local . "', '" . $team_visitor . "','" . $roundmatch . "', '" . $result . "')";
            //$resultado = $this->realizarConsulta($sql);
            //echo "Registro insertado";
            if (!$this->realizarConsulta($sql)) {
                echo "Falló la actualizacion de la tabla: (" . $this->conexion->errno . ") " . $this->conexion->error;
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    function listMatchCup($match)
    {   
        /*
        echo $match . "<br>";
        var_dump($match);
        echo "<br>";
        */
        if ($this->error == false) {
            //$sql = "SELECT * FROM tbl_match WHERE roundmatch = '" . $match ."'";
            $sql = "SELECT * FROM tbl_match WHERE roundmatch = '" . $match . "' LIMIT 1";
            //var_dump($sql);
            //echo "<br>";
            //var_dump($sql1);
            $resultado = $this->realizarConsulta($sql);
            return $resultado;
        } else {
            return null;
        }
    }

    function devolverCup()
    {
        if ($this->error == false) {
            $sql = "SELECT * FROM tbl_match WHERE roundmatch = 'J1grpA1-2'";
            //var_dump($sql);
            $resultado = $this->realizarConsulta($sql);
            //$resultado = $this->conexion->query("SELECT * FROM usuario WHERE id=".$id);
            return $resultado;
        } else {
            return null;
        }
    }
}
