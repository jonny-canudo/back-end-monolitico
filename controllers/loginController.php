<?php

$email = $_POST['dcemail'];
$senha = $_POST['dcsenha'];

require_once("../dao/LoginDAO.php");

$dao = new LoginDAO();
$cousuario = $dao->logar($email, $senha);

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
