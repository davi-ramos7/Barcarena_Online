<div>
    <form class="formulario" id="notif_form" method="post">
        <?php include_once("conexao.php"); ?>
        <table id="tb_notif">
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
                        <option value="#"></option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Atividade: </td>
                <td>
                    <span class="carregando">Aguarde, carregando...</span>
                    <select name="cmpAtiv" id="cmpAtiv">
                        <option value="#"></option>
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

        <main> 
            <div id="doc1">
                <label>Documento 1: </label>
                <select name="campo_doc1" id="cmpdoc1" style="margin-left: 90px; margin-top: 4px;">
                    <option value="#">Selecione...</option>
                </select>
                <button type="button" id="add-campo"> + </button>
            </div>
        </main>            

            <script>
            var cont = 1;
            //https://api.jquery.com/click/
                $('#add-campo').click(function () {
                    cont=cont + 1;
                //https://api.jquery.com/append/

                    $("main").append('<div id="doc' + cont + '"><label>Documento ' + cont + ' '+":"+' </label><select name="campo_doc' + cont + '" id="cmpdoc' + cont + '" style="margin-left: 84px; margin-top: 4px; margin-right: 6px"><option value="#">Selecione...</option></select><button type="button" id="' + cont+ '" class="btn-apagar"> - </button></div>');
                    });

                $("form").on("click", ".btn-apagar", function () {
                    var button_id = $(this).attr("id");
                    $('#doc' + button_id).remove();
                    cont=cont - 1;
                });
            </script>

        <table>
                <td><input type="submit" value="Enviar"></td><td></td>
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