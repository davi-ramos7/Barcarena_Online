<?php
    if(isset($_POST['cmpEmp'])){
        $id = $_POST['cmpEmp'];

        include_once("conexao.php");
    
        $sql = "SELECT * FROM lista_de_empresas WHERE id=$id";
        $linha= mysqli_query($con, $sql);

        while ($linhas=mysqli_fetch_assoc($linha)) {
            $empresa=$linhas['nome'];
        }

        $nome = $empresa;

        $endereco = $_POST['cmpEnd'];

        $atividadeEnquadramento = $_POST['cmpAtiv'];

        $pessoa = $_POST['pessoa'];

        if (isset($_POST['ativ_sol'])) {
            $atividadesol = $_POST['ativ_sol'];
        } else {
            $atividadesol = "";
        }

        if (isset($_POST['end_da_ativ'])) {
            $enderecoatvemp = $_POST['end_da_ativ'];
        } else {
            $enderecoatvemp = "";
        }

        $numdoparecer = $_POST['campo_numPar'];
        $numdoprocesso = $_POST['campo_numProc'];
        $numdoprotocolo = $_POST['campo_numProt'];

        $datadeentrada_eng = $_POST['campo_date'];
        $datadeentrada = date('d/m/Y', strtotime($datadeentrada_eng));

        $solicitacao = $_POST['solicitacao'];

        if (isset($_POST['campo_proc'])) {
            $procurador = $_POST['campo_proc'];
        } else {
            $procurador = "";
        }

        $vistoria = $_POST['vistoria'];

        if (isset($_POST['date_vist'])) {
            $datadavistoria_eng = $_POST['date_vist'];
            $datadavistoria = date('d/m/Y', strtotime($datadavistoria_eng));
        } else {
            $datadavistoria = "";
        }

        if (isset($_POST['num_notif1'])) {
            $numdanotificacao1 = $_POST['num_notif1'];
        } else {
            $numdanotificacao1 = "";
        }

        if (isset($_POST['date_notif1'])) {
            $datadanotificacao1_eng = $_POST['date_notif1'];
            $datadanotificacao1 = date('d/m/Y', strtotime($datadanotificacao1_eng));
        } else {
            $datadanotificacao1 = "";
        }

        if (isset($_POST['receb_notif1'])) {
            $dataderecebdanotificacao1_eng = $_POST['receb_notif1'];
            $dataderecebdanotificacao1 = date('d/m/Y', strtotime($dataderecebdanotificacao1_eng));

        } else {
            $dataderecebdanotificacao1 = "";
        }

        if (isset($_POST['atend_notif1'])) {
            $datadeatendimdanotifacao1_eng = $_POST['atend_notif1'];
            $datadeatendimdanotifacao1 = date('d/m/Y', strtotime($datadeatendimdanotifacao1_eng));
        } else {
            $datadeatendimdanotifacao1 = "";
        }

        if (isset($_POST['num_notif2'])) {
            $numdanotificacao2 = $_POST['num_notif2'];
        } else {
            $numdanotificacao2 = "";
        }

        if (isset($_POST['date_notif2'])) {
            $datadanotificacao2_eng = $_POST['date_notif2'];
            $datadanotificacao2 = date('d/m/Y', strtotime($datadanotificacao2_eng));
        } else {
            $datadanotificacao2 = "";
        }

        if (isset($_POST['receb_notif2'])) {
            $dataderecebdanotificacao2_eng = $_POST['receb_notif2'];
            $dataderecebdanotificacao2 = date('d/m/Y', strtotime($dataderecebdanotificacao2_eng));

        } else {
            $dataderecebdanotificacao2 = "";
        }

        if (isset($_POST['atend_notif2'])) {
            $datadeatendimdanotifacao2_eng = $_POST['atend_notif2'];
            $datadeatendimdanotifacao2 = date('d/m/Y', strtotime($datadeatendimdanotifacao2_eng));
        } else {
            $datadeatendimdanotifacao2 = "";
        }

        if (isset($_POST['num_notif3'])) {
            $numdanotificacao3 = $_POST['num_notif3'];
        } else {
            $numdanotificacao3 = "";
        }

        if (isset($_POST['date_notif3'])) {
            $datadanotificacao3_eng = $_POST['date_notif3'];
            $datadanotificacao3 = date('d/m/Y', strtotime($datadanotificacao3_eng));
        } else {
            $datadanotificacao3 = "";
        }

        if (isset($_POST['receb_notif3'])) {
            $dataderecebdanotificacao3_eng = $_POST['receb_notif3'];
            $dataderecebdanotificacao3 = date('d/m/Y', strtotime($dataderecebdanotificacao3_eng));

        } else {
            $dataderecebdanotificacao3 = "";
        }

        if (isset($_POST['atend_notif3'])) {
            $datadeatendimdanotifacao3_eng = $_POST['atend_notif3'];
            $datadeatendimdanotifacao3 = date('d/m/Y', strtotime($datadeatendimdanotifacao3_eng));
        } else {
            $datadeatendimdanotifacao3 = "";
        }

        if (isset($_POST['num_notif4'])) {
            $numdanotificacao4 = $_POST['num_notif4'];
        } else {
            $numdanotificacao4 = "";
        }

        if (isset($_POST['date_notif4'])) {
            $datadanotificacao4_eng = $_POST['date_notif4'];
            $datadanotificacao4 = date('d/m/Y', strtotime($datadanotificacao4_eng));
        } else {
            $datadanotificacao4 = "";
        }

        if (isset($_POST['receb_notif4'])) {
            $dataderecebdanotificacao4_eng = $_POST['receb_notif4'];
            $dataderecebdanotificacao4 = date('d/m/Y', strtotime($dataderecebdanotificacao4_eng));

        } else {
            $dataderecebdanotificacao4 = "";
        }

        if (isset($_POST['atend_notif4'])) {
            $datadeatendimdanotifacao4_eng = $_POST['atend_notif4'];
            $datadeatendimdanotifacao4 = date('d/m/Y', strtotime($datadeatendimdanotifacao4_eng));
        } else {
            $datadeatendimdanotifacao4 = "";
        }

        $porte = $_POST['campo_porte'];
        $potencialpoluidor = $_POST['campo_pp'];
        $valordataxa = $_POST['campo_vtaxa'];

        if (isset($_POST['campo_dtaxa'])) {
            $diadataxa_eng = $_POST['campo_dtaxa'];
            $diadataxa = date('d/m/Y', strtotime($diadataxa_eng));
        } else {
            $diadataxa = "";
        }

        if (isset($_POST['campo_ptaxa'])) {
            $diadepagamentodataxa_eng = $_POST['campo_ptaxa'];
            $diadepagamentodataxa = date('d/m/Y', strtotime($diadepagamentodataxa_eng));
        } else {
            $diadepagamentodataxa = "";
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

if ($pessoa == "pj") {
    $textrun = $section->addTextRun('pStyle1_justify_withoutSpaceAfter'); 
    $textrun->addText('EMPRESA: ', 'fStyle1_normal');
    $textrun->addText($nome, 'fStyle2_bold');  
} else {
    $textrun = $section->addTextRun('pStyle1_justify_withoutSpaceAfter'); 
    $textrun->addText('A: ', 'fStyle1_normal');
    $textrun->addText($nome, 'fStyle2_bold');  
}

if ($atividadesol <> "") {
    $textrun = $section->addTextRun('pStyle1_justify_withoutSpaceAfter'); 
    $textrun->addText('ATIVIDADE ECONÔMICA: ', 'fStyle1_normal');
    $textrun->addText($atividadesol, 'fStyle2_bold');
} else {
    $textrun = $section->addTextRun('pStyle1_justify_withoutSpaceAfter'); 
    $textrun->addText('ATIVIDADE ECONÔMICA: ', 'fStyle1_normal');
    $textrun->addText($atividadeEnquadramento, 'fStyle2_bold');
}  

//$section->addTextBreak();

$textrun = $section->addTextRun('pStyle1_justify_withoutHanging');

$textrun->addText('SOLICITAÇÃO: ', 'fStyle1_normal');
$textrun->addText($solicitacao, 'fStyle2_bold');

if ($procurador == "" && $pessoa == "pj" && $atividadesol <> "" && $enderecoatvemp <> "") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", a empresa " . $nome . ", localizada na(o) " . $endereco . ", requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividadesol . ", a ser realizada no seguinte endereço: " . $enderecoatvemp . ".", 'fStyle1_normal', 'pStyle1_justify');
} 

if ($procurador == "" && $pessoa == "pj" && $atividadesol == "" && $enderecoatvemp <> "") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", a empresa " . $nome . ", localizada na(o) " . $endereco . ", requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividadeEnquadramento . ", a ser realizada no seguinte endereço: " . $enderecoatvemp . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($procurador == "" && $pessoa == "pj" && $atividadesol <> "" && $enderecoatvemp == "") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", a empresa " . $nome . ", localizada na(o) " . $endereco . ", requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividadesol . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($procurador == "" && $pessoa == "pj" && $atividadesol == "" && $enderecoatvemp == "") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", a empresa " . $nome . ", localizada na(o) " . $endereco . ", requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividadeEnquadramento . ".", 'fStyle1_normal', 'pStyle1_justify');
} 

