<?php

if(isset($_POST['cmpEmp'])){
        $id = $_POST['cmpEmp'];

        include_once("conexao.php");
    
        $sql = "SELECT * FROM lista_de_empresas WHERE id=$id";
        $linha = mysqli_query($con, $sql);

        while ($linhas=mysqli_fetch_assoc($linha)) {
            $empresa = $linhas['nome'];
        }

        $Nome_da_Empresa = $empresa;

        $Endereco_do_Empreendimento = $_POST['cmpEnd'];

        if (isset($_POST['end_da_ativ'])) {
            $enderecodaatividade = $_POST['end_da_ativ'];
        } else {
            $enderecodaatividade = "";
        }

        $Atividade_Licenciada_Valor_Autorizado = $_POST['cmpAtiv'];

        $ano = date("Y");
        $Emissao = date('d/m/') . $ano;

        $Solicitacao = $_POST['tipo_licenca'];

        $Num_da_LO = $_POST['campo_num_lic'];
        $Num_do_Processo = $_POST['campo_numProc'];
        
        $Validade_eng = $_POST['campo_val'];
        $Validade = date('d/m/Y', strtotime($Validade_eng));

        $Porte = $_POST['porte_potencial'];
        $Nome_Fantasia = $_POST['campo_nome_fant'];
        $Bairro_Distrito = $_POST['campo_bairro'];
        $CEP = $_POST['campo_cep'];
        $CNPJ_CPF = $_POST['campo_cnpj'];
        $Inscricao_Estadual = $_POST['campo_insc'];
        $Coordenadas_Geograficas = $_POST['campo_cg'];
        $Observacoes = $_POST['campo_obs'];
        
        if (isset($_POST['campo_cond1'])) {
        	$Condicionante1 = $_POST['campo_cond1'];
            $Prazo_da_Condicionante1 = $_POST['campo_prazo1'];
        } else {
        	$Condicionante1 = "";
            $Prazo_da_Condicionante1 = "";
        }

        if (isset($_POST['campo_cond2'])) {
        	$Condicionante2 = $_POST['campo_cond2'];
            $Prazo_da_Condicionante2 = $_POST['campo_prazo2'];
        } else {
        	$Condicionante2 = "";
            $Prazo_da_Condicionante2 = "";
        } 

        if (isset($_POST['campo_cond3'])) {
        	$Condicionante3 = $_POST['campo_cond3'];
            $Prazo_da_Condicionante3 = $_POST['campo_prazo3'];
        } else {
        	$Condicionante3 = "";
            $Prazo_da_Condicionante3 = "";
        } 

        if (isset($_POST['campo_cond4'])) {
        	$Condicionante4 = $_POST['campo_cond4'];
            $Prazo_da_Condicionante4 = $_POST['campo_prazo4'];
        } else {
        	$Condicionante4 = "";
            $Prazo_da_Condicionante4 = "";
        } 

        if (isset($_POST['campo_cond5'])) {
        	$Condicionante5 = $_POST['campo_cond5'];
            $Prazo_da_Condicionante5 = $_POST['campo_prazo5'];
        } else {
        	$Condicionante5 = "";
            $Prazo_da_Condicionante5 = "";
        }

require_once './vendor/autoload.php';

// Modelo de notificação

$dia = date("d");
$mes = 0;

switch (date("m")) {

    case 1:
        $mes = "Janeiro";
        break;

    case 2:
        $mes = "Fevereiro";
        break;

    case 3:
        $mes = "Março";
        break;

    case 4:
        $mes = "Abril";
        break;

    case 5:
        $mes = "Maio";
        break;

    case 6:
        $mes = "Junho";
        break;

    case 7:
        $mes = "Julho";
        break;

    case 8:
        $mes = "Agosto";
        break;

    case 9:
        $mes = "Setembro";
        break;

    case 10:
        $mes = "Outubro";
        break;

    case 11:
        $mes = "Novembro";
        break;
    
    default:
        $mes = "Dezembro";
        break;
}


$data = $dia . " de " . $mes . " de " . $ano;

// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

// Adding Text element with font customized using named font style...

$fnew1 = array('name' => 'Verdana', 'size' => 8, 'color' => '1B2232', 'bold' => false);
$phpWord->addFontStyle('fStyle8_normal', $fnew1);

$fnew2 = array('name' => 'Verdana', 'size' => 8, 'color' => '1B2232', 'bold' => true);
$phpWord->addFontStyle('fStyle8_bold', $fnew2);

$fnew3 = array('name' => 'Verdana', 'size' => 9, 'color' => '1B2232', 'bold' => false);
$phpWord->addFontStyle('fStyle9_normal', $fnew3);

$fnew4 = array('name' => 'Verdana', 'size' => 9, 'color' => '1B2232', 'bold' => true);
$phpWord->addFontStyle('fStyle9_bold', $fnew4);

$fnew4_2 = array('name' => 'Verdana', 'size' => 9, 'italic' => true, 'color' => '1B2232');
$phpWord->addFontStyle('fStyle9_italic', $fnew4_2);

$fnew4_3 = array('name' => 'Verdana', 'size' => 9, 'italic' => true, 'color' => '1B2232', 'bold' => true);
$phpWord->addFontStyle('fStyle9_italic_bold', $fnew4_3);

$fnew5 = array('name' => 'Verdana', 'size' => 10, 'color' => '1B2232', 'bold' => false);
$phpWord->addFontStyle('fStyle10_normal', $fnew5);

$fnew6 = array('name' => 'Verdana', 'size' => 10, 'color' => '1B2232', 'bold' => true);
$phpWord->addFontStyle('fStyle10_bold', $fnew6);

$fnew7 = array('name' => 'Verdana', 'size' => 11, 'color' => '1B2232', 'bold' => false);
$phpWord->addFontStyle('fStyle11_normal', $fnew7);

$fnew8 = array('name' => 'Verdana', 'size' => 11, 'color' => '1B2232', 'bold' => true);
$phpWord->addFontStyle('fStyle11_bold', $fnew8);

$fnew9 = array('name' => 'Verdana', 'size' => 12, 'color' => '1B2232', 'bold' => false);
$phpWord->addFontStyle('fStyle12_normal', $fnew9);

$fnew10 = array('name' => 'Verdana', 'size' => 12, 'color' => '1B2232', 'bold' => true);
$phpWord->addFontStyle('fStyle12_bold', $fnew10);

$fnew11 = array('name' => 'Verdana', 'size' => 18, 'color' => '1B2232', 'bold' => false);
$phpWord->addFontStyle('fStyle18_normal', $fnew11);

$fnew12 = array('name' => 'Verdana', 'size' => 18, 'color' => '1B2232', 'hint' => 'cs', 'bold' => true, 'shadow' => array('color' => '0000FF', 'offset' => '20pt, 20pt'));
$phpWord->addFontStyle('fStyle18_bold', $fnew12);

$pNew1_1 = array('alignment' => 'both', 'indent' => 0, 'hanging' => -1, 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0);
$pNew1_2 = array('alignment' => 'both', 'indent' => 0.1, 'hanging' => 0, 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0);
$pNew1_3 = array('alignment' => 'both', 'indent' => 0.6, 'hanging' => 0, 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0, 'lineHeight' => 1.15);
$pNew1_4 = array('alignment' => 'both', 'indent' => 0, 'hanging' => -0.1, 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0);
$pNew1_5 = array('alignment' => 'both', 'indent' => 0, 'hanging' => 0, 'spaceBefore' => 100, 'spaceAfter' => 0, 'spacing' => 0, 'lineHeight' => 1.5);
$pNew1_6 = array('alignment' => 'both', 'indent' => 0, 'hanging' => -1, 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0, 'lineHeight' => 1.15);
$pNew1_7 = array('alignment' => 'both', 'indent' => 0.6, 'hanging' => 0, 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0, 'lineHeight' => 1.15);
$pNew2 = array('alignment' => 'right', 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0);
$pNew2 = array('alignment' => 'right', 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0);
$pNew3_1 = array('alignment' => 'left', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0);
$pNew3_2 = array('alignment' => 'left', 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0);
$pNew4_1 = array('alignment' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0);
$pNew4_2 = array('alignment' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 120, 'spacing' => 0);
$pNew4_3 = array('alignment' => 'center', 'spaceBefore' => 240, 'spaceAfter' => 240, 'spacing' => 0);
$pNew4_4 = array('alignment' => 'center', 'spaceBefore' => 120, 'spaceAfter' => 0, 'spacing' => 0);
$pNew4_5 = array('alignment' => 'center', 'spaceBefore' => 80, 'spaceAfter' => 0, 'spacing' => 0);

$phpWord->addParagraphStyle('pStyle1_justify_withHanging', $pNew1_1);
$phpWord->addParagraphStyle('pStyle1_justify_whithoutHanging', $pNew1_2);
$phpWord->addParagraphStyle('pStyle1_justify_whithoutHanging_spaceAfter', $pNew1_3);
$phpWord->addParagraphStyle('pStyle1_justify_table', $pNew1_4);
$phpWord->addParagraphStyle('pStyle1_justify_table_2', $pNew1_5);
$phpWord->addParagraphStyle('pStyle1_justify_withHanging_withSpace', $pNew1_6);
$phpWord->addParagraphStyle('pStyle1_justify_table_3', $pNew1_7);
$phpWord->addParagraphStyle('pStyle2_right', $pNew2);
$phpWord->addParagraphStyle('pStyle3_left', $pNew3_1);
$phpWord->addParagraphStyle('pStyle3_left_spaceAfter', $pNew3_2);
$phpWord->addParagraphStyle('pStyle4_center', $pNew4_1);
$phpWord->addParagraphStyle('pStyle4_center_spaceAfter', $pNew4_2);
$phpWord->addParagraphStyle('pStyle4_center_spaceBefore_and_After', $pNew4_3);
$phpWord->addParagraphStyle('pStyle4_center_spaceBefore1', $pNew4_4);
$phpWord->addParagraphStyle('pStyle4_center_spaceBefore2', $pNew4_5);

$sectionStyle1 = array(
    'marginTop' => 1417.322834646, //2.5cm
    'marginLeft' => 850.393700787, //1.5cm
    'marginRight' => 850.393700787, //1.5cm
    'marginBottom' => 720 //1.27cm
);

$tableStyle1 = array(
    'borderColor' => '006699',
    'borderSize'  => 6,
    'cellMargin'  => 70,
); 

/* Note: any element you append to a document must reside inside of a Section. */
// Adding an empty Section to the document...

$section = $phpWord->addSection($sectionStyle1);

$phpWord->addTableStyle('myTable', $tableStyle1);

$table = $section->addTable('myTable');

$height1 = 396.850393701; //0.7cm
$width1 = 7370.078740157; //13cm
$width2 = 226.771653543; //0.4cm
$width3 = 2834.645669291; //5cm
$cellStyle1_1 = array('borderSize' => 5);
$cellStyle1_2 = array('borderSize' => 5, 'valign' => 'center');
$cellStyle2_1 = array('vMerge' => 'restart', 'borderSize' => 5);
$cellStyle2_2 = array('vMerge' => 'restart', 'borderSize' => 5, 'valign' => 'center');
$cellStyle3 = array('vMerge' => 'continue', 'borderSize' => 5);
$rowStyle1 = array('exactHeight' => true);
$rowStyle2 = array('exactHeight' => false);

$table->addRow($height1, $rowStyle1);

//$table->addCell(4500, array('vMerge' => 'restart', 'bgColor'=>"FFFF00"))->addText('dummy');
//$table->addCell(4500)->addText('Test', ['alignment' => 'center', 'italic' => true, 'underline' => 'dash', 'fgColor' => 'yellow', 'color' => '996699']);

$cell1 = $table->addCell($width1, $cellStyle2_2)->addText($Solicitacao, 'fStyle18_bold', 'pStyle4_center');
$cell2 = $table->addCell($width2, $cellStyle2_1);
$cell3 = $table->addCell($width3, $cellStyle1_2);
$text = $cell3->addText('N° ' . $Num_da_LO, 'fStyle10_bold', 'pStyle1_justify_table');

$table->addRow($height1, $rowStyle1);

$cell1 = $table->addCell($width1, $cellStyle3);
$cell2 = $table->addCell($width2, $cellStyle3);
$cell3 = $table->addCell($width3, $cellStyle1_2);
$text = $cell3->addText('Emissão: ' . $Emissao, 'fStyle10_bold', 'pStyle1_justify_table');

$table->addRow($height1, $rowStyle1);

$cell1 = $table->addCell($width1, $cellStyle3);
$cell2 = $table->addCell($width2, $cellStyle3);
$cell3 = $table->addCell($width3, $cellStyle1_2);
$text = $cell3->addText('Validade: ' . $Validade, 'fStyle10_bold', 'pStyle1_justify_table');

$section->addTextBreak();

$phpWord->addTableStyle('myTable', $tableStyle1);

$table = $section->addTable('myTable');

$height2 = 1700.787401575; //3cm
$width4 = 8900.787401575; //15.7cm
$width5 = 1530.708661417; //2.7cm
$cellStyle4 = array('gridSpan' => 2, 'borderSize' => 5);

//LINHA 1

$table->addRow($height2, $rowStyle1);

$cell1 = $table->addCell($width4, $cellStyle4);

$textrun = $cell1->addTextRun('pStyle1_justify_table_2');

$textrun->addText('O Município de Barcarena, através de sua ', 'fStyle9_italic');

$textrun->addText('Secretaria Municipal do Meio Ambiente e Desenvolvimento Econômico', 'fStyle9_italic_bold');

$textrun->addText(', no uso das atribuições que lhe concede a Lei Complementar n° 007, de 12 de junho de 2002, alterada pela Lei Complementar n° 10, de 19 de dezembro de 2003 e tendo em vista o disposto na Lei n° 1.982, de 19 de dezembro de 2003, regulamentada pelo Decreto n° 84, de 03 de junho de 2004, concede a Licença de Operação ao empreendimento abaixo discriminado.', 'fStyle9_italic');

//LINHA 2

$height3 = 1133.858267717; //2cm

$table->addRow($height3, $rowStyle1);

$cell1 = $table->addCell($width4, $cellStyle1_1);
$text = $cell1->addText('NOME/RAZÃO SOCIAL:', 'fStyle9_bold', 'pStyle1_justify_table');
$text = $cell1->addText($Nome_da_Empresa, 'fStyle12_bold', 'pStyle4_center_spaceBefore_and_After');

$cell3 = $table->addCell($width5, $cellStyle2_1);
$text = $cell3->addText('PORTE:', 'fStyle9_bold', 'pStyle1_justify_table');
$text = $cell3->addTextBreak();
$text = $cell3->addText($Porte, 'fStyle11_bold', 'pStyle4_center_spaceBefore_and_After');

//LINHA 3

$height4 = 623.622047244; //1.1cm

$table->addRow($height4, $rowStyle1);

$cell1 = $table->addCell($width4, $cellStyle1_1);
$text = $cell1->addText('NOME FANTASIA:', 'fStyle9_bold', 'pStyle1_justify_table');
$text = $cell1->addText($Nome_Fantasia, 'fStyle12_bold', 'pStyle4_center');

$cell3 = $table->addCell(null, $cellStyle3);

//LINHA 4

$table->addRow($height4, $rowStyle2);

$cell1 = $table->addCell($width4, $cellStyle4);
$text = $cell1->addText('ENDEREÇO DO EMPREENDIMENTO:', 'fStyle9_bold', 'pStyle1_justify_table');
$text = $cell1->addText($Endereco_do_Empreendimento, 'fStyle9_normal', 'pStyle4_center_spaceBefore2');

//NOVA TABELA

$table = $section->addTable('myTable');

$width6 = 5385.826771654; //9.5cm
$width7 = 5045.669291339; //8.9cm

//LINHA 5

$table->addRow($height4, $rowStyle1);

$cell1 = $table->addCell($width6, $cellStyle1_1);
$text = $cell1->addText('BAIRRO/DISTRITO:', 'fStyle9_bold', 'pStyle1_justify_table');
$text = $cell1->addText($Bairro_Distrito, 'fStyle9_normal', 'pStyle4_center_spaceBefore2');

$cell2 = $table->addCell($width7, $cellStyle1_1);
$text = $cell2->addText('CEP:', 'fStyle9_bold', 'pStyle1_justify_table');
$text = $cell2->addText($CEP, 'fStyle9_normal', 'pStyle4_center_spaceBefore2');

//LINHA 6

$table->addRow($height4, $rowStyle1);

$cell1 = $table->addCell($width6, $cellStyle1_1);
$text = $cell1->addText('INSCRIÇÃO ESTADUAL:', 'fStyle9_bold', 'pStyle1_justify_table');
$text = $cell1->addText($Inscricao_Estadual, 'fStyle9_normal', 'pStyle4_center_spaceBefore2');

$cell2 = $table->addCell($width7, $cellStyle1_1);
$text = $cell2->addText('CNPJ/CPF:', 'fStyle9_bold', 'pStyle1_justify_table');
$text = $cell2->addText($CNPJ_CPF, 'fStyle9_normal', 'pStyle4_center_spaceBefore2');

//LINHA 7

$height5 = 850.393700787; //1.5cm

$table->addRow($height5, $rowStyle2);

$cell1 = $table->addCell($width4, $cellStyle4);
$text = $cell1->addText('ATIVIDADE LICENCIADA/VALOR AUTORIZADO:', 'fStyle9_bold', 'pStyle1_justify_table');
$text = $cell1->addText($Atividade_Licenciada_Valor_Autorizado, 'fStyle10_bold', 'pStyle4_center_spaceBefore1');

//LINHA 8

$table->addRow($height4, $rowStyle1);

$cell1 = $table->addCell($width4, $cellStyle4);
$text = $cell1->addText('COORDENADAS GEOGRÁFICAS:', 'fStyle9_bold', 'pStyle1_justify_table');
$text = $cell1->addText($Coordenadas_Geograficas, 'fStyle9_normal', 'pStyle4_center');

//LINHA 9

$table->addRow($height4, $rowStyle2);

$cell1 = $table->addCell($width4, $cellStyle4);
$text = $cell1->addText('OBSERVAÇÕES:', 'fStyle8_bold', 'pStyle1_justify_table');
$text = $cell1->addText($Observacoes, 'fStyle8_normal', 'pStyle1_justify_whithoutHanging');

//LINHA 10

$height6 = 1303.937007874; //2.3cm

$table->addRow($height6, $rowStyle1);

$cell1 = $table->addCell($width4, $cellStyle4);
$text = $cell1->addText('OBRIGAÇÕES:', 'fStyle8_bold', 'pStyle1_justify_table');
$text = $cell1->addText('- Publicar a sua concessão, no prazo de 30 (trinta) dias, observando os termos da Lei Municipal n.º 1982, de 19 de Dezembro de 2003, em conformidade com o Decreto n° 083, de 03 de Junho de 2004.', 'fStyle8_normal', 'pStyle1_justify_whithoutHanging');
$text = $cell1->addText('- Solicitar sua renovação com antecedência mínima de 120 (cento e vinte) dias do prazo do término de sua vigência.', 'fStyle8_normal', 'pStyle1_justify_whithoutHanging');
$text = $cell1->addText('- Comunicar de imediato a esta secretaria quaisquer alterações nas informações que subsidiaram a sua concessão.', 'fStyle8_normal', 'pStyle1_justify_whithoutHanging');
$text = $cell1->addText('- Dar cumprimento às condicionantes constantes no verso deste documento (Anexo-I).', 'fStyle8_normal', 'pStyle1_justify_whithoutHanging');

$height7 = 566.929133858; //1.0cm

//LINHA 11

$table->addRow($height7, $rowStyle1);

$cell1 = $table->addCell($width4, $cellStyle4);
$text = $cell1->addText('LOCAL E DATA:', 'fStyle8_bold', 'pStyle1_justify_table');
$text = $cell1->addText('Barcarena/PA, ' . $data, 'fStyle8_normal', 'pStyle2_right');

$section->addTextBreak(2);

$section->addText('____________________________________', 'fStyle9_normal', 'pStyle4_center_spaceAfter');
$section->addText('JULIANA NOBRE SOARES', 'fStyle11_bold', 'pStyle4_center');
$section->addText('Secretária Executiva Municipal de Meio Ambiente e Desenvolvimento Econômico', 'fStyle9_normal', 'pStyle4_center');
$section->addText('Decreto Municipal nº 0006/2021 – GPMB', 'fStyle9_normal', 'pStyle4_center');

$sectionStyle2 = array(
    'marginTop' => 1417.322834646, //2.5cm
    'marginLeft' => 850.393700787, //1.5cm
    'marginRight' => 850.393700787, //1.5cm
    'marginBottom' => 720, //1.27cm
    'breakType' => 'nextPage'
);

$tableStyle2 = array(
    'borderColor' => '006699',
    'borderSize'  => 6,
    'cellMargin'  => 200,
); 

$section2 = $phpWord->addSection($sectionStyle2);

$phpWord->addTableStyle('myTable2', $tableStyle2);

$table = $section2->addTable('myTable2');

//Linha 1

$height8 = 453.543307087; //0.8cm

$width8 = 10431.496062992; //18.4cm

$table->addRow($height8, $rowStyle1);

$cell1 = $table->addCell($width8, $cellStyle1_2)->addText('ANEXO I - ' . $Solicitacao, 'fStyle10_bold', 'pStyle4_center');

//Linha 2

$table->addRow($height8, $rowStyle1);

$cell1 = $table->addCell($width8, $cellStyle1_2)->addText('RELAÇÃO DAS CONDICIONANTES', 'fStyle10_bold', 'pStyle4_center');

//Linha 3

$height9 = 1417.322834646; //2.5cm

$table->addRow($height9, $rowStyle2);

$cell1 = $table->addCell($width8, $cellStyle1_1);

$textrun = $cell1->addTextRun('pStyle1_justify_withHanging_withSpace');

$textrun->addText('Informamos a Vossa Senhoria que durante a vigência da ' . $Solicitacao . ' de n° ', 'fStyle9_normal');

$textrun->addText($Num_da_LO, 'fStyle9_bold');

$textrun->addText(', requerida no processo de n° ', 'fStyle9_normal');

$textrun->addText($Num_do_Processo, 'fStyle9_bold');

$textrun->addText(', deverá cumprir com as exigências abaixo relacionadas:', 'fStyle9_normal');


$textrun = $cell1->addTextRun('pStyle1_justify_table_3');
$textrun->addText('•    Permitir o ', 'fStyle9_italic');
$textrun->addText('livre acesso ', 'fStyle9_italic_bold');
$textrun->addText('aos funcionários da SEMADE em ação fiscalizatória;', 'fStyle9_italic');

$textrun = $cell1->addTextRun('pStyle1_justify_table_3');
$textrun->addText('•    Informar a esta SEMADE ', 'fStyle9_italic');
$textrun->addText('quaisquer alterações ', 'fStyle9_italic_bold');
$textrun->addText('nas informações prestadas que resultaram desta Licença, bem como ', 'fStyle9_italic');
$textrun->addText('modificações ', 'fStyle9_italic_bold');
$textrun->addText('na estrutura física e documentais do empreendimento, conforme Lei Ambiental Municipal;', 'fStyle9_italic');

$textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
$textrun->addText('•    Comunicar imediatamente à SEMADE a ocorrência de qualquer acidente que venha causar dano ambiental.', 'fStyle9_italic');

if ($Condicionante1 <> "" && $Condicionante2 == "") {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 == "" && $Prazo_da_Condicionante1 == $Prazo_da_Condicionante2) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 == "" && $Prazo_da_Condicionante1 <> $Prazo_da_Condicionante2) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante2 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 == "" && $Prazo_da_Condicionante1 == $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 == $Prazo_da_Condicionante3) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 == "" && $Prazo_da_Condicionante1 == $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 <> $Prazo_da_Condicionante3) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante3 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 == "" && $Prazo_da_Condicionante1 <> $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 == $Prazo_da_Condicionante3) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante2 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 == "" && $Prazo_da_Condicionante1 == $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 == $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 == $Prazo_da_Condicionante4) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 == "" && $Prazo_da_Condicionante1 == $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 == $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 <> $Prazo_da_Condicionante4) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante4 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 == "" && $Prazo_da_Condicionante1 == $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 <> $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 <> $Prazo_da_Condicionante4) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante3 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 == "" && $Prazo_da_Condicionante1 <> $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 == $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 == $Prazo_da_Condicionante4) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante2 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 == "" && $Prazo_da_Condicionante1 <> $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 <> $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 == $Prazo_da_Condicionante4) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante2 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante3 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 == "" && $Prazo_da_Condicionante1 <> $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 <> $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 <> $Prazo_da_Condicionante4) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante2 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante3 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante3 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 <> "" && $Prazo_da_Condicionante1 == $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 == $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 == $Prazo_da_Condicionante4 && $Prazo_da_Condicionante4 == $Prazo_da_Condicionante5) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante5 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 <> "" && $Prazo_da_Condicionante1 == $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 == $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 == $Prazo_da_Condicionante4 && $Prazo_da_Condicionante4 <> $Prazo_da_Condicionante5) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante5 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante5 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 <> "" && $Prazo_da_Condicionante1 == $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 == $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 <> $Prazo_da_Condicionante4 && $Prazo_da_Condicionante4 <> $Prazo_da_Condicionante5) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante4 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante5 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante5 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 <> "" && $Prazo_da_Condicionante1 == $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 <> $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 <> $Prazo_da_Condicionante4 && $Prazo_da_Condicionante4 <> $Prazo_da_Condicionante5) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante3 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante4 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante5 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante5 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 <> "" && $Prazo_da_Condicionante1 <> $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 <> $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 <> $Prazo_da_Condicionante4 && $Prazo_da_Condicionante4 <> $Prazo_da_Condicionante5) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante2 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante3 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante4 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante5 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante5 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 <> "" && $Prazo_da_Condicionante1 <> $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 == $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 == $Prazo_da_Condicionante4 && $Prazo_da_Condicionante4 == $Prazo_da_Condicionante5) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante2 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante5 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 <> "" && $Prazo_da_Condicionante1 == $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 <> $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 == $Prazo_da_Condicionante4 && $Prazo_da_Condicionante4 == $Prazo_da_Condicionante5) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante3 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante5 . ";", 'fStyle9_bold');

} elseif ($Condicionante1 <> "" && $Condicionante2 <> "" && $Condicionante3 <> "" && $Condicionante4 <> "" && $Condicionante5 <> "" && $Prazo_da_Condicionante1 == $Prazo_da_Condicionante2 && $Prazo_da_Condicionante2 == $Prazo_da_Condicionante3 && $Prazo_da_Condicionante3 <> $Prazo_da_Condicionante4 && $Prazo_da_Condicionante4 == $Prazo_da_Condicionante5) {

    $cell1->addText('Item: Pendência', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante1 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante1 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante2 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante3 . ";", 'fStyle9_bold');

    $cell1->addText('Prazo de ' . $Prazo_da_Condicionante4 . ' dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante4 . ";", 'fStyle9_bold');

    $textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
    $textrun->addText('•    ', 'fStyle9_normal');
    $textrun->addText($Condicionante5 . ";", 'fStyle9_bold');

} else {

}

$cell1->addText('Prazo de 365 dias', 'fStyle9_bold', 'pStyle3_left_spaceAfter');

$textrun = $cell1->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');
$textrun->addText('•    ', 'fStyle9_normal');
$textrun->addText('Relatório de Informações Ambientais Anual – RIAA, com ART do Engenheiro Responsável.', 'fStyle9_bold');

$cell1->addText('Solicitamos sua especial atenção para o fato de que o não atendimento das condições consignadas neste expediente levará ao enquadramento automático do empreendimento nas normas penais da Legislação Ambiental em vigor.', 'fStyle9_normal', 'pStyle1_justify_withHanging');

$section2->addTextBreak(2);

$section2->addText('____________________________________', 'fStyle9_normal', 'pStyle4_center_spaceAfter');
$section2->addText('JULIANA NOBRE SOARES', 'fStyle11_bold', 'pStyle4_center');
$section2->addText('Secretária Executiva Municipal de Meio Ambiente e Desenvolvimento Econômico', 'fStyle9_normal', 'pStyle4_center');
$section2->addText('Decreto Municipal nº 0006/2021 – GPMB', 'fStyle9_normal', 'pStyle4_center');


$header = $section->addHeader();
//$header->addImage('C:\Users\HP\Google Drive\PMB2.png', array('positioning' => 'relative', 'PosHorizontalRel' => 'margin', 'marginTop' => 200, 'marginLeft' => 55, 'height' => 53.75, 'width' => 63.9, 'wrappingStyle' => 'infront'));
$header->addImage('C:\xampp\htdocs\Barcarena_Online-main\PMB2.png', array('width' => 63.9,
    'height' => 53.75,
    'positioning' => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
    'posHorizontal' => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
    'posVertical' => \PhpOffice\PhpWord\Style\Image::POSITION_ABSOLUTE,
    'marginLeft' => round(\PhpOffice\PhpWord\Shared\Converter::cmToPixel(-0.5)),
    'marginTop' => round(\PhpOffice\PhpWord\Shared\Converter::cmToPixel(0)),
    'wrappingStyle' => 'infront'));
$header->addText('PREFEITURA MUNICIPAL DE BARCARENA', 'fStyle8_bold', 'pStyle4_center');
$header->addText('SECRETARIA MUNICIPAL DE MEIO AMBIENTE E DESENVOLVIMENTO ECONÔMICO - SEMADE', 'fStyle8_bold', 'pStyle4_center');
$header->addText('DEPARTAMENTO DE LICENCIAMENTO AMBIENTAL', 'fStyle8_bold', 'pStyle4_center');
$header->addWatermark('C:\xampp\htdocs\Barcarena_Online-main\PMB3.jpg', array('PosHorizontalRel' => 'page', 'PosVerticalRel' => 'page',  'height' => 800, 'width' => 596.1, 'wrappingStyle' => 'behind'));

$doc_filename = "LICENCA_". date("d-m-Y"). " " . $Nome_da_Empresa . ".docx";

    // Save file
    // Saving the document as OOXML file...
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

    $temp_file_uri = tempnam('', 'anytext');
    $objWriter->save($temp_file_uri);

    //download code
    header('Content-Description: File Transfer');
    header("Content-Type: application/docx");//header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.$doc_filename);
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Content-Length: ' . filesize($temp_file_uri));
    readfile($temp_file_uri);
    unlink($temp_file_uri); // deletes the temporary file
            
    }else{
        echo "erro";
    }
?>