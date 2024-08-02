<?php

require_once("../dao/CadastroDAO.php");


if ($acao == "incluir") {
    
    $dcemail = $_POST['dcemail'];
    $dcsenha = $_POST['dcsenha'];
    
    $dao = new CadastroDAO();
    $dao->incluir($dcemail, $dcsenha);
    

   
}
?>
