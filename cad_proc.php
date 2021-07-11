<div>
    <form class="formulario_empresa" id="empresa_form" method="post">
        <table id="table_empresa">
            <tr>
                <td>Nº do processo: </td><td><input type="text" name="campo_nome" id="nome_empresa"></td>
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
                </td>
            </tr>
            <tr>
                <td>Data de entrada: </td><td><input type="date" name="campo_nome" id="nome_empresa"></td>
            </tr>
            <tr>
                <td>Assunto: </td><td><input type="text" name="campo_nome" id="nome_empresa"></td>
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