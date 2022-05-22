<?php
include_once "db.php";


class Cup extends db
{

    function __construct()
    {
        //De esta forma realizamos la conexion a la base de datos
        parent::__construct();
    }

    //Listamos todos los torneos
    function listCup()
    {
        //Consulta
        $sql = "SELECT * from tbl_cup";
        //Realizamos consulta
        return $this->realizarConsulta($sql);
    }

    function getCupbyID($id)
    {
        //Construimos la consulta
        $sql = "SELECT * from tbl_cup WHERE id='" . $id . "'";
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

    function insertCup($name_cup)
    {
        if ($this->error == false) {
            //Construimos la consulta
            $sql = "INSERT INTO tbl_cup (id,name_cup)
                    VALUES (NULL, '" . $name_cup . "')";
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

    function createMatchCup($id_cup, $team_local, $team_visitor, $roundmatch, $result)
    {
        if ($this->error == false) {
            //Construimos la consulta
            //$sql = "INSERT INTO tbl_match (id,id_cup,team_local,team_visitor,roundmatch,result)
            //        VALUES (NULL, '" . $id_cup . "','" . $team_local . "', '" . $team_visitor . "','" . $roundmatch . "', '" . $result . "')";
            $sql = "INSERT INTO tbl_match (id,id_cup,team_local,team_visitor,roundmatch,result)
                    VALUES (NULL, $id_cup  ,'" . $team_local . "', '" . $team_visitor . "','" . $roundmatch . "', '" . $result . "')";
            //$resultado = $this->realizarConsulta($sql);
            //var_dump($sql);
            //echo "Registro insertado";
            if (!$this->realizarConsulta($sql)) {
                var_dump($sql);
                echo "Falló la actualizacion de la tabla: (" . $this->conexion->errno . ") " . $this->conexion->error;
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    function updateMatchCup($id_cup, $team_local, $team_visitor, $roundmatch, $result = 0)
    {
        if ($this->error == false) {
            //Construimos la consulta
            $sql = "UPDATE tbl_match SET id_cup =  $id_cup  , team_local = '" . $team_local . "' , team_visitor = '" . $team_visitor . "' , result = '" . $result . "' WHERE roundmatch = '" . $roundmatch . "'";
            //$resultado = $this->realizarConsulta($sql);
            //echo "Registro insertado";
            if (!$this->realizarConsulta($sql)) {
                echo $id_cup;
                echo "<br>";
                echo $team_local;
                echo "<br>";
                echo $team_visitor;
                echo "<br>";
                echo $roundmatch;
                echo "<br>";
                echo $result;
                echo "<br>";
                var_dump($sql);
                echo "<br>";
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

    function insertBetUser($id_cup,$roundmatch,$id_users,$bet)
    {
        //Construimos la consulta
        $sql = "INSERT INTO tbl_bet (id_cup, roundmatch,id_users, bet)
                VALUES ('" . $id_cup . "', '" . $roundmatch . "', '" . $id_users . "', '" . $bet . "')";
        //Realizamos la consulta
        $resultado = $this->realizarConsulta($sql);
        if ($resultado != false) {
            //Recogemos el ultimo usuario insertado
            $sql = "SELECT * from tbl_bet ORDER BY id DESC";
            //Realizamos la consulta
            $resultado = $this->realizarConsulta($sql);
            if ($resultado != false) {
                //var_dump($sql);
                return $resultado->fetch_assoc();
            } else {
                return null;
            }
        } else {
            return null;
        }
    }

    function getBetUser($id_users,$roundmatch)
    {
        //Construimos la consulta
        $sql = "SELECT * from tbl_bet WHERE id_users ='" . $id_users . "' AND roundmatch = '" . $roundmatch . "'" ;
        //Realizamos la consulta
        $resultado = $this->realizarConsulta($sql);

        if ($resultado != false) {
            if ($resultado != false) {
                //var_dump($sql);
                return $resultado->fetch_assoc();
            } else {
                return null;
            }
        } else {
            return null;
        }
    }
    
    function getBet($roundmatch)
    {
        /*
        echo $match . "<br>";
        var_dump($match);
        echo "<br>";
        */
        if ($this->error == false) {
            //$sql = "SELECT * FROM tbl_match WHERE roundmatch = '" . $match ."'";
            $sql = "SELECT * from tbl_bet WHERE roundmatch = '" . $roundmatch . "' AND control_points = 0" ;
            //var_dump($sql);
            //echo "<br>";
            //var_dump($sql1);
            $resultado = $this->realizarConsulta($sql);
            return $resultado;
        } else {
            return null;
        }
    }

}
?>
