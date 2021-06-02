<div>
    <h3>GERAR PARECER TÉCNICO</h3>
    <form class="formulario" action="criar_parecer_licenca.php" method="post">
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
                <td>Data de entrada: </td><td><input type="date" name="campo_date" id="cmpDate"></td>
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
                    <!-- <option value="Autorização para Depósito de Resíduos Inertes">Autorização para Depósito de Resíduos Inertes</option>
                    <option value="Renovação de Autorização para Depósitos de Resíduos Inertes">Renovação de Autorização para Depósitos de Resíduos Inertes</option> -->
                    </select>
                </td>
            </tr>
            <tr>
                <td>Procurador: </td><td><input type="text" name="campo_proc" id="cmpProc"></td>
            </tr>
            <tr>
                <td>Houve vistoria? </td><td>
                    <input type="radio" id="n" name="vistoria" value="não" onchange="myFunction_1()">
                    <label for="n">Não</label><br>
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

        <!-- <table style="display: none" id="dados_notif_01">
            <thead>
                <tr>
                  <th colspan="2">Notificação 01</th><td><button type="button" id="add-campo"> + </button></td>
                </tr>
            </thead>
            <tr> 
                <td>Nº: </td><td><input type="text" name="num_notif_01" id="nmNot01"></td>
            </tr>
            <tr>
                <td>Data: </td><td><input type="date" name="date_notif_01" id="dtNot01"></td>
            </tr>
            <tr> 
                <td>Recebimento: </td><td><input type="date" name="receb_notif_01" id="rbNot01"></td>
            </tr>
            <tr>
                <td>Atendimento: </td><td><input type="date" name="atend_notif_01" id="atNot01"></td>
            </tr>
        </table> -->   

        <table>
            <tr>
                <td>Houve notificação? </td><td>
                    <input type="radio" id="n_01" name="notif" value="nao" onchange="myFunction_2()">
                    <label for="n">Não</label><br>
                    <input type="radio" id="s_01" name="notif" value="sim" onchange="myFunction_2()">
                    <label for="s">Sim</label><br>
                </td>
            </tr>
        </table><br>

        <div style="display: none; margin-left: 40px" id="dados_notif_01">
            <label style="color: black; padding-left: 100px; padding-right: 100px; margin-bottom: 20px;">Notificação 01: </label> <button type="button" id="add-campo"> + </button> <br>
            <label style="float: left; margin-bottom: 5px;">Nº: </label>
            <input type="text" name="num_notif_01" id="nmNot01" style="margin-left: 10px; margin-bottom: 5px;"><br>
            <label style="float:left; margin-bottom: 5px;">Data: </label>
            <input type="date" name="date_notif_01" id="dtNot01" style="margin-left: 100px; margin-bottom: 5px;"><br>
            <label style="float:left; margin-bottom: 5px;">Recebimento: </label>
            <input type="date" name="receb_notif_01" id="rbNot01" style="margin-left: 50px; margin-bottom: 5px;"><br>
            <label style="float:left; margin-bottom: 5px;">Atendimento: </label>
            <input type="date" name="atend_notif_01" id="atNot01" style="margin-left: 50px; margin-bottom: 5px;">
        </div>
    
            <script>
            function myFunction_2() {
                if(document.getElementById("s_01").checked){
                    document.getElementById("dados_notif_01").style.display = 'block';
                    document.getElementById("dados_notif_01").style.tableLayout = 'fixed';
                    document.getElementById("dados_notif_01").style.width = '350px';
                    // document.querySelector("#dados_notif_01 td:nth-of-type(1)").style.width = '25%';
                    // document.querySelector("#dados_notif_01 td:nth-of-type(2)").style.width = '75%';
                } else {
                    document.getElementById("dados_notif_01").style.display = 'none';
                }
            }
            </script>

            <script>
            //https://api.jquery.com/click/
            $("#add-campo").click(function () {
                //https://api.jquery.com/append/
                if ($("#dados_notif_01").length && $("#dados_notif_02").length == false) {

                    $("#dados_notif_01").append('<div style="margin-left: 0px" id="dados_notif_02"><label style="color: black; padding-left: 100px; padding-right: 100px; margin-bottom: 20px;">Notificação 02: </label><br><label style="float: left; margin-bottom: 5px;">Nº: </label><input type="text" name="num_notif_02" id="nmNot02" style="margin-left: 10px; margin-bottom: 5px;"><br><label style="float:left; margin-bottom: 5px;">Data: </label><input type="date" name="date_notif_02" id="dtNot02" style="margin-left: 100px; margin-bottom: 5px;"><br><label style="float:left; margin-bottom: 5px;">Recebimento: </label><input type="date" name="receb_notif_02" id="rbNot02" style="margin-left: 50px; margin-bottom: 5px;"><br><label style="float:left; margin-bottom: 5px;">Atendimento: </label><input type="date" name="atend_notif_02" id="atNot02" style="margin-left: 50px; margin-bottom: 5px;"></div>');

                } else if ($("#dados_notif_01").length && $("#dados_notif_02").length && $("#dados_notif_03").length == false) {

                    $("#dados_notif_02").append('<div style="margin-left: 0px" id="dados_notif_03"><label style="color: black; padding-left: 100px; padding-right: 100px; margin-bottom: 20px;">Notificação 03: </label><br><label style="float: left; margin-bottom: 5px;">Nº: </label><input type="text" name="num_notif_03" id="nmNot03" style="margin-left: 10px; margin-bottom: 5px;"><br><label style="float:left; margin-bottom: 5px;">Data: </label><input type="date" name="date_notif_03" id="dtNot03" style="margin-left: 100px; margin-bottom: 5px;"><br><label style="float:left; margin-bottom: 5px;">Recebimento: </label><input type="date" name="receb_notif_03" id="rbNot03" style="margin-left: 50px; margin-bottom: 5px;"><br><label style="float:left; margin-bottom: 5px;">Atendimento: </label><input type="date" name="atend_notif_03" id="atNot03" style="margin-left: 50px; margin-bottom: 5px;"></div>');
        
                }
            });
            </script>

        <table>
            <tr>
                <td>Porte: </td><td><input type="text" name="campo_porte" id="cmpPt"></td>
            </tr>
            <tr>
                <td>Potencial poluidor: </td><td><input type="text" name="campo_pp" id="cmpPp"></td>
            </tr>
            <tr>
                <td>Valor da taxa: </td><td><input type="text" name="campo_vtaxa" id="cmpVt"></td>
            </tr>
            <tr>
                <td>Geração da taxa: </td><td><input type="date" name="campo_dtaxa" id="cmpDt"></td>
            </tr>
            <tr>
                <td>Pagamento da taxa: </td><td><input type="date" name="campo_ptaxa" id="cmpPt"></td>
            </tr>
        </table><br>

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