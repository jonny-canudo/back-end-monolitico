<?php

@session_start();
$_SESSION["logado"] = -1;

?>

<html>
<body>

<form method="post" action="controllers/loginController.php">
    <br><br><br><br><br><br><br><br><br><br>
    <div align="center" >
        <table>
            <tr>
                <td>Usuário</td>
                <td><input type="text" name="dcemail" id="dcemail"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input type="password" name="dcsenha" id="dcsenha"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="btnLogin" id="btnLogin" value="LOGAR"></td>
            </tr>
        </table>
    </div>
</form>
<br>
<br>
<br>
<form method="post" action="controllers/cadastroController.php"> 
    <div align="center" >
        <table>
            <tr>
                <td>Usuário</td>
                <td><input type="text" name="dcemail" id="dcemail"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input type="password" name="dcsenha" id="dcsenha"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="btnLogin" id="btnLogin" value="CADASTRAR"></td>
            </tr>
        </table>
    </div>
</form>

</body>
</html>
