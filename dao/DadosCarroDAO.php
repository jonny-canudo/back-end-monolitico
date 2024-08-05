<?php

require_once("../util/DataSource.php");

class DadosCarroDAO {

    public function listar() {
        $str = "select * from tbldadoscarro";

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
        $str = "delete from tbldadoscarro where cocarro = " . $cod;

        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);

        $dt->closeConnection($conn);
    }

   /* public function incluir($dcmarca, $dcmodelo, $dtfabricacao, $dccor, $dcpreco, $dtcompra, $dcnumeroportas, $dctipodecombustivel, $dcquilometragem) {
        $str = "INSERT INTO tbldadoscarro ( dcmarca, dcmodelo, dtfabricacao, dccor, dcpreco, dtcompra, dcnumeroportas, dctipodecombustivel, dcquilometragem)
         VALUES ('".$dcmarca."', '".$dcmodelo."', '".$dtfabricacao."', '".$dccor."', '".$dcpreco."', '".$dtcompra."', '".$dcnumeroportas."', '".$dctipodecombustivel."', '".$dcquilometragem."' )";
    
        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);

        $dt->closeConnection($conn);
    }*/
}

?>