<?php

require_once("../util/DataSource.php");

class LoginDAO {

    public function logar($email, $senha) {
        $str = "select cousuario from tblusuario where dcemail = '".$email."' and dcsenha = '".$senha."'";

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