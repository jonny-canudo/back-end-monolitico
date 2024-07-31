<?php

require_once("../util/DataSource.php");

class UsuarioDAO {

    public function listar() {
        $str = "select * from tblusuario";

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
        $str = "delete from tblusuario where cousuario = " . $cod;

        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);

        $dt->closeConnection($conn);
    }

    public function incluir($dcnome, $dcemail, $dcsenha) {
        $str = "insert into tblusuario(dcnome, dcemail , dcsenha, costatus, dtentrada ) values ('".$dcnome."', '".$dcemail."', '".$dcsenha."', 0, now());";
    
        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);

        $dt->closeConnection($conn);
    }
}

?>