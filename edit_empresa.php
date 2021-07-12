<?php
// session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM lista_de_empresas WHERE id = '$id'";
$resultado_usuario = mysqli_query($con, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>
        <h1>Editar Cadastro de Empresa/Pessoa Física</h1>

		<!-- <form method="POST" action="proc_edit_usuario.php"> -->
        <form class="formulario_empresa" id="edit_emp_form" method="post">
            <table id="table_empresa">
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>"></td><td></td>
                </tr>
                <tr>
                    <td>Nome: </td><td><input type="text" name="edit_nome" id="nome_empresa" placeholder="Digite o nome da empresa/pessoa física" value="<?php echo $row_usuario['nome']; ?>"></td>
                </tr>
                <tr>
                    <td>Atividade: </td><td><input type="text" name="edit_ativ" id="atividade_empresa" placeholder="Digite a atividade" value="<?php echo $row_usuario['atividade']; ?>"></td>
                </tr>
                <tr>
                    <td>Cnpj/Cpf: </td><td><input type="text" name="edit_cnpj" placeholder="Digite o CNPJ ou CPF" value="<?php echo $row_usuario['cnpj_cpf']; ?>"></td>
                </tr>
                <tr>
                    <td>Endereço: </td><td><input type="text" name="edit_end" id="end_empresa" placeholder="Digite o endereço da empresa/pessoa física" value="<?php echo $row_usuario['endereco']; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Editar"></td><td></td>
                </tr>
            </table>			
		</form>
	</body>
</html>