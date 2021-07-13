<?php
// session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'idp', FILTER_SANITIZE_NUMBER_INT);
$result = "SELECT * FROM lista_de_processos WHERE id = '$id'";
$resultado = mysqli_query($con, $result);
$row = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>
        <h1>Editar Cadastro de Processo</h1>

		<!-- <form method="POST" action="proc_edit_usuario.php"> -->
        <form class="formulario" id="edit_emp_form" method="post">
            <table id="tb_notif">
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></td><td></td>
                </tr>
                <tr>
                    <td>Nº do Processo: </td><td><input type="text" name="edit_proc" id="num_proc" placeholder="Digite o número do processo" value="<?php echo $row['processo']; ?>"></td>
                </tr>
                <tr>
                    <td>Analista: </td><td><select placeholder="Selecione o analista">
                    <option value="<?php echo $row['analista']; ?>"><?php echo $row['analista']; ?></option>
                    <option value="AMIN">AMIN</option>
                    <option value="CAMILA">CAMILA</option>
                    <option value="DANIEL">DANIEL</option>
                    <option value="DAVID">DAVID</option>
                    <option value="JOÃO">JOÃO</option>
                    <option value="JOSÉ NETO">JOSÉ NETO</option>
                    <option value="MICHEL">MICHEL</option>
                    <option value="NAIANE">NAIANE</option>
                    <option value="SAMANTHA">SAMANTHA</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Nome da Empresa/Pessoa Física: </td><td><input type="text" name="edit_nome" id="nome_empresa" placeholder="Digite o nome da empresa/pessoa física" value="<?php echo $row['nome_da_empresa']; ?>"></td>
                </tr>
                <tr>
                    <td>Data de Entrada: </td><td><input type="date" name="edit_data" id="data" placeholder="Digite a data de entrada" value="<?php echo $row['data_de_entrada']; ?>"></td>
                </tr>
                <tr>
                    <td>Assunto: </td><td><select placeholder="Selecione o assunto">
                    <option value="<?php echo $row['assunto']; ?>"><?php echo $row['assunto']; ?></option>
                    <option value="LP">LP</option>
                    <option value="RLP">RLP</option>
                    <option value="LI">LI</option>
                    <option value="RLI">RLI</option>
                    <option value="LO">LO</option>
                    <option value="RLO">RLO</option>
                    <option value="DLA">DLA</option>
                    <option value="RDLA">RDLA</option>
                    <option value="AA">AA</option>
                    <option value="RAA">RAA</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Status do Processo: </td><td><select placeholder="Selecione o status do processo">
                    <option value="<?php echo $row['status_do_processo']; ?>"><?php echo $row['status_do_processo']; ?></option>
                    <option value="EM ANÁLISE">EM ANÁLISE</option>
                    <option value="CONCLUÍDO">CONCLUÍDO</option>
                    <option value="NOTIFICADO">NOTIFICADO</option>
                    <option value="ENCAMINHADO AO JURÍDICO">ENCAMINHADO AO JURÍDICO</option>
                    <option value="ENCAMINHADO À SEMAS/PA">ENCAMINHADO À SEMAS/PA</option>
                    <option value="ENCAMINHADO AO DFA">ENCAMINHADO AO DFA</option>
                    <option value="TAXA A SER PAGA">TAXA A SER PAGA</option>
                    <option value="ENDEREÇO NÃO ENCONTRADO">ENDEREÇO NÃO ENCONTRADO</option>
                    <option value="INDEFERIDO">INDEFERIDO</option>
                    <option value="ARQUIVADO">ARQUIVADO</option>
                    <option value="NÃO EXISTE">NÃO EXISTE</option>
                    <option value="DUPLICADO">DUPLICADO</option>
                    <option value="ENCERRADO">ENCERRADO</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Observação: </td><td><textarea rows="4" cols="60" maxlength="500" name="campo_obs" placeholder="Digite uma observação acerca do processo"><?php echo $row['observacao']; ?></textarea></td>
                </tr>
                <tr>
                    <td>Cnpj/Cpf: </td><td><input type="text" name="edit_cnpj" placeholder="Digite o CNPJ ou CPF" value="<?php echo $row['cnpj_cpf']; ?>"></td>
                </tr>
                <tr>
                    <td>Atividade: </td><td><input type="text" name="edit_ativ" id="atividade_empresa" placeholder="Digite a atividade da empresa/pessoa física" value="<?php echo $row['atividade']; ?>"></td>
                </tr>
                <tr>
                    <td>Endereço: </td><td><input type="text" name="edit_end" id="end_empresa" placeholder="Digite o endereço da empresa/pessoa física" value="<?php echo $row['endereco']; ?>"></td>
                </tr>
                <tr>
                    <td>Nº da Licença/Dispensa: </td><td><input type="text" name="edit_num_lic" id="num_lic" placeholder="Digite o número da licença ou dispensa" value="<?php echo $row['n_licenca_dispensa']; ?>"></td>
                </tr>
                <tr>
                    <td>Tipo de Licença: </td><td><select placeholder="Selecione o tipo de licença">
                    <option value="<?php echo $row['tipo_de_licenca']; ?>"><?php echo $row['tipo_de_licenca']; ?></option>
                    <option value="LP">LP</option>
                    <option value="RLP">RLP</option>
                    <option value="LI">LI</option>
                    <option value="RLI">RLI</option>
                    <option value="LO">LO</option>
                    <option value="RLO">RLO</option>
                    <option value="DLA">DLA</option>
                    <option value="RDLA">RDLA</option>
                    <option value="AA">AA</option>
                    <option value="RAA">RAA</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Porte e Grau Poluidor: </td><td><select placeholder="Selecione o porte e o grau poluidor">
                    <option value="<?php echo $row['porte_grau_poluidor']; ?>"><?php echo $row['porte_grau_poluidor']; ?></option>
                    <option value="A-I">A-I</option>
                    <option value="A-II">A-II</option>
                    <option value="A-III">A-III</option>
                    <option value="B-I">B-I</option>
                    <option value="B-II">B-II</option>
                    <option value="B-III">B-III</option>
                    <option value="C-I">C-I</option>
                    <option value="C-II">C-II</option>
                    <option value="C-III">C-III</option>
                    <option value="D-I">D-I</option>
                    <option value="D-II">D-II</option>
                    <option value="D-III">D-III</option>                    
                    </select></td>
                </tr>
                <tr>
                    <td>Ano de Geração do DAM: </td><td><input type="text" name="edit_dam_ano_gerado" id="dam_ano_gerado" placeholder="Digite o ano de geração do DAM" value="<?php echo $row['dam_ano_gerado']; ?>"></td>
                </tr>
                <tr>
                    <td>Ano de Pagamento do DAM: </td><td><input type="text" name="edit_dam_ano_pago" id="dam_ano_pago" placeholder="Digite o ano de pagamento do DAM" value="<?php echo $row['dam_ano_pago']; ?>"></td>
                </tr>
                <tr>
                    <td>Isento? </td><td><select placeholder="Selecione o porte e o grau poluidor">
                    <option value="<?php echo $row['porte_grau_poluidor']; ?>"><?php echo $row['porte_grau_poluidor']; ?></option>
                    <option value="A-I">A-I</option>
                    <option value="A-II">A-II</option>
                    <option value="A-III">A-III</option>
                    <option value="B-I">B-I</option>
                    <option value="B-II">B-II</option>
                    <option value="B-III">B-III</option>
                    <option value="C-I">C-I</option>
                    <option value="C-II">C-II</option>
                    <option value="C-III">C-III</option>
                    <option value="D-I">D-I</option>
                    <option value="D-II">D-II</option>
                    <option value="D-III">D-III</option>                    
                    </select></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Editar"></td><td></td>
                </tr>
            </table>			
		</form>
	</body>
</html>