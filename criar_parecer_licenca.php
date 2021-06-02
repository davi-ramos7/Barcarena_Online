<?php
    if(isset($_POST['cmpEmp'])){
        $id = $_POST['cmpEmp'];

        include_once("conexao.php");
    
        $sql = "SELECT * FROM lista_de_empresas WHERE id=$id";
        $linha= mysqli_query($con, $sql);

        while ($linhas=mysqli_fetch_assoc($linha)) {
            $empresa=$linhas['nome'];
        }

        $nomedaempresa = $empresa;

        $enderecodaempresa = $_POST['cmpEnd'];
        $atividadeCNPJ = $_POST['cmpAtiv'];
        $numdoparecer = $_POST['campo_numPar'];
        $numdoprocesso = $_POST['campo_numProc'];
        $numdoprotocolo = $_POST['campo_numProt'];
        $datadeentrada = $_POST['campo_date'];
        $solicitacao = $_POST['solicitacao'];
        $procurador = $_POST['campo_proc'];
        $vistoria = $_POST['vistoria'];
        $datadavistoria = $_POST['date_vist'];
        $numdanotificacao1 = $_POST['num_notif-01'];
        $datadanotificacao1 = $_POST['date_notif_01'];
        $dataderecebdanotificacao1 = $_POST['receb_notif_01'];
        $datadeatendimdanotifacao1 = $_POST['atend_notif_01'];
        $numdanotificacao2 = $_POST['num_notif-02'];
        $datadanotificacao2 = $_POST['date_notif_02'];
        $dataderecebdanotificacao2 = $_POST['receb_notif_02'];
        $datadeatendimdanotifacao2 = $_POST['atend_notif_02'];
        $numdanotificacao3 = $_POST['num_notif-03'];
        $datadanotificacao3 = $_POST['date_notif_03'];
        $dataderecebdanotificacao3 = $_POST['receb_notif_03'];
        $datadeatendimdanotifacao3 = $_POST['atend_notif_03'];
        $porte = $_POST['campo_porte'];
        $potencialpoluidor = $_POST['campo_pp'];
        $valordataxa = $_POST['campo_vtaxa'];
        $diadataxa = $_POST['campo_dtaxa'];
        $diadepagamentodataxa = $_POST['campo_ptaxa'];


require_once './vendor/autoload.php';

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

$ano = date("Y");
$datadoparecer = $dia . " de " . $mes . " de " . $ano;

// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

// Adding Text element with font customized using named font style...

//$fontStyle1 = '1';
$fnew1 = array('name' => 'Times New Roman', 'size' => 12, 'color' => '1B2232', 'bold' => false);
$phpWord->addFontStyle('fStyle1_normal', $fnew1);

//$fontStyle2 = '2';
$fnew2 = array('name' => 'Times New Roman', 'size' => 12, 'color' => '1B2232', 'bold' => true);
$phpWord->addFontStyle('fStyle2_bold', $fnew2);

$fnew3 = array('name' => 'Times New Roman', 'size' => 12, 'color' => '1B2232', 'bold' => false, 'italic' => true);
$phpWord->addFontStyle('fStyle3_italic', $fnew3);

//$pBase = array('basedOn' => 'Normal');
$pNew1_1 = array('alignment' => 'both', 'indent' => 0, 'hanging' => -1, 'spaceBefore' => 0, 'spaceAfter' =>240, 'spacing' => 0, 'lineHeight' => 1.15);
$pNew1_2 = array('alignment' => 'both', 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0, 'lineHeight' => 1.15);
$pNew1_3 = array('alignment' => 'both', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0, 'lineHeight' => 1.15);
$pNew2 = array('alignment' => 'right', 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0, 'lineHeight' => 1.15);
$pNew3_1 = array('alignment' => 'left', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0, 'lineHeight' => 1.15);
$pNew3_2 = array('alignment' => 'left', 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0, 'lineHeight' => 1.15);
$pNew4_1 = array('alignment' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0, 'lineHeight' => 1.15);
$pNew4_2 = array('alignment' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0, 'lineHeight' => 1.15);

$phpWord->addParagraphStyle('pStyle1_justify', $pNew1_1);
$phpWord->addParagraphStyle('pStyle1_justify_withoutHanging', $pNew1_2);
$phpWord->addParagraphStyle('pStyle1_justify_withoutSpaceAfter', $pNew1_3);
$phpWord->addParagraphStyle('pStyle2_right', $pNew2);
$phpWord->addParagraphStyle('pStyle3_left', $pNew3_1);
$phpWord->addParagraphStyle('pStyle3_left_spaceAfter', $pNew3_2);
$phpWord->addParagraphStyle('pStyle4_center_spaceAfter', $pNew4_1);
$phpWord->addParagraphStyle('pStyle4_center', $pNew4_2);

$sectionStyle1 = array(
    'marginTop' => 2267.716535433, //4cm
    'marginLeft' => 1440, //2.54cm
    'marginRight' => 1440, //2.54cm
    'marginBottom' => 1440 //2.54cm
);

$section = $phpWord->addSection($sectionStyle1);

$section->addText("PARECER TÉCNICO N° " . $numdoparecer, 'fStyle2_bold', 'pStyle4_center_spaceAfter');

$section->addText('PROCESSO Nº ' . $numdoprocesso, 'fStyle2_bold', 'pStyle3_left_spaceAfter'); 

if ($nomedaempresa <> "") {

$textrun = $section->addTextRun('pStyle1_justify_withoutSpaceAfter');   

$textrun->addText('EMPRESA: ', 'fStyle1_normal');
$textrun->addText($nomedaempresa, 'fStyle2_bold');

$textrun = $section->addTextRun('pStyle1_justify_withoutSpaceAfter');

$textrun->addText('ATIVIDADE ECONÔMICA: ', 'fStyle1_normal');
$textrun->addText($atividadeCNPJ, 'fStyle2_bold');  

} else {

$textrun = $section->addTextRun('pStyle1_justify_withoutSpaceAfter');   

$textrun->addText('PESSOA FÍSICA: ', 'fStyle1_normal');
$textrun->addText($nomedapessoafisica, 'fStyle2_bold');

$textrun = $section->addTextRun('pStyle1_justify_withoutSpaceAfter');

$textrun->addText('ATIVIDADE ECONÔMICA: ', 'fStyle1_normal');
$textrun->addText($atividadeEnquadramento, 'fStyle2_bold');

}

//$section->addTextBreak();

$textrun = $section->addTextRun('pStyle1_justify_withoutHanging');

$textrun->addText('SOLICITAÇÃO: ', 'fStyle1_normal');
$textrun->addText($solicitacao, 'fStyle2_bold');

if ($procurador == "" && $nomedaempresa <> "" && $enderecodaatividade <> "") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", " . $nomedaempresa . ", situado(a) na " . $enderecodaempresa . ", BARCARENA-PA, requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividadeCNPJ . ", a ser realizada no seguinte endereço: " . $enderecodaatividade . ".", 'fStyle1_normal', 'pStyle1_justify');
} 

