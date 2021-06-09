<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'edit_nome', FILTER_SANITIZE_STRING);
$atividade = filter_input(INPUT_POST, 'edit_ativ', FILTER_SANITIZE_STRING);
$cnpj_cpf = filter_input(INPUT_POST, 'edit_cnpj', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'edit_end', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE lista_de_empresas SET nome='$nome', atividade='$atividade', cnpj_cpf='$cnpj_cpf', endereco='$endereco', modificado=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($con, $result_usuario);

if(mysqli_affected_rows($con)){
    echo "ok";
	/* $_SESSION['msg'] = "<p style='color:green;'>Cadastro editado com sucesso</p>";
	header("Location: index.php?p=$id"); */
}else{
    echo "erro";
	/* $_SESSION['msg'] = "<p style='color:red;'>O cadastro não foi editado com sucesso</p>";
	header("Location: index.php?p=$id"); */
}
