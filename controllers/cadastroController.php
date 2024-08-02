<?php

require_once("../dao/CadastroDAO.php");


if ($acao == "CADASTRAR") {
    
    $dcemail = $_POST['dcemail'];
    $dcsenha = $_POST['dcsenha'];
    
    $dao = new CadastroDAO();
    $dao->CADASTRAR($dcemail, $dcsenha);
    
}
echo "chegou aqui";
exit();



/*else {
    header("Location: http://localhost/");
    exit();
}
*/





?>
