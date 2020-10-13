<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
		.carregando{
			color:#ff0000;
			display:none;
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
    </style>
    <title>DEPARTAMENTO DE LICENCIAMENTO AMBIENTAL</title>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="scripts.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
</head>
<body>
    <div style="width:80vw;height:98vh;margin: auto auto;">
        <div style="width:80vw;height:20vh;background-color:green;float:left">
            <h1>DEPARTAMENTO DE LICENCIAMENTO AMBIENTAL</h1>
        </div>
        <div style="width:15vw;height:70vh;background-color:red;float:left">
            <ul>
                <li><a href="index.php?p=gn">Gerar Notificação</a></li>
                <li><a href="index.php?p=gp">Gerar Parecer</a></li>
                <li><a href="index.php?p=cc">Cadastrar Empresa</a></li>
                <li><a href="index.php?p=vc">Ver clientes</a></li>
                <li><a href="index.php?p=cf">Cadastrar funcionário</a></li>
                <li><a href="index.php?p=vf">Ver funcionários</a></li>
                <li><a href="index.php?p=ca">Cadastrar animal</a></li>
                <li><a href="index.php?p=va">Ver animais</a></li>
                <li><a href="index.php?p=rv">Realizar venda</a></li>
                <li><a href="index.php?p=vv">Ver vendas</a></li>
            </ul>
        </div>
        <div id="conteudo" style="width:65vw;height:70vh;background-color:orange;float:right">
            <?php
                if(isset($_GET['p'])){
                    $pagina = $_GET['p'];
                }else{
                    $pagina = 'cc';
                }
                if($pagina == 'cc'){
                    include "empresa_form.html";
                }elseif($pagina == 'gn'){
                    include "gerar_notif.html";
                }elseif($pagina == 'gp'){
                    include "gerar_parecer.html";
                }elseif($pagina == 'vc'){
                    include "cliente_ver.php";
                }elseif($pagina == 'cf'){
                    include "funcionario_form.html";
                }elseif($pagina == 'vf'){
                    include "funcionario_ver.php";
                }elseif($pagina == 'ca'){
                    include "animal_form.html";
                }elseif($pagina == 'va'){
                    include "animal_ver.php";
                }elseif($pagina == 'rv'){
                    include "venda_form.php";
                }elseif($pagina == 'vv'){
                    include "venda_ver.php";
                }
            ?>
        </div>
        <div style="width:80vw;height:8vh;background-color:yellow;float:right">

        </div>
    </div>
</body>
</html>