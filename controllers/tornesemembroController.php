<?php

require_once("../dao/TorneSeMembroDAO.php");


$acao = $_GET['acao'];
if($acao == ''){
    $acao = $_POST['acao'];
}

if ($acao == "cadastrar") {
    
    $dcnome = $_POST['dcnome'];
    $dcsobrenome = $_POST['dcsobrenome'];
    $dcemail = $_POST['dcemail'];
    $dcsenha = $_POST['dcsenha']; 
    $dtnascimento = $_POST['dtnascimento']; 
    $dctelefone = $_POST['dctelefone']; 
    $dcendereco = $_POST['dcendereco']; 
    $dccidade = $_POST['dccidade']; 
    $dcestado = $_POST['dcestado']; 
    $dcpais = $_POST['dcpais']; 

    $dao = new TorneSeMembroDAO();
    $dao->cadastrar($dcnome, $dcsobrenome, $dcemail, $dcsenha, $dtnascimento, $dctelefone, $dcendereco, $dccidade, $dcestado, $dcpais);

       
    header("Location: http://localhost/");
    exit();
}








?>
