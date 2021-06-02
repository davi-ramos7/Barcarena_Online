<div>
    <h3>GERAR NOTIFICAÇÃO</h3>
    <form action="criar_notif.php" method="post">
        <?php include_once("conexao.php"); ?>
        <table>
            <tr>
                <td>Empresa/Pessoa física: </td>
                <td>
                    <select name="cmpEmp" id="cmpEmp">
                        <option value="">Selecione a empresa...</option>
                        <?php
                            $sql = "SELECT * FROM lista_de_empresas";
                            $resultado = mysqli_query($con,$sql);
                            while($lh = mysqli_fetch_assoc($resultado)){
                                echo "<option value='".$lh['id']."'>".$lh['nome']." </option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Endereço: </td>
                <td>
                    <span class="carregando">Aguarde, carregando...</span>
                    <select name="cmpEnd" id="cmpEnd">
                        <option value="">Selecione o endereço...</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Atividade: </td>
                <td>
                    <span class="carregando">Aguarde, carregando...</span>
                    <select name="cmpAtiv" id="cmpAtiv">
                        <option value="">Selecione a atividade...</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>N° da notificação: </td><td><input type="text" name="campo_numNot" id="cmpNt"></td>
            </tr>
            <tr>
                <td>N° do processo: </td><td><input type="text" name="campo_numProc" id="cmpNproc"></td>
            </tr>
            <tr>
                <td>Destinatário: </td><td><input type="text" name="campo_dest" id="cmpdt"></td>
            </tr>
            <tr>
                <td>Documento 1: </td><td><input type="text" name="campo_doc1" id="cmpdoc1"></td>
            </tr>
            <tr>
                <td>Documento 2: </td><td><input type="text" name="campo_doc2" id="cmpdoc2"></td>
            </tr>
            <tr>
                <td>Documento 3: </td><td><input type="text" name="campo_doc3" id="cmpdoc3"></td>
            </tr>
            <tr>
                <td>Documento 4: </td><td><input type="text" name="campo_doc4" id="cmpdoc4"></td>
            </tr>
            <tr>
                <td>Documento 5: </td><td><input type="text" name="campo_doc5" id="cmpdoc5"></td>
            </tr>
            <tr>
                <td>Documento 6: </td><td><input type="text" name="campo_doc6" id="cmpdoc6"></td>
            </tr>
            <tr>
                <td>Documento 7: </td><td><input type="text" name="campo_doc7" id="cmpdoc7"></td>
            </tr>
            <tr>
                <td>Documento 8: </td><td><input type="text" name="campo_doc8" id="cmpdoc8"></td>
            </tr>
            <tr>
                <td>Documento 9: </td><td><input type="text" name="campo_doc9" id="cmpdoc9"></td>
            </tr>
            <tr>
                <td>Documento 10: </td><td><input type="text" name="campo_doc10" id="cmpdoc10"></td>
            </tr>
            <tr>
                <td><input type="submit" value="ENVIAR"></td><td></td>
            </tr>
        </table>
    </form>
</div>

    <script type="text/javascript">
        $(function(){
            $('#cmpEmp').change(function(){
                if( $(this).val() ) {
                    $('#cmpEnd').hide();
                    $('.carregando').show();
                    $.getJSON('enderecos.php?search=',{cmpEmp: $(this).val(), ajax: 'true'}, function(j){
                        //var options = '<option value="">Escolha Subcategoria</option>';
                        var options = "";	
                        for (var i = 0; i < j.length; i++) {
                            options += '<option value="' + j[i].endereco + '">' + j[i].endereco + '</option>';
                        }	
                        $('#cmpEnd').html(options).show();
                        $('.carregando').hide();
                    });
                } else {
                    $('#cmpEnd').html('<option value="">– Escolha a Subcategoria –</option>');
                }
            });
        });
	</script>

    <script type="text/javascript">
            $(function(){
                $('#cmpEmp').change(function(){
                    if( $(this).val() ) {
                        $('#cmpAtiv').hide();
                        $('.carregando').show();
                        $.getJSON('atividades.php?search=',{cmpEmp: $(this).val(), ajax: 'true'}, function(j){
                            //var options = '<option value="">Escolha Subcategoria</option>';
                            var options = "";	
                            for (var i = 0; i < j.length; i++) {
                                options += '<option value="' + j[i].atividade + '">' + j[i].atividade + '</option>';
                            }	
                            $('#cmpAtiv').html(options).show();
                            $('.carregando').hide();
                        });
                    } else {
                        $('#cmpAtiv').html('<option value="">– Escolha a Subcategoria –</option>');
                    }
                });
            });
    </script>

<!-- $numdanotif = "ler(EntradaForm)" . "/" . $ano;
$numdoprocesso = "ler(EntradaForm)" . "/" . $ano;
$nomedaempresa = "ler(EntradaForm)";
$atividade = "ler(EntradaForm)";
$destinatario = "ler(EntradaForm)";
$endereco = "ler(EntradaForm)";
$quebradelinha = "<br>";
$documento1 = "ler(EntradaForm)";
$documento2 = "ler(EntradaForm)";
$documento3 = "ler(EntradaForm)";
$documento4 = "ler(EntradaForm)";
$documento5 = "ler(EntradaForm)";
$documento6 = "ler(EntradaForm)";
$documento7 = "ler(EntradaForm)";
$documento8 = "ler(EntradaForm)";
$documento9 = "ler(EntradaForm)";
$documento10 = "ler(EntradaForm)"; -->