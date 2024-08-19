<?php

require_once("../dao/CarroDAO.php");


$acao = $_GET['acao'];
if($acao == ''){
    $acao = $_POST['acao'];
}

if ($acao == "incluir") {
    $dcmarca = $_POST['dcmarca'];
    $dcmodelo = $_POST['dcmodelo'];
    $dtfabricacao = $_POST['dtfabricacao']; 
    $dccor = $_POST['dccor']; 
    $dcpreco = $_POST['dcpreco']; 
    $dtcompra = $_POST['dtcompra']; 
    $dcnumeroportas = $_POST['dcnumeroportas']; 
    $dctipodecombustivel = $_POST['dctipodecombustivel']; 
    $dcquilometragem = $_POST['dcquilometragem']; 

    $dao = new CarroDAO();
    $dao->incluir($dcmarca, $dcmodelo, $dtfabricacao, $dccor, $dcpreco, $dtcompra, $dcnumeroportas, $dctipodecombustivel, $dcquilometragem);

       
    header("Location: http://localhost/");
    exit();
}

if ($acao == "deletar") {

}







?>
