<?php include_once("conexao.php");

	$cmpEmp = $_REQUEST['cmpEmp'];
	
	$result_end = "SELECT * FROM dados_empresas WHERE id_empresas=$cmpEmp";
	$resultado_end = mysqli_query($con, $result_end);

	while ($row_end = mysqli_fetch_assoc($resultado_end) ) {
	 	$enderecos[] = array(
	 		'id_empresas'	=> $row_end['id_empresas'],
	 		'endereco' => $row_end['endereco'],
	 	);
	}
	
	echo(json_encode($enderecos));
