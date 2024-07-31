<?php

require_once("../dao/TrabalhoDAO.php");

$acao = $_GET['acao'];
if($acao == ''){
    $acao = $_POST['acao'];
}

if ($acao == "listar") {
    $dao = new TrabalhoDAO();
    $listaTrabalho = $dao->listar();
    
    @session_start();
    $_SESSION['listaTrabalho'] = $listaTrabalho;

    header("Location: http://localhost/view/trabalho.php");
    exit();
}


if ($acao == "deletar") {
    $cod = $_GET['cod'];
    
    $dao = new TrabalhoDAO();
    $dao->deletar($cod);
    

    $listaTrabalho = $dao->listar();

    @session_start();
    $_SESSION['listaTrabalho'] = $listaTrabalho;

    header("Location: http://localhost/view/trabalho.php");
    exit();
}

if ($acao == "incluir") {
    
    $dcnome = $_POST['dcnome'];
    $dclocaltrabalho = $_POST['dclocaltrabalho'];
    $dcsalario = $_POST['dcsalario'];
    
    $dao = new TrabalhoDAO();
    $dao->incluir($dcnome, $dclocaltrabalho, $dcsalario);
    

    $listaTrabalho = $dao->listar();
    
    @session_start();
    $_SESSION['listaTrabalho'] = $listaTrabalho;

    header("Location: http://localhost/view/trabalho.php");
    exit();
}

?>
