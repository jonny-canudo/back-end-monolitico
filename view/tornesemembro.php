
<html>
<body>



<form method="post" action="../controllers/tornesemembroController.php">
<input type='hidden' name="acao" id=acao value='cadastrar'>
    <br><br><br><br><br><br><br><br><br><br>
    <div align="center" >
        <table>
            <tr>
                <td>Nome</td>
                <td><input type="text" name="dcnome" id="dcnome"></td>
            </tr>
            <tr>
                <td>Sobrenome</td>
                <td><input type="text" name="dcsobrenome" id="dcsobrenome"></td>
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
                <td>Data-Nascimento</td>
                <td><input type="text" name="dtnascimento" id="dtnascimento"></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><input type="text" name="dctelefone" id="dctelefone"></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><input type="text" name="dcendereco" id="dcendereco"></td>
            </tr>
            <tr>
                <td>Cidade</td>
                <td><input type="text" name="dccidade" id="dccidade"></td>
            </tr>
            <tr>
                <td>Estado</td>
                <td><input type="text" name="dcestado" id="dcestado"></td>
            </tr>
            <tr>
                <td>País</td>
                <td><input type="text" name="dcpais" id="dcpais"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="btnCadastrar" id="btnCadastrar" value="cadastrar"></td>
            </tr>
            
        </table>
    </div>


</body>
</html>
