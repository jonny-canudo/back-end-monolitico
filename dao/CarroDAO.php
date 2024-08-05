<?php

require_once("../util/DataSource.php");
   
class CarroDAO {
        
    public function incluir($dcmarca, $dcmodelo, $dtfabricacao, $dccor, $dcpreco, $dtcompra, $dcnumeroportas, $dctipodecombustivel, $dcquilometragem ) {
       
        $str = "INSERT INTO tbldadoscarro ( dcmarca, dcmodelo, dtfabricacao, dccor, dcpreco, dtcompra, dcnumeroportas, dctipodecombustivel, dcquilometragem)
         VALUES ('".$dcmarca."', '".$dcmodelo."', '".$dtfabricacao."', '".$dccor."', '".$dcpreco."', '".$dtcompra."', '".$dcnumeroportas."', '".$dctipodecombustivel."', '".$dcquilometragem."' )";


        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);
        
        $dt->closeConnection($conn);
    }

  
    
}



?>