<?php

require_once("../util/DataSource.php");

   
class TorneSeMembroDAO {
        
    public function cadastrar($dcnome, $dcsobrenome, $email, $dcsenha, $dtnascimento, $dctelefone, $dcendereco, $dccidade, $dcestado, $dcpais ) {
       
        $str = "INSERT INTO tblcadastrousuarios ( dcnome, dcsobrenome, dcemail, dcsenha, dtnascimento, dctelefone, dcendereco, dccidade, dcestado, dcpais, dtentrada) 
         VALUES ('".$dcnome."', '".$dcsobrenome."', '".$dcemail."', '".$dcsenha."', '".$dtnascimento."', '".$dctelefone."', '".$dcendereco."', '".$dccidade."', '".$dcestado."', '".$dcpais."', now())";

        $dt = new DataSource();

        $conn = $dt->getConnection();

        $rS = mysqli_query($conn, $str);
        
        $dt->closeConnection($conn);
        
    }
  
  
    
}



?>