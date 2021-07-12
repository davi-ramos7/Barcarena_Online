<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Listar Processos</title>		
	</head>
	<body>
		<h1>Processos Cadastrados-2018</h1>
		<?php

		$result_procs_18 = "SELECT * FROM lista_de_processos WHERE processo LIKE '%2018%' ORDER BY processo";
		
		$resultado_procs_18 = mysqli_query($con, $result_procs_18);
		
		$qnt_result_pg = 1000;
		$regLinha = 1;//VOCE ESCOLHE O NUMERO DE REGISTROS POR LINHA
		$i = ceil($qnt_result_pg / $regLinha);
		$j = 1;
		$z = 0;		

		echo "         
		<table id='table_ver_procs' border=1><tr id='primeira_linha'><td>Processo</td><td>Analista</td><td>Nome da Empresa/Pessoa Física</td><td>Data de Entrada</td><td>Assunto</td><td>Status do Processo</td><td>Observação</td><td>CNPJ/CPF</td><td>Atividade</td><td>Endereço</td><td>Nº da Licença/Dispensa</td><td>Tipo de Licença</td><td>Porte e Grau Poluidor</td><td>Ano do DAM (gerado)</td><td>Ano do DAM (pago)</t>d<td>Isento?</td><td>Valor do DAM</td><td>Multa + Juros</td><td>Início da Validade</td><td>Fim da Validade</td></tr><tr> ";

		while($x = mysqli_fetch_array($resultado_procs_18)){
			echo "<td>".$x['processo']."</td><td>" .$x['analista']."</td><td>" .$x['nome_da_empresa']."</td><td>" .$x['data_de_entrada']."</td><td>" .$x['assunto']."</td><td>" .$x['status_do_processo']."</td><td>" .$x['observacao']."</td><td>" .$x['cnpj_cpf']."</td><td>" .$x['atividade']."</td><td>" .$x['endereco']."</td><td>" .$x['n_licenca_dispensa']."</td><td>" .$x['tipo_de_licenca']."</td><td>" .$x['porte_grau_poluidor']."</td><td>" .$x['dam_ano_gerado']."</td><td>" .$x['dam_ano_pago']."</td><td>" .$x['isento']."</td><td>" .$x['valor_do_dam']."</td><td>" .$x['multa_juros']."</td><td>" .$x['validade_inicio']."</td><td>".$x['validade_fim']."</td><td><a href='index.php?p=" . $x['id'] . "'><button id='button_editar'>Editar</button></a></td>";

		    $z++;

		    if($z == $regLinha and $j < $i){
		      echo "</tr><tr>";
		      $z = 0;
		      $j++;

		    }
		    if($z == $regLinha and $j == $i){
		      echo "</tr>";
		    }
		}
		  
		echo "</table><br>";
		
		?>		
	</body>
</html>