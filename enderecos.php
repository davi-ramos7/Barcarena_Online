<?php include_once("conexao.php");

	$cmpEmp = $_REQUEST['cmpEmp'];
	
	$result_end = "SELECT * FROM lista_de_empresas WHERE id=$cmpEmp";
	$resultado_end = mysqli_query($con, $result_end);

	while ($row_end = mysqli_fetch_assoc($resultado_end) ) {
	 	$enderecos[] = array(
	 		'id'	=> $row_end['id'],
	 		'endereco' => $row_end['endereco'],
	 	);
	}
	
	echo(json_encode($enderecos));
