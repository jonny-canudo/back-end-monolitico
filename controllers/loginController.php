<?php

$email = $_POST['dcemail'];
$senha = $_POST['dcsenha'];

require_once("../to/LoginTO.php");
require_once("../dao/LoginDAO.php");

$to = new LoginTO ();
$to->setUsuario($email);
$to->setSenha($senha);



$dao = new LoginDAO();
$cousuario = $dao->logar($to);

@session_start();
$_SESSION["logado"] = $cousuario;

if ($cousuario == -1) {
    header("Location: http://localhost/");
    exit();
} else {
    header("Location: http://localhost/view/main.php");
    exit();
}

?>
