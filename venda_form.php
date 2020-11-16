<div>
    <h1>INSERIR VENDA</h1>
    <form action="ins_venda.php" method="post">
        <table>
            <tr>
                <td>Cliente: </td><td>
                    <select name="campo_nome" id="cmpNm">
                        <option value="#">Selecione...</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Funcionário: </td><td><input type="text" name="campo_funcionário" id="cmpFn"></td>
            </tr>
            <tr>
                <td>Animal: </td><td><input type="text" name="campo_animal" id="cmpAn"></td>
            </tr>
            <tr>
                <td>Data da venda: </td><td><input type="text" name="campo_dataVenda" id="cmpDv"></td>
            </tr>
            <tr>
                <td>Preço: </td><td><input type="text" name="campo_preco" id="cmpPrc"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SALVAR"></td><td></td>
            </tr>
        </table>
    </form>
</div>