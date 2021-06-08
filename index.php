<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    
    <title>DEPARTAMENTO DE LICENCIAMENTO AMBIENTAL</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="scripts.js"></script>
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script></script> -->
	
</head>
<body>
        <div class="topo">
            <div class="logo">
                <img src="Logo da Semade.png" width="170px" height="100px"> 
            </div> 
            <div class="menu">
                <ul>
                    <li><a href="index.php?p=gn">Gerar Notificação</a></li>
                    <li>
                        <div class="acao_menu">
                            <button class="botao_menu">Gerar Parecer</button>
                            <div class="submenu2">
                                <a href="index.php?p=pl">Parecer para Licença</a>
                                <a href="index.php?p=pd">Parecer para Dispensa</a>
                                <a href="index.php?p=ps">Parecer de Encaminhamento à SEMAS/Pa</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="acao_menu">
                            <button class="botao_menu">Cadastrar</button>
                            <div class="submenu2">
                                <a href="index.php?p=ce">Cadastrar Empresa</a>
                                <a href="index.php?p=cd">Cadastrar Documento</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="paginas" class="conteudo">
            <div id="upper_border">
            </div>

            <?php
                if(isset($_GET['p'])){
                    $pagina = $_GET['p'];
                }else{
                    $pagina = 'gn';
                }
                if($pagina == 'gn'){
                    include "gerar_notif.php";
                }elseif($pagina == 'gp'){
                    include "gerar_parecer.php";
                }elseif($pagina == 'ce'){
                    include "empresa_form.html";
                }elseif($pagina == 'cd'){
                    include "documento_form.html";
                }elseif($pagina == 'pl'){
                    include "gerar_parecer_licenca.php";
                }elseif($pagina == 'pd'){
                    include "gerar_parecer_dispensa.php";
                }elseif($pagina == 'ps'){
                    include "gerar_parecer_semas.php";
                }
            ?>
        </div>
        <div class="rodape">
        <div id="lower_border">
        </div>
            <p>Versão 1.0</p>
        </div>
</body>
</html>