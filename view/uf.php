<?php
@session_start();

if ($_SESSION["logado"] == '-1') {
    header("Location: http://localhost");
    exit();
}

$listaUfs = $_SESSION['listaUfs'];

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
                    
                    <form method=POST action="/controllers/ufController.php">
                    <input type='hidden' name="acao" id=acao value='incluir'>
                    <table>
                        <tr>
                            <td>UF</td>
                            <td><input type='text' name="dcuf" id=dcuf></td>
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
                        </tr>
                        <?php 
                            foreach ($listaUfs as $i_dcuf) {
                                echo "<tr>";
                                    echo "<td>".$i_dcuf['dcuf']."</td>";
                                    
                                    echo "<td><a href='/controllers/ufController.php?acao=deletar&cod=".$i_dcuf['couf']."'>X</a></td>";
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
