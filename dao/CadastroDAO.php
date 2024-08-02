<?php

require_once("../util/DataSource.php");
   

    class CadastroDAO {
        
        public function CADASTRAR($email, $senha) {
        $str = "INSERT INTO tblusuario (dcemail, dcsenha) VALUES ('".$email."' '".$senha."'";

        /*insert into tblusuario (dcnome, dcemail, dcsenha, costatus, dtentrada) values ("rodrigo", "rodrigo@gmail.com", "1234", 1, now()); */

        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);

       
        $cousuario = "-1";
        while ($col = mysqli_fetch_array($rS, MYSQLI_ASSOC)) {
            $cousuario = $col['cousuario'];    
        }
        $dt->closeConnection($conn);
        
        return $cousuario;
    }

}

?>