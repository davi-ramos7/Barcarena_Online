<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen and (min-width:641px)">
    <link rel="stylesheet" type="text/css" href="mobile.css" media="screen and (max-width:640px)">
    
    <title>DEPARTAMENTO DE LICENCIAMENTO AMBIENTAL</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="scripts.js"></script>
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script></script> -->
	
</head>
<body>
    
        <div class="topo">
            <div id="upper_border"></div>
            <div class="logo">
                <img src='./imagens/Logo da Semade.png' id="logo"> 
            </div> 
            <div class="menu">
                <ul>
                    <li><a href="index.php?p=gn"><button class="botao_menu_1">Gerar Notificação</button></a></li>
                    <li>
                        <div class="acao_menu">
                            <button class="botao_menu_2">Gerar Parecer</button>
                            <div class="submenu">
                                <a href="index.php?p=pl">Licença</a>
                                <a href="index.php?p=pd">Dispensa</a>
                                <a href="index.php?p=ps">SEMAS/Pa</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="acao_menu">
                            <button class="botao_menu_2">Gerar Minuta</button>
                            <div class="submenu">
                                <a href="index.php?p=gml">Licença</a>
                                <a href="index.php?p=gmd">Dispensa</a>
                            </div>
                        </div>
                    </li>
                    <li>
                    <li>
                        <div class="acao_menu">
                            <button class="botao_menu_2">Cadastrar</button>
                            <div class="submenu">
                                <a href="index.php?p=cp">Processo</a>
                                <a href="index.php?p=ce">Empresa</a>
                                <a href="index.php?p=cd">Documento</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="acao_menu">
                            <button class="botao_menu_2">Listar/Editar</button>
                            <div class="submenu">
                                <a href="index.php?p=elp">Processos</a>
                                <a href="index.php?pagina=1">Empresas</a>
                                <a href="index.php?p=led">Documentos</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="paginas" class="conteudo">

            <?php
                if(isset($_GET['p']) && isset($_GET['pagina']) == false && isset($_GET['id']) == false){
                    $pagina = $_GET['p'];
                }elseif(isset($_GET['p']) == false && isset($_GET['pagina']) && isset($_GET['id']) == false){
                    $pagina = $_GET['pagina'];
                }elseif(isset($_GET['p']) == false && isset($_GET['pagina']) == false && isset($_GET['id'])){
                    $pagina = $_GET['id'];
                }else{
                    $pagina = 'gn';
                }
                if($pagina == 'gn'){
                    include "gerar_notif.php";
                }elseif($pagina == 'cp'){
                    include "cad_proc.php";
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
                }elseif($pagina == 'gml'){
                    include "gerar_minuta_licenca.php";
                }elseif($pagina == 'gmd'){
                    include "gerar_minuta_dispensa.php";
                }elseif(is_numeric($pagina) && isset($_GET['pagina'])){
                    include "listar_editar_empresa.php";
                }elseif($pagina == 'led'){
                    include "listar_editar_doc.php";
                }elseif($pagina == 'lep17'){
                    include "listar_editar_proc_2017.php";
                }elseif($pagina == 'lep18'){
                    include "listar_editar_proc_2018.php";
                }elseif($pagina == 'lep19'){
                    include "listar_editar_proc_2019.php";
                }elseif($pagina == 'lep20'){
                    include "listar_editar_proc_2020.php";
                }elseif($pagina == 'lep21'){
                    include "listar_editar_proc_2021.php";
                }elseif($pagina == 'elp'){
                    include "escolher_lista_proc.php";
                }elseif(is_numeric($pagina) && isset($_GET['pagina']) == false && isset($_GET['id']) == false){
                    include "edit_empresa.php";
                }elseif(is_numeric($pagina) && isset($_GET['pagina']) == false && isset($_GET['p']) == false){
                    include "edit_doc.php";
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