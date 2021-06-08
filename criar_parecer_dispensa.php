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

        $endereco = $_POST['cmpEnd'];
        
        if (isset($_POST['end_da_ativ'])) {
            $enderecodaatividade = $_POST['end_da_ativ'];
        } else {
            $enderecodaatividade = "";
        }

        $atividade = $_POST['cmpAtiv'];
        $numdoparecer = $_POST['campo_numPar'];
        $numdoprocesso = $_POST['campo_numProc'];
        $numdoprotocolo = $_POST['campo_numProt'];
        $datadeentrada = $_POST['campo_date'];
        $solicitacao = $_POST['solicitacao'];

        if (isset($_POST['campo_proc'])) {
            $procurador = $_POST['campo_proc'];
        } else {
            $procurador = "";
        }

        $vistoria = $_POST['vistoria'];

        if (isset($_POST['date_vist'])) {
            $datadavistoria = $_POST['date_vist'];
        } else {
            $datadavistoria = "";
        }

        if (isset($_POST['num_notif1'])) {
            $numdanotificacao1 = $_POST['num_notif1'];
        } else {
            $numdanotificacao1 = "";
        }

        if (isset($_POST['date_notif1'])) {
            $datadanotificacao1 = $_POST['date_notif1'];
        } else {
            $datadanotificacao1 = "";
        }

        if (isset($_POST['receb_notif1'])) {
            $dataderecebdanotificacao1 = $_POST['receb_notif1'];
        } else {
            $dataderecebdanotificacao1 = "";
        }

        if (isset($_POST['atend_notif1'])) {
            $datadeatendimdanotifacao1 = $_POST['atend_notif1'];
        } else {
            $datadeatendimdanotifacao1 = "";
        }

        if (isset($_POST['num_notif2'])) {
            $numdanotificacao2 = $_POST['num_notif2'];
        } else {
            $numdanotificacao2 = "";
        }

        if (isset($_POST['date_notif2'])) {
            $datadanotificacao2 = $_POST['date_notif2'];
        } else {
            $datadanotificacao2 = "";
        }

        if (isset($_POST['receb_notif2'])) {
            $dataderecebdanotificacao2 = $_POST['receb_notif2'];
        } else {
            $dataderecebdanotificacao2 = "";
        }

        if (isset($_POST['atend_notif2'])) {
            $datadeatendimdanotifacao2 = $_POST['atend_notif2'];
        } else {
            $datadeatendimdanotifacao2 = "";
        }

        if (isset($_POST['num_notif3'])) {
            $numdanotificacao3 = $_POST['num_notif3'];
        } else {
            $numdanotificacao3 = "";
        }

        if (isset($_POST['date_notif3'])) {
            $datadanotificacao3 = $_POST['date_notif3'];
        } else {
            $datadanotificacao3 = "";
        }

        if (isset($_POST['receb_notif3'])) {
            $dataderecebdanotificacao3 = $_POST['receb_notif3'];
        } else {
            $dataderecebdanotificacao3 = "";
        }

        if (isset($_POST['atend_notif3'])) {
            $datadeatendimdanotifacao3 = $_POST['atend_notif3'];
        } else {
            $datadeatendimdanotifacao3 = "";
        }  

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

$textrun = $section->addTextRun('pStyle1_justify_withoutSpaceAfter'); 

$textrun->addText('EMPRESA: ', 'fStyle1_normal');
$textrun->addText($nomedaempresa, 'fStyle2_bold');  

$textrun = $section->addTextRun('pStyle1_justify_withoutSpaceAfter'); 

$textrun->addText('ATIVIDADE ECONÔMICA: ', 'fStyle1_normal');
$textrun->addText($atividade, 'fStyle2_bold');  

//$section->addTextBreak();

$textrun = $section->addTextRun('pStyle1_justify_withoutHanging');

$textrun->addText('SOLICITAÇÃO: ', 'fStyle1_normal');
$textrun->addText($solicitacao, 'fStyle2_bold');

