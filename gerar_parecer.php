<div>
    <h1>GERAR PARECER TÉCNICO</h1>
    <form action="criar_parecer.php" method="post">
        <?php include_once("conexao.php"); ?>
        <table>
            <tr>
                <td>Empresa/Pessoa física: </td><td>
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
                <td>N° do parecer: </td><td><input type="text" name="campo_numPar" id="cmpNp"></td>
            </tr>
            <tr>
                <td>N° do processo: </td><td><input type="text" name="campo_numProc" id="cmpNproc"></td>
            </tr>
            <tr>
                <td>N° do protocolo: </td><td><input type="text" name="campo_numProt" id="cmpNprot"></td>
            </tr>
            <tr>
                <td>Solicitação: </td><td>
                    <select id="solicitacao" name="solicitacao">
                    <option value="Licença Prévia">Licença Prévia</option>
                    <option value="Renovação de Licença Prévia">Renovação de Licença Prévia</option>
                    <option value="Licença de Instalação">Licença de Instalação</option>
                    <option value="Renovação de Licença de Instalação">Renovação de Licença de Instalação</option>
                    <option value="Licença de Operação">Licença de Operação</option>
                    <option value="Renovação de Licença de Operação">Renovação de Licença de Operação</option>
                    <option value="Dispensa de Licenciamento Ambiental">Dispensa de Licenciamento Ambiental</option>
                    <option value="Renovação de Dispensa de Licenciamento Ambiental">Renovação de Dispensa de Licenciamento Ambiental</option>
                    <option value="Autorização Ambiental">Autorização Ambiental</option>
                    <option value="Renovação de Autorização Ambiental">Renovação de Autorização Ambiental</option>
                    <option value="Autorização para Depósito de Resíduos Inertes">Autorização para Depósito de Resíduos Inertes</option>
                    <option value="Renovação de Autorização para Depósitos de Resíduos Inertes">Renovação de Autorização para Depósitos de Resíduos Inertes</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Procurador: </td><td><input type="text" name="campo_procur" id="cmpProcur"></td>
            </tr>
            <tr>
                <td>Houve Notificação? </td><td>
                    <select id="notif" name="notif">
                      <option value="sim">Sim</option>
                      <option value="nao">Não</option>
                    </select></td>
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