if ($procurador == "" && $nomedaempresa <> "" && $enderecodaatividade == "") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", " . $nomedaempresa . ", situado(a) na " . $enderecodaempresa . ", BARCARENA-PA, requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividadeCNPJ . ".", 'fStyle1_normal', 'pStyle1_justify');
} 

if ($procurador <> "" && $nomedaempresa <> "" && $enderecodaatividade <> "") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", " . $procurador . ", procurador(a) de " . $nomedaempresa . ", situado(a) na " . $enderecodaempresa . ", BARCARENA-PA, requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE)  " . $solicitacao . " para a atividade denominada " . $atividadeCNPJ . ", a ser realizada no seguinte endereço: " . $enderecodaatividade . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($procurador <> "" && $nomedaempresa <> "" && $enderecodaatividade == "") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", " . $procurador . ", procurador(a) de " . $nomedaempresa . ", situado(a) na " . $enderecodaempresa . ", BARCARENA-PA, requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE)  " . $solicitacao . " para a atividade denominada " . $atividadeCNPJ . ".", 'fStyle1_normal', 'pStyle1_justify');
}

$section->addText("1.   HISTÓRICO DA DOCUMENTAÇÃO", 'fStyle2_bold', 'pStyle1_justify_withoutHanging');

if ($numdanotificacao1 == "") {

    $section->addText("Toda a documentação necessária para a emissão da licença solicitada foi devidamente apresentada, motivo este pelo qual nenhuma notificação de licenciamento foi emitida.", 'fStyle1_normal', 'pStyle1_justify');

}

