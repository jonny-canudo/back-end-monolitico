<?php

require_once("../util/DataSource.php");
   

    class CadastroDAO {
        
        public function CADASTRAR($email, $senha) {
        $str = "INSERT INTO tblusuario (dcemail, dcsenha) VALUES ('".$email."' '".$senha."'";


        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);

       
        header("Location: http://localhost/");
        exit();
    }

}

?>