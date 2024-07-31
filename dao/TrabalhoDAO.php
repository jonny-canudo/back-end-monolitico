<?php

require_once("../util/DataSource.php");


class TrabalhoDAO {

    public function listar() {
        $str = "select * from tbltrabalho";

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
        $str = "delete from tbltrabalho where cotrabalho  = " . $cod;

        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);

        $dt->closeConnection($conn);
    }

    public function incluir($dcnome, $dclocaltrabalho, $dcsalario) {
        $str = "insert into tbltrabalho(dcnome, dclocaltrabalho, dcsalario ) values ('".$dcnome."', '".$dclocaltrabalho."', '".$dcsalario."');";
    
        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);

        $dt->closeConnection($conn);
    }
        
}

?>