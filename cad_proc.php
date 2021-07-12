<div>
    <h1>Cadastrar Processo</h1>
    <form class="formulario" id="empresa_form" method="post">
    <?php include_once("conexao.php"); ?>
        <table id="tb_notif">
            <tr>
                <td>Nº do processo: </td><td><input type="text" name="campo_numProc" id="cmpNproc"></td>
            </tr>
            <tr>
                <td>Empresa/Pessoa física: </td><td>
                   <select name="cmpEmp" id="cmpEmp">
                        <option value="">Selecione a empresa...</option>
                        <?php
                            $sql = "SELECT * FROM lista_de_empresas ORDER BY nome";
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
                        <option value="">Preenchimento automático...</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Atividade de enquadramento: </td>
                <td>
                    <span class="carregando">Aguarde, carregando...</span>
                    <select name="cmpAtiv" id="cmpAtiv">
                        <option value="">Preenchimento automático...</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>CNPJ/CPF: </td>
                <td>
                    <span class="carregando">Aguarde, carregando...</span>
                    <select name="cmpCnpj" id="cmpCnpj">
                        <option value="">Preenchimento automático...</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Data de entrada: </td><td><input type="date" name="campo_date" id="cmpDate"></td>
            </tr>
            <tr>
                <td>Assunto: </td><td>
                    <select id="solicitacao" name="solicitacao">
                    <option value="Licença Prévia">Licença Prévia</option>
                    <option value="Renovação de Licença Prévia">Renovação de Licença Prévia</option>
                    <option value="Licença de Instalação">Licença de Instalação</option>
                    <option value="Renovação de Licença de Instalação">Renovação de Licença de Instalação</option>
                    <option value="Licença de Operação">Licença de Operação</option>
                    <option value="Renovação de Licença de Operação">Renovação de Licença de Operação</option>
                    <option value="Dispensa de Licenciamento Ambiental">Dispensa de Licenciamento Ambiental</option>
                    <option value="Renovação de Dispensa de Licenciamento Ambiental">Renovação de Dispensa de Licenciamento Ambiental</option>
                    <option value="Autorização para Depósito de Resíduos Inertes">Autorização para Depósito de Resíduos Inertes</option>
                    <option value="Renovação de Autorização para Depósitos de Resíduos Inertes">Renovação de Autorização para Depósitos de Resíduos Inertes</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Cadastrar"></td><td></td>
            </tr>
        </table>
    </form>
</div>

    <script type="text/javascript">
        
            $("form").on("click", ".btn-resetar", function () {
                $('#cmpEnd').html("Preenchimento automático...");
                $('#cmpAtiv').html("Preenchimento automático...");
            });
        </script>

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
                        $('#cmpEnd').html('<option value="">Preenchimento automático...</option>');
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
                        $('#cmpAtiv').html('<option value="">Preenchimento automático...</option>');
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $(function(){
                $('#cmpEmp').change(function(){
                    if( $(this).val() ) {
                        $('#cmpCnpj').hide();
                        $('.carregando').show();
                        $.getJSON('cnpjs.php?search=',{cmpEmp: $(this).val(), ajax: 'true'}, function(j){
                            //var options = '<option value="">Escolha Subcategoria</option>';
                            var options = "";   
                            for (var i = 0; i < j.length; i++) {
                                options += '<option value="' + j[i].cnpj_cpf + '">' + j[i].cnpj_cpf + '</option>';
                            }   
                            $('#cmpCnpj').html(options).show();
                            $('.carregando').hide();
                        });
                    } else {
                        $('#cmpCnpj').html('<option value="">Preenchimento automático...</option>');
                    }
                });
            });
        </script>