$section->addText("Através do processo Nº " . $numdoprocesso . ", protocolado sob N° " . $numdoprotocolo . ", em " . $datadeentrada . ", a empresa " . $nomedaempresa . ", localizada na " . $endereco . ", BARCARENA-PA, requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividade . ".", 'fStyle1_normal', 'pStyle1_justify');

$section->addText("1.   HISTÓRICO DA DOCUMENTAÇÃO", 'fStyle2_bold', 'pStyle1_justify_withoutHanging');

if ($numdanotificacao1 == "") {

    $section->addText("Constatou-se no processo a pendência do Alvará de Funcionamento. Porém, considerando-se a necessidade de Licença ou Dispensa Ambiental para a obtenção de tal documento, julgou-se mais apropriado não emitir notificação.", 'fStyle1_normal', 'pStyle1_justify');

}

else if ($numdanotificacao1 <> "" && $numdanotificacao2 == "" && $numdanotificacao3 == "") {

$section->addText("Após verificação de pendências no processo, por meio de análise processual, visando subsidiar sua análise, este Departamento de Licenciamento Ambiental – DLA emitiu a NOTIFICAÇÃO DE LICENCIAMENTO DE N° " . $numdanotificacao1 . ", em " . $datadanotificacao1 . ", com o prazo de 30 dias para cumprimento, a qual foi recebida no dia " . $dataderecebdanotificacao1 . " e atendida no dia " . $datadeatendimdanotifacao1 . ".", 'fStyle1_normal', 'pStyle1_justify');
}

else if ($numdanotificacao1 <> "" && $numdanotificacao2 <> "" && $numdanotificacao3 == "") {

$section->addText("Após verificação de pendências no processo, por meio de análise processual, visando subsidiar sua análise, este Departamento de Licenciamento Ambiental – DLA emitiu as NOTIFICAÇÕES DE LICENCIAMENTO DE N° " . $numdanotificacao1 . " e " . $numdanotificacao2 . ", em " . $datadanotificacao1 . " e " . $datadanotificacao2 . ", respectivamente, com o prazo de 30 dias para cumprimento, as quais foram recebidas nos dias " . $dataderecebdanotificacao1 . " e " . $dataderecebdanotificacao2 . ", e atendidas nos dias " . $datadeatendimdanotifacao1 . " e " . $datadeatendimdanotifacao2 . ".", 'fStyle1_normal', 'pStyle1_justify');
}

else if ($numdanotificacao1 <> "" && $numdanotificacao2 <> "" && $numdanotificacao3 <> "") {

$section->addText("Após verificação de pendências no processo, por meio de análise processual, visando subsidiar sua análise, este Departamento de Licenciamento Ambiental – DLA emitiu as NOTIFICAÇÕES DE LICENCIAMENTO DE N° " . $numdanotificacao1 . ", " . $numdanotificacao2 . " e " . $numdanotificacao3 . ", em " . $datadanotificacao1 . ", " . $datadanotificacao2 . " e " . $datadanotificacao3 .", respectivamente, com o prazo de 30 dias para cumprimento, as quais foram recebidas nos dias " . $dataderecebdanotificacao1 . ", " . $dataderecebdanotificacao2 . " e " . $dataderecebdanotificacao3 .", e atendidas nos dias " . $datadeatendimdanotifacao1 . ", " . $datadeatendimdanotifacao2 . " e " . $datadeatendimdanotifacao3 . ".", 'fStyle1_normal', 'pStyle1_justify');
}

$section->addText("2.   INFORMAÇÃO E ANÁLISE TÉCNICA", 'fStyle2_bold', 'pStyle1_justify_withoutHanging');

if ($vistoria == "não") {

$section->addText("Após a análise da documentação apresentada e informações obtidas junto a um representante da empresa " . $nomedaempresa . ", verificou-se que a atividade exercida pela mesma não pode ser enquadrada em qualquer legislação atual definidora de atividades de impacto ambiental local no Estado do Pará (Lei Estadual 7.389/2010, Resolução COEMA 162/2021, Lei Municipal 1974/2002), razão pela qual sugere-se a concessão de DISPENSA DE LICENCIAMENTO AMBIENTAL à mesma.", 'fStyle1_normal', 'pStyle1_justify');

} else {

    $section->addText("Após a análise da documentação apresentada e informações obtidas junto a um representante da empresa " . $nomedaempresa . " durante vistoria técnica realizada no dia " . $datadavistoria . ", verificou-se que a atividade exercida pela mesma não pode ser enquadrada em qualquer legislação atual definidora de atividades de impacto ambiental local no Estado do Pará (Lei Estadual 7.389/2010, Resolução COEMA 162/2021, Lei Municipal 1974/2002), razão pela qual sugere-se a concessão de DISPENSA DE LICENCIAMENTO AMBIENTAL à mesma.", 'fStyle1_normal', 'pStyle1_justify');

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
$objWriter->save('PARECER_1_D_SV.docx');

echo "PARECER EMITIDO.";