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
		<?php
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 10;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM lista_de_empresas LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($con, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "<table id='table_ver_empresas'>";
				echo "<tr>";
					echo "<td>Nome: </td><td>" . $row_usuario['nome'] . "</td>";
				echo "<tr>";
				echo "<tr>";
					echo "<td>Atividade: </td><td>" . $row_usuario['atividade'] . "</td>";
				echo "<tr>";
				echo "<tr>";
					echo "<td>Cnpj/Cpf: </td><td>" . $row_usuario['cnpj_cpf'] . "</td>";
				echo "<tr>";
				echo "<tr>";
					echo "<td>Endereço: </td><td>" . $row_usuario['endereco'] . "</td>";
				echo "<tr>";
				echo "<tr>";
					echo "<td><a href='index.php?p=" . $row_usuario['id'] . "'><button>Editar</button></a></td><td></td>";
				echo "<tr>";
			echo "</table><br>";
		}
		
		//Paginção - Somar a quantidade de empresas
		$result_pg = "SELECT COUNT(id) AS num_result FROM lista_de_empresas";
		$resultado_pg = mysqli_query($con, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de paginas 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os links antes e depois
		$max_links = 2;
		echo "<a href='index.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='index.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='index.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='index.php?pagina=$quantidade_pg'>Ultima</a>";
		
		?>		
	</body>
</html>