if ($procurador <> "" && $pessoa == "pj" && $atividadesol <> "" && $enderecoatvemp <> "") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", " . $procurador . ", procurador(a) da empresa " . $nome . ", localizada na(o) " . $endereco . ", requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividadesol . ", a ser realizada no seguinte endereço: " . $enderecoatvemp . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($procurador <> "" && $pessoa == "pj" && $atividadesol == "" && $enderecoatvemp <> "") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", " . $procurador . ", procurador(a) da empresa " . $nome . ", localizada na(o) " . $endereco . ", requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividadeEnquadramento . ", a ser realizada no seguinte endereço: " . $enderecoatvemp . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($procurador <> "" && $pessoa == "pj" && $atividadesol <> "" && $enderecoatvemp == "") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", " . $procurador . ", procurador(a) da empresa " . $nome . ", localizada na(o) " . $endereco . ", requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividadesol . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($procurador <> "" && $pessoa == "pj" && $atividadesol == "" && $enderecoatvemp == "") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", " . $procurador . ", procurador(a) da empresa " . $nome . ", localizada na(o) " . $endereco . ", requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividadeEnquadramento . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($procurador == "" && $pessoa == "pf") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", " . $nome . " requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividadeEnquadramento . ", a ser realizada no seguinte endereço: " . $endereco . ".", 'fStyle1_normal', 'pStyle1_justify');
} 

