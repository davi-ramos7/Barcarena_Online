<?php include_once("conexao.php");

	$cmpEmp = $_REQUEST['cmpEmp'];
	
	$result_ativ = "SELECT * FROM lista_de_empresas WHERE id=$cmpEmp";
	$resultado_ativ = mysqli_query($con, $result_ativ);

	while ($row_ativ = mysqli_fetch_assoc($resultado_ativ) ) {
	 	$atividades[] = array(
	 		'id'	=> $row_ativ['id'],
	 		'atividade' => $row_ativ['atividade'],
	 	);
	}
	
	echo(json_encode($atividades));