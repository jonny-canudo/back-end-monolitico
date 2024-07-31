<?php

require_once("../dao/UfDAO.php");

$acao = $_GET['acao'];
if($acao == ''){
    $acao = $_POST['acao'];
}

if ($acao == "listar") {
    $dao = new UfDAO();
    $listaUfs = $dao->listar();
    
    @session_start();
    $_SESSION['listaUfs'] = $listaUfs;

    header("Location: http://localhost/view/uf.php");
    exit();
}


if ($acao == "deletar") {
    $cod = $_GET['cod'];
    
    $dao = new UfDAO();
    $dao->deletar($cod);
    

    $listaUfs = $dao->listar();

    @session_start();
    $_SESSION['listaUfs'] = $listaUfs;

    header("Location: http://localhost/view/uf.php");
    exit();
}

if ($acao == "incluir") {
    
    $dcuf = $_POST['dcuf'];
    
    $dao = new ufDAO();
    $dao->incluir($dcuf);
    

    $listaUfs = $dao->listar();
    
    @session_start();
    $_SESSION['listaUfs'] = $listaUfs;

    header("Location: http://localhost/view/uf.php");
    exit();
}

?>
