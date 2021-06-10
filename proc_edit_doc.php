<?php
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$documento = filter_input(INPUT_POST, 'edit_nome_doc', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE lista_de_documentos SET documento='$documento', modificado=NOW() WHERE id_doc='$id'";
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
