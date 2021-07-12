<?php include_once("conexao.php");

	$cmpEmp = $_REQUEST['cmpEmp'];
	
	$result = "SELECT * FROM lista_de_empresas WHERE id=$cmpEmp";
	$resultado = mysqli_query($con, $result);

	while ($row = mysqli_fetch_assoc($resultado) ) {
	 	$cnpjs[] = array(
	 		'id'	=> $row['id'],
	 		'cnpj_cpf' => $row['cnpj_cpf'],
	 	);
	}
	
	echo(json_encode($cnpjs));
