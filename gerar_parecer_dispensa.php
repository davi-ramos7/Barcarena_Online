<div>
    <h3>GERAR PARECER TÉCNICO DE DISPENSA</h3>
    <form class="formulario" action="criar_parecer_dispensa.php" method="post">
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
                <td>Pessoa jurídica ou física? </td><td>
                    <input type="radio" id="pj" name="pessoa" value="pf">
                    <label for="pj">Pessoa jurídica</label>
                    <input type="radio" id="pf" name="pessoa" value="pj">
                    <label for="pf">Pessoa física</label><br>
                </td>
            </tr>
            <tr>
                <td>O endereço da empresa é o mesmo da atividade? </td><td>
                    <input type="radio" id="se" name="vistoria" value="sim" onchange="myFunction_end()">
                    <label for="se">Sim</label>
                    <input type="radio" id="ne" name="vistoria" value="nao" onchange="myFunction_end()">
                    <label for="ne">Não</label>
                </td>
            </tr>
        </table>    

        <table style="display: none" id="end_ativ">
            <tr>
                <td>Endereço da atividade:</td><td><input type="text" name="end_da_ativ" id="endAtiv"></td>
            </tr>
        </table>    
    
            <script>
            function myFunction_end() {
                if(document.getElementById("ne").checked){
                    document.getElementById("end_ativ").style.display = 'block';
                    document.getElementById("end_ativ").style.tableLayout = 'fixed';
                    document.getElementById("end_ativ").style.width = '700px';
                    document.querySelector("#end_ativ td:nth-of-type(1)").style.width = '40.5%';
                    document.querySelector("#end_ativ td:nth-of-type(2)").style.width = '75%';
                } else {
                    document.getElementById("end_ativ").style.display = 'none';
                }
            }
            </script>

        <table>
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
                <td>Data de entrada: </td><td><input type="date" name="campo_date" id="cmpDate"></td>
            </tr>
            <tr>
                <td>Solicitação: </td><td>
                    <select id="solicitacao" name="solicitacao">
                    <option value="Dispensa de Licenciamento Ambiental">Dispensa de Licenciamento Ambiental</option>
                    <option value="Renovação de Dispensa de Licenciamento Ambiental">Renovação de Dispensa de Licenciamento Ambiental</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Procurador: </td><td><input type="text" name="campo_proc" id="cmpProc"></td>
            </tr>
            <tr>
                <td>Houve vistoria? </td><td>
                    <input type="radio" id="n" name="vistoria" value="não" onchange="myFunction_1()">
                    <label for="n">Não</label>
                    <input type="radio" id="s" name="vistoria" value="sim" onchange="myFunction_1()">
                    <label for="s">Sim</label><br>
                </td>
            </tr>
        </table>

        <table style="display: none" id="dados_vistoria">
            <tr>
                <td>Data: </td><td><input type="date" name="date_vist" id="dtVt"></td>
            </tr>
        </table>    
    
            <script>
            function myFunction_1() {
                if(document.getElementById("s").checked){
                    document.getElementById("dados_vistoria").style.display = 'block';
                    document.getElementById("dados_vistoria").style.tableLayout = 'fixed';
                    document.getElementById("dados_vistoria").style.width = '700px';
                    document.querySelector("#dados_vistoria td:nth-of-type(1)").style.width = '55%';
                    // document.querySelector("#dados_vistoria td:nth-of-type(2)").style.width = '35%';
                } else {
                    document.getElementById("dados_vistoria").style.display = 'none';
                }
            }
            </script>

        <table>
            <tr>
                <td>Houve notificação? </td><td>
                    <input type="radio" id="n_01" name="notif" value="nao" onchange="myFunction_2()">
                    <label for="n">Não</label>
                    <input type="radio" id="s_01" name="notif" value="sim" onchange="myFunction_2()">
                    <label for="s">Sim</label><br>
                </td>
            </tr>
        </table><br>

        <main>
        <div style="display: none; margin-left: 0px" id="dados_notif_01">
            <label style="color: black; padding-left: 100px; padding-right: 100px; margin-bottom: 20px;">Notificação 1: </label> <button type="button" id="add-campo"> + </button> <br>
            <label style="float: left; margin-bottom: 5px;">Nº: </label>
            <input type="text" name="num_notif_01" id="nmNot01" style="margin-left: 10px; margin-bottom: 5px;"><br>
            <label style="float:left; margin-bottom: 5px;">Data: </label>
            <input type="date" name="date_notif_01" id="dtNot01" style="margin-left: 100px; margin-bottom: 5px;"><br>
            <label style="float:left; margin-bottom: 5px;">Recebimento: </label>
            <input type="date" name="receb_notif_01" id="rbNot01" style="margin-left: 50px; margin-bottom: 5px;"><br>
            <label style="float:left; margin-bottom: 5px;">Atendimento: </label>
            <input type="date" name="atend_notif_01" id="atNot01" style="margin-left: 50px; margin-bottom: 5px;">
        </div>
        </main>
    
            <script>
            function myFunction_2() {
                if(document.getElementById("s_01").checked){
                    document.getElementById("dados_notif_01").style.display = 'block';
                    document.getElementById("dados_notif_01").style.tableLayout = 'fixed';
                    document.getElementById("dados_notif_01").style.width = '350px';
                    // document.getElementById("dados_notif_01").style.margin = '0px';
                    // document.querySelector("#dados_notif_01 td:nth-of-type(1)").style.width = '25%';
                    // document.querySelector("#dados_notif_01 td:nth-of-type(2)").style.width = '75%';
                } else {
                    document.getElementById("dados_notif_01").style.display = 'none';
                }
            }
            </script>

            <script>
            var cont = 1;
            //https://api.jquery.com/click/
                $('#add-campo').click(function () {
                    cont=cont + 1;
                //https://api.jquery.com/append/

                    $("main").append('<div id="campo' + cont + '"><label style="color: black; padding-left: 100px; padding-right: 100px; margin-bottom: 20px;">Notificação '+ cont +''+":"+'</label><button type="button" id="' + cont + '" class="btn-apagar"> - </button><br><label style="float: left; margin-bottom: 5px;">Nº: </label><input type="text" name="num_notif' + cont + '" id="nmNot' + cont + '" style="margin-left: 10px; margin-bottom: 5px;"><br><label style="float:left; margin-bottom: 5px;">Data: </label><input type="date" name="date_notif' + cont + '" id="dtNot' + cont + '" style="margin-left: 100px; margin-bottom: 5px;"><br><label style="float:left; margin-bottom: 5px;">Recebimento: </label><input type="date" name="receb_notif_' + cont + '" id="rbNot' + cont + '" style="margin-left: 50px; margin-bottom: 5px;"><br><label style="float:left; margin-bottom: 5px;">Atendimento: </label><input type="date" name="atend_notif_' + cont + '" id="atNot' + cont + '" style="margin-left: 50px; margin-bottom: 5px;"></div>');
                });

                $("form").on("click", ".btn-apagar", function () {
                    var button_id = $(this).attr("id");
                    $('#campo' + button_id + '').remove();
                    cont=cont - 1;
                });
            </script>
            
        <table>
            <tr>
                <td><input type="submit" value="ENVIAR"></td>
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