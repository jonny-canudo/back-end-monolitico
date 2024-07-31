<?php

require_once("../dao/localidadesDAO.php");

$acao = $_GET['acao'];

if ($acao == "listar") {
    $dao = new localidadesDAO();
    $listaLocalidades = $dao->listar();
    
    @session_start();
    $_SESSION['listalocalidades'] = $lista;

    header("Location: http://localhost/view/localidades.php");
    exit();
}

if ($acao == "deletar") {
    $cod = $_GET['cod'];
    
    $dao = new LocalidadesDAO();
    $dao->deletar($cod);
    

    $listaLocalidades = $dao->listar();
    
    @session_start();
    $_SESSION['listaLocalidades'] = $listaLocalidades;

    header("Location: http://localhost/view/localidades.php");
    exit();
}




/*

require_once("../dao/LoginDAO.php");

$dao = new LoginDAO();
$cousuario = $dao->logar($email, $senha);

if ($cousuario == -1) {
    header("Location: http://localhost/view/index.php");
    exit();
} else {
    header("Location: http://localhost/view/main.php");
    exit();
}

*/

?>
