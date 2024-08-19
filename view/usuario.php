<?php
@session_start();

if ($_SESSION["logado"] == '-1') {
    header("Location: http://localhost");
    exit();
}

$listaUsuarios = $_SESSION['listaUsuarios'];

?>
<html>
<body>
    <br><br><br><br>
    <div align=center>
        <table width="700" border=1>
            <tr>
                <td valign=top>
                    <?php include("../util/menu.php"); ?>
                </td>
                <td>
                    <br>
                <div align=center>
                    
                    <form method=POST action="/controllers/usuarioController.php">
                    <input type='hidden' name="acao" id=acao value='incluir'>
                    <table>
                        <tr>
                            <td>nome</td>
                            <td><input type='text' name="dcnome" id=dcnome></td>
                        </tr>
                        
                        <tr>
                            <td>email</td>
                            <td><input type='text' name="dcemail" id=dcemail></td>
                        </tr>
                        <tr>
                            <td>senha</td>
                            <td><input type='text' name="dcsenha" id=dcsenha></td>

                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type='submit' name="btn" id=btn  value=incluir></td>
                        </tr> 
                    </table>
                    
                    </form>    
                        
                    </div>
                    <br>
                    <div align=center>
                    <table border=1>
                        <tr>
                            <td align="center">Nome</td>
                            <td align="center">Email</td>
                            <td align="center">Senha</td>
                            
                            <td align="center">&nbsp;</td>
                        </tr>
                        <?php 
                            foreach ($listaUsuarios as $i_usuario) {
                                echo "<tr>";
                                    echo "<td>".$i_usuario['dcnome']."</td>";
                                    echo "<td>".$i_usuario['dcemail']."</td>";
                                    echo "<td>".$i_usuario['dcsenha']."</td>";

                                    echo "<td><a href='/controllers/usuarioController.php?acao=deletar&cod=".$i_usuario['cousuario']."'>X</a></td>";
                                echo "</tr>";  
                            }
                        ?>
                    </table>
                        </div>
                        <br>      
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
