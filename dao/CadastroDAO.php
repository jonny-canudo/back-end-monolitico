<?php

require_once("../util/DataSource.php");
   
class CadastroDAO {
        
    public function incluir($to) {
        
        $str = "INSERT INTO tblusuario (dcnome, dcemail, dcsenha, costatus, dtentrada) VALUES ('".$nome."', '".$email."', '".$senha."', 0, now())";

        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);
        
        $dt->closeConnection($conn);
    }

}

?>