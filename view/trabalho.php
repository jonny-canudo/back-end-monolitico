<?php
@session_start();

if ($_SESSION["logado"] == '-1') {
    header("Location: http://localhost");
    exit();
}

$listaTrabalho = $_SESSION['listaTrabalho'];



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
                    
                    <form method=POST action="/controllers/trabalhoController.php">
                    <input type='hidden' name="acao" id=acao value='incluir'>
                    <table>
                    <tr>
                            <td>NOME</td>
                            <td><input type='text' name="dcnome" id=dcnome></td>
                        </tr>
                        <tr>
                            <td>LOCAL DE TRABALHO</td>
                            <td><input type='text' name="dclocaltrabalho" id=dclocaltrabalho></td>
                        </tr>
                        <tr>
                            <td>SALÁRIO</td>
                            <td><input type='text' name="dcsalario" id=dcsalario></td>
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
                    <table border=1 >
                        <tr>
                            <td align="center">Informações do local de trabalho</td>
                        </tr>
                        <br><br>
                        <br><br>
                        <br><br>
                        <?php 
                            foreach ($listaTrabalho as $i_dctrabalho) {
                                echo "<tr>";
                                    echo "<td>".$i_dctrabalho['dcnome']."</td>";
                                    echo "<td>".$i_dctrabalho['dclocaltrabalho']."</td>";
                                    echo "<td>".$i_dctrabalho['dcsalario']."</td>";
                                    
                                    echo "<td><a href='/controllers/trabalhoController.php?acao=deletar&cod=".$i_dctrabalho['cotrabalho']."'>X</a></td>";
                                echo "</tr>";  
                            }
                        ?>
                    </table>
                        </div>
                        <br>      
                </td>
            </tr>
    <br><br>
    <br><br>

        </table>
    </div>
</body>
</html>
