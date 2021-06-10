<?php
// session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_docs = "SELECT * FROM lista_de_documentos WHERE id_doc = '$id'";
$resultado_docs = mysqli_query($con, $result_docs);
$row_doc = mysqli_fetch_assoc($resultado_docs);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>

		<!-- <form method="POST" action="proc_edit_usuario.php"> -->
        <form class="formulario_empresa" id="edit_doc_form" method="post">
            <table id="table_empresa">
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $row_doc['id_doc']; ?>"></td><td></td>
                </tr>
                <tr>
                    <td>Documento: </td><td><input type="text" name="edit_nome_doc" id="nome_empresa" placeholder="Digite o nome do documento" value="<?php echo $row_doc['documento']; ?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Editar"></td><td></td>
                </tr>
            </table>			
		</form>
	</body>
</html>