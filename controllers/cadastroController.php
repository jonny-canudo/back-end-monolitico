<?php

require_once("../dao/CadastroDAO.php");


if ($acao == "incluir") {



    $dcnome = $_POST['dcnome'];
    $dcemail = $_POST['dcemail'];
    $dcsenha = $_POST['dcsenha']; 

    $dao = new CadastroDAO();
    $dao->incluir( $dcnome, $dcemail, $dcsenha,'0', now());
    
}
 

else {
    header("Location: http://localhost/");
    exit();
}





?>
