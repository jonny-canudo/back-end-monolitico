<?php

require_once("../util/DataSource.php");
    echo "chegou";
    exit();

    class CadastroDAO {
        
        public function cadastrar($email, $senha) {
        $str = "INSERT INTO tblusuario (dcemail, dcsenha) VALUES (?, ?)";


        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);

       
        header("Location: http://localhost");
        exit();
    }

}

?>