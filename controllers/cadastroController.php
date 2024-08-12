<?php

require_once("../to/CadastroTO.php");
require_once("../dao/CadastroDAO.php");


$acao = $_GET['acao'];
if($acao == ''){
    $acao = $_POST['acao'];
}

if ($acao == "incluir") {
    $dcnome = $_POST['dcnome'];
    $dcemail = $_POST['dcemail'];
    $dcsenha = $_POST['dcsenha']; 

    $dao = new CadastroDAO();
    $dao->incluir($dcnome, $dcemail, $dcsenha);
    
}
 else {
    header("Location: http://localhost/view/index.php");
    exit();
}





?>
