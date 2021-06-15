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
$pNew1_2 = array('alignment' => 'both', 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0);
$pNew1_3 = array('alignment' => 'both', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0);
$pNew1_4 = array('alignment' => 'both', 'indent' => 4.7, 'hanging' => 0,'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0);
$pNew1_5 = array('alignment' => 'both', 'indent' => 0, 'hanging' => 0, 'spaceBefore' => 0, 'spaceAfter' =>240, 'spacing' => 0, 'lineHeight' => 1.15);
$pNew2 = array('alignment' => 'right', 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0);
$pNew3_1 = array('alignment' => 'left', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0);
$pNew3_2 = array('alignment' => 'left', 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0);
$pNew4_1 = array('alignment' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 240, 'spacing' => 0);
$pNew4_2 = array('alignment' => 'center', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0);

$phpWord->addParagraphStyle('pStyle1_justify', $pNew1_1);
$phpWord->addParagraphStyle('pStyle1_justify_withoutHanging', $pNew1_2);
$phpWord->addParagraphStyle('pStyle1_justify_withoutSpaceAfter', $pNew1_3);
$phpWord->addParagraphStyle('pStyle1_justify_citacoes', $pNew1_4);
$phpWord->addParagraphStyle('pStyle1_consideracoes', $pNew1_5);
$phpWord->addParagraphStyle('pStyle2_right', $pNew2);
$phpWord->addParagraphStyle('pStyle3_left', $pNew3_1);
$phpWord->addParagraphStyle('pStyle3_left_spaceAfter', $pNew3_2);
$phpWord->addParagraphStyle('pStyle4_center_spaceAfter', $pNew4_1);
$phpWord->addParagraphStyle('pStyle4_center', $pNew4_2);

$section = $phpWord->addSection(array(
    'marginTop' => 2200,
    'marginBottom' => 1500,
));

//$section->addTextBreak(2);  

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

$section->addText("INTRODUÇÃO", 'fStyle2_bold', 'pStyle1_justify_withoutHanging');

$textrun = $section->addTextRun('pStyle1_justify');

$textrun->addText("No dia " . $datadeentrada . " a empresa ", 'fStyle1_normal');
$textrun->addText($nomedaempresa, 'fStyle2_bold');
$textrun->addText(", situada na ", 'fStyle1_normal');
$textrun->addText($endereco, 'fStyle2_bold');
$textrun->addText(", protocolou documentos nesta SEMADE a fim de obter ", 'fStyle1_normal');
$textrun->addText($solicitacao, 'fStyle2_bold');
$textrun->addText(" para exercer a atividade supracitada.", 'fStyle1_normal');

$section->addText("ANÁLISE TÉCNICA", 'fStyle2_bold', 'pStyle1_justify_withoutHanging');

$section->addText("A elaboração deste Parecer Técnico baseou-se na análise dos documentos que constam nos autos do processo, em informações obtidas junto a um representante da empresa, assim como na legislação ambiental em vigor. As principais considerações desta Análise Técnica, bem como uma sugestão nelas embasada, são apresentadas a seguir.", 'fStyle1_normal', 'pStyle1_justify');

$section->addText("CONSIDERANDO que a Resolução CONAMA n° 237/1997 cita em seu Art. 6°:", 'fStyle1_normal', 'pStyle1_consideracoes');

$section->addText('"Compete ao órgão ambiental municipal, ouvidos os órgãos competentes da União, dos Estados e do Distrito Federal, quando couber, o licenciamento ambiental de empreendimentos e atividades de impacto ambiental local e daquelas que lhe forem delegadas pelo Estado por instrumento legal ou convênio."', 'fStyle1_normal', 'pStyle1_justify_citacoes');

$section->addText("CONSIDERANDO que a empresa " . $nomedaempresa . " pretende desenvolver de forma legal a atividade " . $atividade . ";", 'fStyle1_normal', 'pStyle1_consideracoes');

$section->addText("CONSIDERANDO que a atividade " . $atividade . " não consta na tabela anexa à Resolução COEMA n° 162/2021, a qual:", 'fStyle1_normal', 'pStyle1_consideracoes');

$section->addText('“Estabelece as atividades de impacto ambiental local, para fins de licenciamento ambiental, de competência dos Municípios no âmbito do Estado do Pará, e dá outras providências.”', 'fStyle1_normal', 'pStyle1_justify_citacoes');

$section->addText("CONSIDERANDO que a atividade ". $atividade . " consta na tabela anexa à Resolução COEMA n° 117/2014, que:", 'fStyle1_normal', 'pStyle1_consideracoes');

$section->addText('“...estabelece a tabela de enquadramento das atividades sujeitas à cobrança de taxas pelo exercício regular do poder de polícia administrativa ambiental nas classes previstas na Lei Estadual nº 6.724, de 02 de fevereiro de 2005 que alterou a Lei Estadual nº 6.013, de 27 de dezembro de 1996.”', 'fStyle1_normal', 'pStyle1_justify_citacoes');

$section->addText("CONSIDERANDO que esta atividade não foi delegada pelo Estado ao Município até o presente momento;", 'fStyle1_normal', 'pStyle1_consideracoes');

$section->addText("SUGERE-SE o encaminhamento da empresa em questão à SEMAS/PA, para o devido Licenciamento Ambiental da atividade pretendida.", 'fStyle1_normal', 'pStyle1_consideracoes');

$section->addText("CONCLUSÃO", 'fStyle2_bold', 'pStyle1_justify_withoutHanging');

$section->addText("Diante disto, encaminho este parecer técnico ao DEPARTAMENTO JURÍDICO desta SEMADE, para anuência e parecer jurídico, para que este Departamento de Licenciamento Ambiental possa dar andamento a este processo de forma legal.", 'fStyle1_normal', 'pStyle1_justify');

$section->addText("Este é o meu entendimento e parecer técnico.", 'fStyle1_normal', 'pStyle1_justify');

$section->addText("Barcarena/Pa, " . $datadoparecer . ".", 'fStyle1_normal', 'pStyle2_right');

$section->addTextBreak(1);

$section->addText('______________________________', 'fStyle1_normal', 'pStyle4_center');

$section->addText('David Ramos Pereira', 'fStyle1_normal', 'pStyle4_center');
$section->addText('Geólogo/Matrícula 28516-1/1', 'fStyle1_normal', 'pStyle4_center');

$header = $section->addHeader();
$header->addWatermark('C:\xampp\htdocs\Barcarena_Online\SEMADE-2021.jpg', array('PosHorizontalRel' => 'page', 'PosVerticalRel' => 'page', 'height' => 843, 'width' => 596.1));

$doc_filename = "PARECER_". date("d-m-Y"). "_" . $nomedaempresa . ".docx";

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

