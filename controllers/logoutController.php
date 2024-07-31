<?php

@session_start();
$_SESSION["logado"] = -1;
@session_destroy();

header("Location: http://localhost/");
exit();

?>
