
<html>
<body>



<form method="post" action="../controllers/carroController.php">
<input type='hidden' name="acao" id=acao value='incluir'>
    <br><br><br><br><br><br><br><br><br><br>
    <div align="center" >
        <table>
            <tr>
                <td>Marca</td>
                <td><input type="text" name="dcmarca" id="dcmarca"></td>
            </tr>
            <tr>
                <td>Modelo</td>
                <td><input type="text" name="dcmodelo" id="dcmodelo"></td>
            </tr>
            <tr>
                <td>Ano de fabricação</td>
                <td><input type="text" name="dtfabricacao" id="dtfabricacao"></td>
            </tr><tr>
                <td>Cor</td>
                <td><input type="text" name="dccor" id="dccor"></td>
            </tr><tr>
                <td>Valor</td>
                <td><input type="text" name="dcpreco" id="dcpreco"></td>
            </tr><tr>
                <td>Data de Compra</td>
                <td><input type="text" name="dtcompra" id="dtcompra"></td>
            </tr><tr>
                <td>Número de Portas</td>
                <td><input type="text" name="dcnumeroportas" id="dcnumeroportas"></td>
            </tr><tr>
                <td>Tipo de combustível</td>
                <td><input type="text" name="dctipodecombustivel" id="dctipodecombustivel"></td>
            </tr><tr>
                <td>Quilometragem</td>
                <td><input type="text" name="dcquilometragem" id="dcquilometragem"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="btnIncluir" id="btnIncluir" value="incluir"></td>
            </tr>
        </table>
    </div>


</body>
</html>
