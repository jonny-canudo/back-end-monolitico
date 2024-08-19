<?php

require_once("../util/DataSource.php");

class LocalidadesDAO {

    public function listar() {
        $str = "select * from tbllocalidade";

        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);

        $lista = @array();

        while ($col = mysqli_fetch_array($rS, MYSQLI_ASSOC)) {
            $lista[] = $col;
        }
        $dt->closeConnection($conn);
        
        return $lista;
    }

    public function deletar($cod) {
        $str = "delete from tbllocalidades where couf = " . $cod;

        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);

        $dt->closeConnection($conn);
    }

}

?>