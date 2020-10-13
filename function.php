<?php
include_once("conexao.php");

function retorna($nome, $conn){
	$result_empresa = "SELECT * FROM dados_empresas WHERE nome = '$nome' LIMIT 1";
	$resultado_empresa = mysqli_query($conn, $result_empresa);
	if($resultado_empresa->num_rows){
		$row_empresa = mysqli_fetch_assoc($resultado_empresa);
		$valores['campo_end'] = $row_empresa['endereco'];
		$valores['campo_ativ'] = $row_empresa['atividade'];
	}else{
		$valores['campo_end'] = 'Empresa não encontrada';
	}
	return json_encode($valores);
}

if(isset($_GET['nome'])){
	echo retorna($_GET['nome'], $conn);
}
?>