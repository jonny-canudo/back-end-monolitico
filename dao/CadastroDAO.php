<?php

require_once("../util/DataSource.php");
   

    class CadastroDAO {
        
        public function incluir($nome, $email, $senha) {
        $str = "INSERT INTO tblusuario (dcnome, dcemail, dcsenha, dcstatus, dcentrada) VALUES ('".$nome."', '".$email."', '".$senha."', '0', now())";
    
        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);
        
        $dt->closeConnection($conn);
       
     
    }

}

?>