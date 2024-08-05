<?php
require_once("../dao/DadosCarroDAO.php");

$acao = $_GET['acao'];
if($acao == ''){
    $acao = $_POST['acao'];
}

if ($acao == "listar") {
    $dao = new DadosCarroDAO();
    $listaDadosCarro = $dao->listar();
    
    @session_start();
    $_SESSION['listaDadosCarro'] = $listaDadosCarro;

    header("Location: http://localhost/view/dadoscarro.php");
    exit();
}

if ($acao == "deletar") {
    $cod = $_GET['cod'];
    
    $dao = new DadosCarroDAO();
    $dao->deletar($cod);
    

    $listaDadosCarro = $dao->listar();
    
    @session_start();
    $_SESSION['listaDadosCarro'] = $listaDadosCarro;

    header("Location: http://localhost/view/dadoscarro.php");
    exit();
}

/*if ($acao == "incluir") {
    
    $dcnome = $_POST['dcnome'];
    $dcemail = $_POST['dcemail'];
    $dcsenha = $_POST['dcsenha'];
    
    $dao = new UsuarioDAO();
    $dao->incluir($dcnome, $dcemail, $dcsenha);
    

    $listaUsuarios = $dao->listar();
    
    @session_start();
    $_SESSION['listaUsuarios'] = $listaUsuarios;

    header("Location: http://localhost/view/usuario.php");
    exit();
}
*/
?>
