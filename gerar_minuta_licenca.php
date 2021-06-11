<div>
    <form class="formulario" id="parecer_form_l" method="post">
        <?php include_once("conexao.php"); ?>
        <table>
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
                <td>Atividade: </td>
                <td>
                    <span class="carregando">Aguarde, carregando...</span>
                    <select name="cmpAtiv" id="cmpAtiv">
                        <option value="">Preenchimento automático...</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tipo de licença: </td><td>
                    <select id="tipo_licenca" name="tipo_licenca">
                    <option value="Licença Prévia">Licença Prévia</option>
                    <option value="Renovação de Licença Prévia">Renovação de Licença Prévia</option>
                    <option value="Licença de Instalação">Licença de Instalação</option>
                    <option value="Renovação de Licença de Instalação">Renovação de Licença de Instalação</option>
                    <option value="Licença de Operação">Licença de Operação</option>
                    <option value="Renovação de Licença de Operação">Renovação de Licença de Operação</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>N° da licença: </td><td><input type="text" name="campo_num_lic" id="cmpNLic"></td>
            </tr>
            <tr>
                <td>N° do processo: </td><td><input type="text" name="campo_numProc" id="cmpNproc"></td>
            </tr>
            <tr>
                <td>Validade: </td><td><input type="date" name="campo_val" id="cmpVal"></td>
            </tr>
            <tr>
                <td>Nome fantasia: </td><td><input type="text" name="campo_nome_fant" id="cmpNFant"></td>
            </tr>
            <tr>
                <td>Porte e Potencial Poluidor: </td><td>
                    <select id="porte" name="porte_potencial">
                    <option value="a1">A-I</option>
                    <option value="a2">A-II</option>
                    <option value="a3">A-III</option>
                    <option value="b1">B-I</option>
                    <option value="b2">B-II</option>
                    <option value="b3">B-III</option>
                    <option value="c1">C-I</option>
                    <option value="c2">C-II</option>
                    <option value="c3">C-III</option>
                    <option value="d1">D-I</option>
                    <option value="d2">D-II</option>
                    <option value="d3">D-III</option>                    
                    </select>
                </td>
            </tr>            
            <tr>
                <td>Bairro/Distrito: </td><td><input type="text" name="campo_bairro" id="cmpBairro"></td>
            </tr> 
            <tr>
                <td>CEP: </td><td><input type="text" name="campo_cep" id="cmpCep"></td>
            </tr>
            <tr>
                <td>Inscrição Estadual: </td><td><input type="text" name="campo_insc" id="cmpInsc"></td>
            </tr>
            <tr>
                <td>CNPJ/CPF: </td><td><input type="text" name="campo_cnpj" id="cmpCnpj"></td>
            </tr>
            <tr>
                <td>Coordenadas geográficas: </td><td><input type="text" name="campo_cg" id="cmpCg"></td>
            </tr>
            <tr>
                <td>Observações: </td><td><input type="text" name="campo_obs" id="cmpObs"></td>
            </tr>
            <tr>
                <td>Houve condicionantes? </td><td>
                    <input type="radio" id="n" name="cond" value="nao" onchange="myFunction()">
                    <label for="n">Não</label>
                    <input type="radio" id="s" name="cond" value="sim" onchange="myFunction()">
                    <label for="s">Sim</label><br>
                </td>
            </tr> 
        </table>

        <table style="display: none" id="table_doc">
            <tr id="cond1">
                <td>Condicionante n° 1: </td><td><select name="campo_cond1" id="cmpdoc1">
                        <option value="#">Selecione...</option>
                    </select></td><td><button type="button" id="add-campo"> + </button></td>
            </tr>
        </table>    
    
            <script>
            function myFunction() {
                if(document.getElementById("s").checked){
                    document.getElementById("table_doc").style.display = 'block';
                    document.getElementById("table_doc").style.tableLayout = 'fixed';
                    document.getElementById("table_doc").style.width = '720px';
                    document.querySelector("#table_doc td:nth-of-type(1)").style.width = '29.5%';
                    document.querySelector("#table_doc td:nth-of-type(2)").style.width = '65.5%';
                    document.querySelector("#table_doc td:nth-of-type(3)").style.width = '6%';
                    // document.querySelector("#dados_vistoria td:nth-of-type(2)").style.width = '35%';
                } else {
                    document.getElementById("table_doc").style.display = 'none';
                }
            }
            </script>

            <script>
            var cont = 1;
            //https://api.jquery.com/click/
                $('#add-campo').click(function () {
                    cont=cont + 1;
                //https://api.jquery.com/append/

                    $("#table_doc").append('<tr id="cond' + cont + '"><td>Condicionante n° ' + cont + ' '+":"+' </td><td><select name="campo_cond' + cont + '" id="cmpdoc' + cont + '" style="margin-top: 4px; margin-right: 6px"><option value="#">Selecione...</option></select></td><td><button type="button" id="' + cont+ '" class="btn-apagar" style="margin-left:2px"> - </button></td></tr>');
                });

                $("form").on("click", ".btn-apagar", function () {
                    var button_id = $(this).attr("id");
                    $('#cond' + button_id + '').remove();
                    cont=cont - 1;
                });
            </script>

        <table>
            <tr>
                <td><input type="submit" value="Enviar"></td>
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