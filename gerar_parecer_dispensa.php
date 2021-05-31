<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<div id="conteudo" style="width:65vw;height:70vh;background-color:orange;float:right">
    <h3>GERAR PARECER TÉCNICO</h3>
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
                    <select id="notif" name="notif" onchange="myFunction()">
                      <option value="nao">Não</option>
                      <option value="sim">Sim</option>
                    </select></td>
            </tr>
         <!--    <tr> 
                <td style="display: none" id="cmp_numNot_lb">Nº da notificação: </td><td><input type="text" style="display: none" id="cmp_numNot"></td>
            </tr>
            <tr>
                <td style="display: none" id="cmp_dataNot_lb">Data da notificação: </td><td><input type="date" style="display: none" id="cmp_dataNot"></td>
            </tr>
            <tr> 
                <td style="display: none" id="cmp_recebNot_lb">Receb. da notificação: </td><td><input type="date" style="display: none" id="cmp_recebNot"></td>
            </tr>
            <tr>
                <td style="display: none" id="cmp_atendNot_lb">Atend. da notificação: </td><td><input type="date" style="display: none" id="cmp_atendNot"></td>
            </tr> -->
        </table>

        <table style="display: none" id="dados_notif_01">
            <thead>
                <tr>
                  <th colspan="2">Notificação 01</th>
                </tr>
            </thead>
            <tr> 
                <td>Nº: </td><td><input type="text"></td>
            </tr>
            <tr>
                <td>Data: </td><td><input type="date"></td>
            </tr>
            <tr> 
                <td>Recebimento: </td><td><input type="date"></td>
            </tr>
            <tr>
                <td>Atendimento: </td><td><input type="date"></td>
            </tr>
        </table>    
            
           <!--  <script>
            function myFunction() {
                var x = document.getElementById("notif").value;
                if(x == "sim"){
                    document.getElementById("cmp_numNot_lb").style.display = 'block';
                    document.getElementById("cmp_numNot").style.display = 'block';
                    document.getElementById("cmp_dataNot_lb").style.display = 'block';
                    document.getElementById("cmp_dataNot").style.display = 'block';
                    document.getElementById("cmp_recebNot_lb").style.display = 'block';
                    document.getElementById("cmp_recebNot").style.display = 'block';
                    document.getElementById("cmp_atendNot_lb").style.display = 'block';
                    document.getElementById("cmp_atendNot").style.display = 'block';
                } else {
                    document.getElementById("cmp_numNot_lb").style.display = 'none';
                    document.getElementById("cmp_numNot").style.display = 'none';
                    document.getElementById("cmp_dataNot_lb").style.display = 'none';
                    document.getElementById("cmp_dataNot").style.display = 'none';
                    document.getElementById("cmp_recebNot_lb").style.display = 'none';
                    document.getElementById("cmp_recebNot").style.display = 'none';
                    document.getElementById("cmp_atendNot_lb").style.display = 'none';
                    document.getElementById("cmp_atendNot").style.display = 'none';
                }
            }
            </script> -->
            <script>
            function myFunction() {
                var x = document.getElementById("notif").value;
                if(x == "sim"){
                    document.getElementById("dados_notif_01").style.display = 'block';
                    document.getElementById("dados_notif_01").style.tableLayout = 'fixed';
                    document.getElementById("dados_notif_01").style.width = '700px';
                    document.querySelectorAll('td:nth-child(1)').style.width = '25%';
                    document.querySelectorAll('td:nth-child(2)').style.width = '75%';
                } else {
                    document.getElementById("dados_notif_01").style.display = 'none';
                }
            }
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