if ($numdanotificacao1 <> "" && $numdanotificacao2 == "" && $numdanotificacao3 == "") {

$section->addText("Após verificação de pendências no processo, por meio de análise processual, visando subsidiar sua análise, este Departamento de Licenciamento Ambiental – DLA emitiu a NOTIFICAÇÃO DE LICENCIAMENTO DE N° " . $numdanotificacao1 . ", em " . $datadanotificacao1 . ", com o prazo de 30 dias para cumprimento, a qual foi recebida no dia " . $dataderecebdanotificacao1 . " e atendida no dia " . $datadeatendimdanotifacao1 . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($numdanotificacao1 <> "" && $numdanotificacao2 <> "" && $numdanotificacao3 == "") {

$section->addText("Após verificação de pendências no processo, por meio de análise processual, visando subsidiar sua análise, este Departamento de Licenciamento Ambiental – DLA emitiu as NOTIFICAÇÕES DE LICENCIAMENTO DE N° " . $numdanotificacao1 . " e " . $numdanotificacao2 . ", em " . $datadanotificacao1 . " e " . $datadanotificacao2 . ", respectivamente, com o prazo de 30 dias para cumprimento, as quais foram recebidas nos dias " . $dataderecebdanotificacao1 . " e " . $dataderecebdanotificacao2 . ", e atendidas nos dias " . $datadeatendimdanotifacao1 . " e " . $datadeatendimdanotifacao2 . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($numdanotificacao1 <> "" && $numdanotificacao2 <> "" && $numdanotificacao3 <> "") {

$section->addText("Após verificação de pendências no processo, por meio de análise processual, visando subsidiar sua análise, este Departamento de Licenciamento Ambiental – DLA emitiu as NOTIFICAÇÕES DE LICENCIAMENTO DE N° " . $numdanotificacao1 . ", " . $numdanotificacao2 . " e " . $numdanotificacao3 . ", em " . $datadanotificacao1 . ", " . $datadanotificacao2 . " e " . $datadanotificacao3 .", respectivamente, com o prazo de 30 dias para cumprimento, as quais foram recebidas nos dias " . $dataderecebdanotificacao1 . ", " . $dataderecebdanotificacao2 . " e " . $dataderecebdanotificacao3 .", e atendidas nos dias " . $datadeatendimdanotifacao1 . ", " . $datadeatendimdanotifacao2 . " e " . $datadeatendimdanotifacao3 . ".", 'fStyle1_normal', 'pStyle1_justify');
}

$section->addText("2.   ENQUADRAMENTO E ANÁLISE TÉCNICA", 'fStyle2_bold', 'pStyle1_justify_withoutHanging');

if ($diadataxa == $diadepagamentodataxa)  {

$section->addText("A empresa " . $nomedaempresa . " foi enquadrada na RESOLUÇÃO COEMA N° 162 DE 02 DE FEVEREIRO DE 2021, a qual “Estabelece as atividades de impacto ambiental local, para fins de licenciamento ambiental, de competência dos Municípios no âmbito do Estado do Pará, e dá outras providências.”, na tipologia " . $atividadeCNPJ . " (PORTE " . $porte . " e POTENCIAL POLUIDOR " . $potencialpoluidor . "), o que resultou em uma taxa equivalente a R$ " . $valordataxa . ", gerada no dia " . $diadataxa . " e paga no mesmo dia.", 'fStyle1_normal', 'pStyle1_justify');

$textrun = $section->addTextRun('pStyle1_justify');

$textrun->addText("A análise da documentação apresentada, vistoria técnica ", 'fStyle1_normal');
$textrun->addText("in loco ", 'fStyle3_italic');
$textrun->addText("e o pagamento da taxa referente à análise do processo de licenciamento em questão, permitiram constatar que a empresa ", 'fStyle1_normal');
$textrun->addText($nomedaempresa, 'fStyle2_bold');
$textrun->addText(" encontra-se apta a desenvolver a atividade pretendida, razão pela qual sugere-se a concessão de ", 'fStyle1_normal');
$textrun->addText($solicitacao, 'fStyle2_bold');
$textrun->addText(" à mesma.", 'fStyle1_normal');

} else {

$section->addText("A atividade desenvolvida pela empresa " . $nomedaempresa . " foi enquadrada na RESOLUÇÃO COEMA N° 162 DE 02 DE FEVEREIRO DE 2021, a qual “Estabelece as atividades de impacto ambiental local, para fins de licenciamento ambiental, de competência dos Municípios no âmbito do Estado do Pará, e dá outras providências.”, na tipologia " . $atividadeCNPJ . " (PORTE " . $porte . " e POTENCIAL POLUIDOR " . $potencialpoluidor . "), o que resultou em uma taxa equivalente a R$ " . $valordataxa . ", gerada no dia " . $diadataxa . " e paga no dia " . $diadepagamentodataxa . ".", 'fStyle1_normal', 'pStyle1_justify');

$textrun = $section->addTextRun('pStyle1_justify');

$textrun->addText("A análise da documentação apresentada, vistoria técnica ", 'fStyle1_normal');
$textrun->addText("in loco ", 'fStyle3_italic');
$textrun->addText("e o pagamento da taxa referente à análise do processo de licenciamento em questão, permitiram constatar que a empresa ", 'fStyle1_normal');
$textrun->addText($nomedaempresa, 'fStyle2_bold');
$textrun->addText(" encontra-se apta a desenvolver a atividade pretendida, razão pela qual sugere-se a concessão de ", 'fStyle1_normal');
$textrun->addText($solicitacao, 'fStyle2_bold');
$textrun->addText(" à mesma.", 'fStyle1_normal');

}

$section->addText("Encaminho este parecer técnico para o Departamento Jurídico desta SEMADE, para anuência e parecer jurídico, para que este Departamento de Licenciamento Ambiental possa dar andamento a este processo de forma legal.", 'fStyle1_normal', 'pStyle1_justify');

$section->addText("Barcarena/Pa, " . $datadoparecer . ".", 'fStyle1_normal', 'pStyle2_right');

$section->addText('Atenciosamente,', 'fStyle1_normal', 'pStyle1_justify');

$section->addTextBreak(1);

$section->addText('______________________________', 'fStyle1_normal', 'pStyle4_center');

$section->addText('David Ramos Pereira', 'fStyle1_normal', 'pStyle4_center');
$section->addText('Geólogo/Matrícula 28516-1/1', 'fStyle1_normal', 'pStyle4_center');

$header = $section->addHeader();
$header->addWatermark('C:\xampp\htdocs\Barcarena_Online\SEMADE-2021.jpg', array('PosHorizontalRel' => 'page', 'PosVerticalRel' => 'page', 'height' => 843, 'width' => 596.1));

$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('PARECER_LICENCA.docx');

echo "PARECER PARA LICENÇA EMITIDO.";
        
    }else{
        echo "erro";
    }
?>
