<?php
@session_start();

if ($_SESSION["logado"] == '-1') {
    header("Location: http://localhost");
    exit();
}

$listaDadosCarro = $_SESSION['listaDadosCarro'];

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
                    
                   <!-- <form method=POST action="/controllers/dadoscarroController.php">
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
                    
                    </form> -->   
                        
                    </div>
                    <br>
                    <div align=center>
                    <table border=1>
                        <tr>
                            <td align="center">Modelo</td>
                            <td align="center">Marca</td>
                            <td align="center">Dt de Fabricação</td>
                            <td align="center">Cor do Carro</td>
                            <td align="center">Valor Tabela fip</td>
                            <td align="center">Data de Compra</td>

                            <td align="center">&nbsp;</td>
                        </tr>
                        <?php 
                            foreach ($listaDadosCarro as $i_dadoscarro) {
                                echo "<tr>";
                                    echo "<td>".$i_dadoscarro['dcmodelo']."</td>";
                                    echo "<td>".$i_dadoscarro['dcmarca']."</td>";
                                    echo "<td>".$i_dadoscarro['dtfabricacao']."</td>";
                                    echo "<td>".$i_dadoscarro['dccor']."</td>";
                                    echo "<td>".$i_dadoscarro['dcpreco']."</td>";
                                    echo "<td>".$i_dadoscarro['dtcompra']."</td>";


                                    echo "<td><a href='/controllers/dadoscarroController.php?acao=deletar&cod=".$i_dadoscarro['cocarro']."'>X</a></td>";
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
