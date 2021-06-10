<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Listar Documentos</title>		
	</head>
	<body>
		<?php

		$result_docs = "SELECT * FROM lista_de_documentos ORDER BY documento";
		
		$resultado_docs = mysqli_query($con, $result_docs);

		echo "         
		<table id='table_ver_docs' border=1><tr id='primeira_linha'><td>Documento</td><tr> ";

		while($x = mysqli_fetch_array($resultado_docs)){
			echo "<td>".$x['documento']."</td><td><a href='index.php?id=" . $x['id_doc'] . "'><button id='button_editar'>Editar</button></a></td></tr>";
		}
		  
		echo "</table><br>";
		
		?>		
	</body>
</html>