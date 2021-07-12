    
    <h1>Gerar Notificação</h1>
    <form class="formulario" action="criar_notif.php" id="notif_form" method="post">
        <?php include_once("conexao.php"); ?>
        <table id="tb_notif">
            <tr>
                <td>Empresa/Pessoa física: </td>
                <td>
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
                        <option value="#">Preenchimento automático...</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Atividade: </td>
                <td>
                    <span class="carregando">Aguarde, carregando...</span>
                    <select name="cmpAtiv" id="cmpAtiv">
                        <option value="#">Preenchimento automático...</option>
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
        </table>

        <table id="table_doc">
            <tr id="doc1">
                <td>Documento 1: </td><td><select name="campo_doc1" id="cmpdoc1">
                        <option value="#">Selecione...</option>
                    </select></td><td><button type="button" id="add-campo"> + </button></td>
            </tr>
                <!-- <div id="doc1">
                    <label>Documento 1: </label>
                    <select name="campo_doc1" id="cmpdoc1" style="margin-top: 4px;">
                        <option value="#">Selecione...</option>
                    </select>
                    <button type="button" id="add-campo"> + </button>
                </div> -->
        </table>          

            <script>
            var cont = 1;
            //https://api.jquery.com/click/
                $('#add-campo').click(function () {
                    cont=cont + 1;
                //https://api.jquery.com/append/

                    $("#table_doc").append('<tr id="doc' + cont + '"><td>Documento ' + cont + ' '+":"+' </td><td><select name="campo_doc' + cont + '" id="cmpdoc' + cont + '" style="margin-top: 4px; margin-right: 6px"><option value="#">Selecione...</option></select></td><td><button type="button" id="' + cont+ '" class="btn-apagar" style="margin-left:2px"> - </button></td></tr>');
                    });

                $("form").on("click", ".btn-apagar", function () {
                    var button_id = $(this).attr("id");
                    $('#doc' + button_id).remove();
                    cont=cont - 1;
                });
            </script>

        <table>
            <tr>
                <td><input type="submit" class="btn-enviar" value="Enviar"><input type="reset" class="btn-resetar" value="Apagar"></td><td></td>
            </tr>
        </table>
    </form>

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

