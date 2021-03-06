<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Listar Empresas</title>		
	</head>
	<body>
		<h1>Empresas Cadastradas</h1>
		<?php
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

		// if( $_SERVER['REQUEST_METHOD'] == 'POST') {

		$parametro = filter_input(INPUT_POST,'parametro', FILTER_SANITIZE_STRING);

			if($parametro) {
				//Setar a quantidade de itens por pagina
				$qnt_result_pg = 500;

				$pagina = 1;

				//calcular o inicio visualização
				$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
				// $inicio = 0;

				$result_empresas = "SELECT * FROM lista_de_empresas WHERE nome LIKE '%$parametro%' ORDER BY nome LIMIT $inicio, $qnt_result_pg";				

			} else {
				//Setar a quantidade de itens por pagina
				$qnt_result_pg = 200;
				
				//calcular o inicio visualização
				$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

				$result_empresas = "SELECT * FROM lista_de_empresas ORDER BY nome LIMIT $inicio, $qnt_result_pg";
			}

		// } else {
		// 	$result_usuarios = "SELECT * FROM lista_de_empresas LIMIT $inicio, $qnt_result_pg";
		// }
		
		$resultado_empresas = mysqli_query($con, $result_empresas);
		
		$regLinha = 1;//VOCE ESCOLHE O NUMERO DE REGISTROS POR LINHA
		$i = ceil($qnt_result_pg / $regLinha);
		$j = 1;
		$z = 0;
		?>
		
		<form class="filtro" action="" method="POST" target="_self">
			<input type="text" name="parametro" placeholder="Digite aqui a sua pesquisa...">
			<input type="submit" value="Pesquisar" id="submit_pesquisa">
		</form>

		<?php

		echo "         
		<table id='table_ver_empresas' border=1><tr id='primeira_linha'><td>Nome</td><td>Atividade</td><td>Cnpj/Cpf</td><td>Endereço</td></tr><tr> ";

		while($x = mysqli_fetch_array($resultado_empresas)){
			echo "<td>".$x['nome']."</td><td>".$x['atividade']."</td><td>".$x['cnpj_cpf']."</td><td>".$x['endereco']."</td><td><a href='index.php?p=" . $x['id'] . "'><button id='button_editar'>Editar</button></a></td>";

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
		
		//Paginção - Somar a quantidade de empresas
		if ($parametro) {
			$result_pg = "SELECT COUNT(id) AS num_result FROM lista_de_empresas WHERE nome LIKE '%$parametro%'";
		} else {
			$result_pg = "SELECT COUNT(id) AS num_result FROM lista_de_empresas";
		}
		
		$resultado_pg = mysqli_query($con, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de paginas 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os links antes e depois
		$max_links = 2;
		echo "<a href='index.php?pagina=1' id='primeira'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='index.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "<a href='' style='color:black'>$pagina</a> ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='index.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='index.php?pagina=$quantidade_pg'>Última</a>";
		
		?>		
	</body>
</html>