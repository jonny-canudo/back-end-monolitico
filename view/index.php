<?php

@session_start();
$_SESSION["logado"] = -1;

?>

<html>
<body>
    <br><br><br>

<div align="center" >

<tr>
    <td><a href="view/carro.php"action="">CADASTRE O SEU VEÍCULO</a></td>
</tr>

</div>

<form method="post" action="../controllers/loginController.php">
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
    <input type='hidden' name="acao" id=acao value='incluir'>
        <table>
        <tr>
                <td>Nome</td>
                <td><input type="text" name="dcnome" id="dcnome"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text" name="dcemail" id="dcemail"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input type="password" name="dcsenha" id="dcsenha"></td>
            </tr>
           
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="btnincluir" id="btnincluir" value="incluir"></td>
            </tr>
        </table>
    </div>
</form>

</body>
</html>