if ($procurador <> "" && $pessoa == "pf") {

    $section->addText("Através do processo n° " . $numdoprocesso . ", protocolado sob n° " . $numdoprotocolo . ", em " . $datadeentrada . ", " . $procurador . ", procurador(a) do(a) Sr(a) " . $nome . ", requereu junto a esta Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE) " . $solicitacao . " para a atividade denominada " . $atividadeEnquadramento . ", a ser realizada no seguinte endereço: " . $endereco . ".", 'fStyle1_normal', 'pStyle1_justify');
} 

$section->addText("1.   HISTÓRICO DA DOCUMENTAÇÃO", 'fStyle2_bold', 'pStyle1_justify_withoutHanging');

if ($numdanotificacao1 == "") {

    $section->addText("Toda a documentação necessária para a emissão da licença solicitada foi devidamente apresentada, motivo este pelo qual nenhuma notificação de licenciamento foi emitida.", 'fStyle1_normal', 'pStyle1_justify');

}

if ($numdanotificacao1 <> "" && $numdanotificacao2 == "" && $numdanotificacao3 == "" && $numdanotificacao4 == "") {

$section->addText("Após verificação de pendências no processo, por meio de análise processual, visando subsidiar sua análise, este Departamento de Licenciamento Ambiental – DLA emitiu a NOTIFICAÇÃO DE LICENCIAMENTO DE N° " . $numdanotificacao1 . ", em " . $datadanotificacao1 . ", com o prazo de 30 dias para cumprimento, a qual foi recebida no dia " . $dataderecebdanotificacao1 . " e atendida no dia " . $datadeatendimdanotifacao1 . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($numdanotificacao1 <> "" && $numdanotificacao2 <> "" && $numdanotificacao3 == "" && $numdanotificacao4 == "") {

$section->addText("Após verificação de pendências no processo, por meio de análise processual, visando subsidiar sua análise, este Departamento de Licenciamento Ambiental – DLA emitiu as NOTIFICAÇÕES DE LICENCIAMENTO DE N° " . $numdanotificacao1 . " e " . $numdanotificacao2 . ", em " . $datadanotificacao1 . " e " . $datadanotificacao2 . ", respectivamente, com o prazo de 30 dias para cumprimento, as quais foram recebidas nos dias " . $dataderecebdanotificacao1 . " e " . $dataderecebdanotificacao2 . ", e atendidas nos dias " . $datadeatendimdanotifacao1 . " e " . $datadeatendimdanotifacao2 . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($numdanotificacao1 <> "" && $numdanotificacao2 <> "" && $numdanotificacao3 <> "" && $numdanotificacao4 == "") {

$section->addText("Após verificação de pendências no processo, por meio de análise processual, visando subsidiar sua análise, este Departamento de Licenciamento Ambiental – DLA emitiu as NOTIFICAÇÕES DE LICENCIAMENTO DE N° " . $numdanotificacao1 . ", " . $numdanotificacao2 . " e " . $numdanotificacao3 . ", em " . $datadanotificacao1 . ", " . $datadanotificacao2 . " e " . $datadanotificacao3 .", respectivamente, com o prazo de 30 dias para cumprimento, as quais foram recebidas nos dias " . $dataderecebdanotificacao1 . ", " . $dataderecebdanotificacao2 . " e " . $dataderecebdanotificacao3 .", e atendidas nos dias " . $datadeatendimdanotifacao1 . ", " . $datadeatendimdanotifacao2 . " e " . $datadeatendimdanotifacao3 . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($numdanotificacao1 <> "" && $numdanotificacao2 <> "" && $numdanotificacao3 <> "" && $numdanotificacao4 == "") {

$section->addText("Após verificação de pendências no processo, por meio de análise processual, visando subsidiar sua análise, este Departamento de Licenciamento Ambiental – DLA emitiu as NOTIFICAÇÕES DE LICENCIAMENTO DE N° " . $numdanotificacao1 . ", " . $numdanotificacao2 . ", " . $numdanotificacao3 . " e " . $numdanotificacao4 . ", em " . $datadanotificacao1 . ", " . $datadanotificacao2 . ", " . $datadanotificacao3 .", e " . $datadanotificacao4 .", respectivamente, com o prazo de 30 dias para cumprimento, as quais foram recebidas nos dias " . $dataderecebdanotificacao1 . ", " . $dataderecebdanotificacao2 . ", " . $dataderecebdanotificacao3 .", e " . $dataderecebdanotificacao4 . " e atendidas nos dias " . $datadeatendimdanotifacao1 . ", " . $datadeatendimdanotifacao2 . ", " . $datadeatendimdanotifacao3 . " e "  . $datadeatendimdanotifacao4 . ".", 'fStyle1_normal', 'pStyle1_justify');
}

$section->addText("2.   ENQUADRAMENTO E ANÁLISE TÉCNICA", 'fStyle2_bold', 'pStyle1_justify_withoutHanging');

if ($pessoa == "pj" && $diadataxa == $diadepagamentodataxa)  {

$section->addText("A empresa " . $nome . " foi enquadrada na RESOLUÇÃO COEMA N° 162 DE 02 DE FEVEREIRO DE 2021, a qual “Estabelece as atividades de impacto ambiental local, para fins de licenciamento ambiental, de competência dos Municípios no âmbito do Estado do Pará, e dá outras providências.”, na tipologia " . $atividadeEnquadramento . " (PORTE " . $porte . " e POTENCIAL POLUIDOR " . $potencialpoluidor . "), o que resultou em uma taxa equivalente a R$ " . $valordataxa . ", gerada no dia " . $diadataxa . " e paga no mesmo dia.", 'fStyle1_normal', 'pStyle1_justify');

} elseif ($pessoa == "pj" && $diadataxa <> $diadepagamentodataxa) {

$section->addText("A atividade desenvolvida pela empresa " . $nome . " foi enquadrada na RESOLUÇÃO COEMA N° 162 DE 02 DE FEVEREIRO DE 2021, a qual “Estabelece as atividades de impacto ambiental local, para fins de licenciamento ambiental, de competência dos Municípios no âmbito do Estado do Pará, e dá outras providências.”, na tipologia " . $atividadeEnquadramento . " (PORTE " . $porte . " e POTENCIAL POLUIDOR " . $potencialpoluidor . "), o que resultou em uma taxa equivalente a R$ " . $valordataxa . ", gerada no dia " . $diadataxa . " e paga no dia " . $diadepagamentodataxa . ".", 'fStyle1_normal', 'pStyle1_justify');

} elseif ($pessoa == "pf" && $diadataxa <> $diadepagamentodataxa) {

$section->addText("A atividade desenvolvida pelo(a) Sr(a) " . $nome . " foi enquadrada na RESOLUÇÃO COEMA N° 162 DE 02 DE FEVEREIRO DE 2021, a qual “Estabelece as atividades de impacto ambiental local, para fins de licenciamento ambiental, de competência dos Municípios no âmbito do Estado do Pará, e dá outras providências.”, na tipologia " . $atividadeEnquadramento . " (PORTE " . $porte . " e POTENCIAL POLUIDOR " . $potencialpoluidor . "), o que resultou em uma taxa equivalente a R$ " . $valordataxa . ", gerada no dia " . $diadataxa . " e paga no dia " . $diadepagamentodataxa . ".", 'fStyle1_normal', 'pStyle1_justify');

} elseif ($pessoa == "pf" && $diadataxa <> $diadepagamentodataxa) {

$section->addText("A atividade desenvolvida pelo(a) Sr(a) " . $nome . " foi enquadrada na RESOLUÇÃO COEMA N° 162 DE 02 DE FEVEREIRO DE 2021, a qual “Estabelece as atividades de impacto ambiental local, para fins de licenciamento ambiental, de competência dos Municípios no âmbito do Estado do Pará, e dá outras providências.”, na tipologia " . $atividadeEnquadramento . " (PORTE " . $porte . " e POTENCIAL POLUIDOR " . $potencialpoluidor . "), o que resultou em uma taxa equivalente a R$ " . $valordataxa . ", gerada no dia " . $diadataxa . " e paga no dia " . $diadepagamentodataxa . ".", 'fStyle1_normal', 'pStyle1_justify');
}

if ($pessoa == "pj") {

    $textrun = $section->addTextRun('pStyle1_justify');

    $textrun->addText("A análise da documentação apresentada, vistoria técnica ", 'fStyle1_normal');
    $textrun->addText("in loco", 'fStyle3_italic');
    $textrun->addText(", realizada no dia " . $datadavistoria . ", e o pagamento da taxa referente à análise do processo de licenciamento em questão, permitiram constatar que a empresa ", 'fStyle1_normal');
    $textrun->addText($nome, 'fStyle2_bold');
    $textrun->addText(" encontra-se apta a desenvolver a atividade pretendida, razão pela qual sugere-se a concessão de ", 'fStyle1_normal');
    $textrun->addText($solicitacao, 'fStyle2_bold');
    $textrun->addText(" à mesma.", 'fStyle1_normal');

} else {
    $textrun = $section->addTextRun('pStyle1_justify');

    $textrun->addText("A análise da documentação apresentada, vistoria técnica ", 'fStyle1_normal');
    $textrun->addText("in loco", 'fStyle3_italic');
    $textrun->addText(", realizada no dia " . $datadavistoria . ", e o pagamento da taxa referente à análise do processo de licenciamento em questão, permitiram constatar que o Sr(a) ", 'fStyle1_normal');
    $textrun->addText($nome, 'fStyle2_bold');
    $textrun->addText(" encontra-se apto(a) a desenvolver a atividade pretendida, razão pela qual sugere-se a concessão de ", 'fStyle1_normal');
    $textrun->addText($solicitacao, 'fStyle2_bold');
    $textrun->addText(" ao(à) mesmo(a).", 'fStyle1_normal');
}

$section->addText("Encaminho este parecer técnico para o Departamento Jurídico desta SEMADE, para anuência e parecer jurídico, para que este Departamento de Licenciamento Ambiental possa dar andamento a este processo de forma legal.", 'fStyle1_normal', 'pStyle1_justify');

$section->addText("Barcarena/Pa, " . $datadoparecer . ".", 'fStyle1_normal', 'pStyle2_right');

$section->addText('Atenciosamente,', 'fStyle1_normal', 'pStyle1_justify');

$section->addTextBreak(1);

$section->addText('______________________________', 'fStyle1_normal', 'pStyle4_center');

$section->addText('David Ramos Pereira', 'fStyle1_normal', 'pStyle4_center');
$section->addText('Geólogo/Matrícula 28516-1/1', 'fStyle1_normal', 'pStyle4_center');

$header = $section->addHeader();
$header->addWatermark('C:\xampp\htdocs\Barcarena_Online-main\SEMADE-2021.jpg', array('PosHorizontalRel' => 'page', 'PosVerticalRel' => 'page', 'height' => 843, 'width' => 596.1));

$doc_filename = "PARECER_". date("d-m-Y"). "_" . $nome . ".docx";

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
