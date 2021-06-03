<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <!-- <style>
		.carregando{
			color:#ff0000;
			display:none;
		}
        select{
        font-family: cursive;
        width: 700px;
        }
        table,th,td{
            border: 1px solid black; 
        }
        ul{
            list-style:none;
        }
        a{
            text-decoration:none;
            font-size:24px;
            color:black;
        }
        a:hover{color:hotpink;}
        a:visited{color:white;}
        a:visited:hover {color:hotpink;}
    </style> -->
    <title>DEPARTAMENTO DE LICENCIAMENTO AMBIENTAL</title>
    <!-- <script src="jquery-3.5.1.min.js"></script> -->
    <script src="scripts.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script></script>
		<!-- <script type="text/javascript">
		  google.load("jquery", "1.4.2");
		</script> -->
</head>
<body>
    <!-- <div style="background-color:blue;">
        <div style="width:80vw;height:20vh;background-color:green;">
            <h1>DEPARTAMENTO DE LICENCIAMENTO AMBIENTAL</h1>
        </div>
        <div style="width:15vw;height:150vh;background-color:red;float:left">
            <ul>
                <li><a href="index.php?p=gn">Gerar Notificação</a></li><br><br>
                <li><a href="index.php?p=gp">Gerar Parecer</a></li><br><br>
                <li><a href="index.php?p=cc">Cadastrar Empresa</a></li><br><br>
            </ul>
        </div> -->
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
                    <li><a href="index.php?p=ce">Cadastrar Empresa</a></li>
                </ul>
            </div>
        </div>
        <div id="paginas" class="conteudo">
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
            <p>Versão 1.0</p>
        </div>
</body>
</html>