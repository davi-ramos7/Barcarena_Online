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
        $atividade = $_POST['cmpAtiv'];
        $numdanotif = $_POST['campo_numNot'];
        $numdoprocesso = $_POST['campo_numProc'];
        $destinatario = $_POST['campo_dest'];
        $documento1 = $_POST['campo_doc1'];

        if (isset($_POST['campo_doc2'])) {
        	$documento2 = $_POST['campo_doc2'];
        } else {
        	$documento2 = "";
        } 

        if (isset($_POST['campo_doc3'])) {
        	$documento3 = $_POST['campo_doc3'];
        } else {
        	$documento3 = "";
        } 

        if (isset($_POST['campo_doc4'])) {
        	$documento4 = $_POST['campo_doc4'];
        } else {
        	$documento4 = "";
        } 

        if (isset($_POST['campo_doc5'])) {
        	$documento5 = $_POST['campo_doc5'];
        } else {
        	$documento5 = "";
        } 

        if (isset($_POST['campo_doc6'])) {
        	$documento6 = $_POST['campo_doc6'];
        } else {
        	$documento6 = "";
        } 

        if (isset($_POST['campo_doc7'])) {
        	$documento7 = $_POST['campo_doc7'];
        } else {
        	$documento7 = "";
        } 

        if (isset($_POST['campo_doc8'])) {
        	$documento8 = $_POST['campo_doc8'];
        } else {
        	$documento8 = "";
        } 

        if (isset($_POST['campo_doc9'])) {
        	$documento9 = $_POST['campo_doc9'];
        } else {
        	$documento9 = "";
        } 

        if (isset($_POST['campo_doc10'])) {
        	$documento10 = $_POST['campo_doc10'];
        } else {
        	$documento10 = "";
        } 

    require_once './vendor/autoload.php';

//Modelo de notificação

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
	$data = $dia . " de " . $mes . " de " . $ano;
	$quebradelinha = "<br>";

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
	$pNew1_2 = array('alignment' => 'both', 'indent' => 0, 'hanging' => 0, 'spaceBefore' => 0, 'spaceAfter' =>0, 'spacing' => 0, 'lineHeight' => 1.15);
	$pNew1_3 = array('alignment' => 'both', 'indent' => 0, 'hanging' => 0, 'spaceBefore' => 0, 'spaceAfter' =>240, 'spacing' => 0, 'lineHeight' => 1.15);
	$pNew2 = array('alignment' => 'right', 'spaceBefore' => 0, 'spaceAfter' =>240, 'spacing' => 0, 'lineHeight' => 1.15);
	$pNew3_1 = array('alignment' => 'left', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0, 'lineHeight' => 1.15);
	$pNew3_2 = array('alignment' => 'left', 'spaceBefore' => 0, 'spaceAfter' =>240, 'spacing' => 0, 'lineHeight' => 1.15);
	$pNew4 = array('alignment' => 'center', 'spaceBefore' => 0, 'spaceAfter' =>0, 'spacing' => 0, 'lineHeight' => 1.15);

	$phpWord->addParagraphStyle('pStyle1_justify_withHanging', $pNew1_1);
	$phpWord->addParagraphStyle('pStyle1_justify_whithoutHanging', $pNew1_2);
	$phpWord->addParagraphStyle('pStyle1_justify_whithoutHanging_spaceAfter', $pNew1_3);
	$phpWord->addParagraphStyle('pStyle2_right', $pNew2);
	$phpWord->addParagraphStyle('pStyle3_left', $pNew3_1);
	$phpWord->addParagraphStyle('pStyle3_left_spaceAfter', $pNew3_2);
	$phpWord->addParagraphStyle('pStyle4_center', $pNew4);

	$sectionStyle1 = array(
	    'marginTop' => 2267.716535433, //4cm
	    'marginLeft' => 1440, //2.54cm
	    'marginRight' => 1440, //2.54cm
	    'marginBottom' => 1440 //2.54cm
	);

	//$depth = 1
	//$listStyle = array()

	/* Note: any element you append to a document must reside inside of a Section. */
	// Adding an empty Section to the document...

	$section = $phpWord->addSection($sectionStyle1);

	//$phpWord->addParagraphStyle('pJustify', array('align' => 'both', 'spaceBefore' => 0, 'spaceAfter' => 0, 'spacing' => 0));

	$section->addText('Barcarena/Pa, ' . $data, 'fStyle1_normal', 'pStyle2_right');

	$section->addText('NOTIFICAÇÃO DE LICENCIAMENTO Nº ' . $numdanotif, 'fStyle2_bold', 'pStyle3_left_spaceAfter');

	$section->addText('PROCESSO Nº ' . $numdoprocesso, 'fStyle2_bold', 'pStyle3_left_spaceAfter');

	$textrun = $section->addTextRun('pStyle1_justify_whithoutHanging'); 

	$textrun->addText('A: ', 'fStyle1_normal');
	$textrun->addText($nomedaempresa, 'fStyle2_bold');  

	//$section->addTextBreak();

	$textrun = $section->addTextRun('pStyle1_justify_whithoutHanging'); 

	$textrun->addText('ATIVIDADE ECONÔMICA: ', 'fStyle1_normal');
	$textrun->addText($atividade, 'fStyle2_bold');  

	//$section->addTextBreak();

	$textrun = $section->addTextRun('pStyle1_justify_whithoutHanging');

	$textrun->addText('A/C SR(A). ', 'fStyle1_normal');
	$textrun->addText($destinatario, 'fStyle2_bold');

	//$section->addTextBreak();

	$textrun = $section->addTextRun('pStyle1_justify_whithoutHanging_spaceAfter');

	$textrun->addText('LOGRADOURO: ', 'fStyle1_normal');
	$textrun->addText($endereco, 'fStyle2_bold');


	$section->addText('Solicitamos a vossa senhoria a apresentação, dentro do prazo de 30 (trinta) dias, contando do recebimento desta notificação, à Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE), localizada à Rodovia PA 481, Km 01, São Francisco, para fins de Regularização Ambiental, dos documentos listados abaixo:', 'fStyle1_normal', 'pStyle1_justify_withHanging');


	$phpWord->addNumberingStyle('listStyle', array(
	                'type'   => 'hybridMultilevel',
	                'levels' => array(

				array('format' => 'decimal', 'text' => '%1.', 'tabPos' => 1000, 'left' => 1000, 'hanging' => 360)
				)
	        )
	    );

	if ($documento1 <> "") {
		$section->addListItem($documento1 . ";", 0, 'fStyle2_bold', 'listStyle','pStyle1_justify_whithoutHanging_spaceAfter');
	}

	if ($documento2 <> "") {
		$section->addListItem($documento2 . ";" , 0, 'fStyle2_bold', 'listStyle','pStyle1_justify_whithoutHanging_spaceAfter');
	}

	if ($documento3 <> "") {
		$section->addListItem($documento3 . ";", 0, 'fStyle2_bold', 'listStyle','pStyle1_justify_whithoutHanging_spaceAfter');
	}

	if ($documento4 <> "") {
		$section->addListItem($documento4 . ";", 0, 'fStyle2_bold', 'listStyle','pStyle1_justify_whithoutHanging_spaceAfter');
	}

	if ($documento5 <> "") {
		$section->addListItem($documento5 . ";", 0, 'fStyle2_bold', 'listStyle','pStyle1_justify_whithoutHanging_spaceAfter');
	}

	if ($documento6 <> "") {
		$section->addListItem($documento6 . ";", 0, 'fStyle2_bold', 'listStyle','pStyle1_justify_whithoutHanging_spaceAfter');
	}

	if ($documento7 <> "") {
		$section->addListItem($documento7 . ";", 0, 'fStyle2_bold', 'listStyle','pStyle1_justify_whithoutHanging_spaceAfter');
	}

	if ($documento8 <> "") {
		$section->addListItem($documento8 . ";", 0, 'fStyle2_bold', 'listStyle','pStyle1_justify_whithoutHanging_spaceAfter');
	}

	if ($documento9 <> "") {
		$section->addListItem($documento9 . ";", 0, 'fStyle2_bold', 'listStyle','pStyle1_justify_whithoutHanging_spaceAfter');
	}

	if ($documento10 <> "") {
		$section->addListItem($documento10 . ";", 0, 'fStyle2_bold', 'listStyle','pStyle1_justify_whithoutHanging_spaceAfter');
	}

	$section->addText('Informamos a vossa senhoria que o processo nº ' . $numdoprocesso . ' só terá continuidade após a protocolização dos documentos listados. Ressalta-se que o não acatamento desta solicitação acarretará no arquivamento do processo, e que com isso a empresa estará sujeita à legislação que trata dos ilícitos ambientais, à fiscalização e às penas cabíveis e disponíveis.', 'fStyle1_normal', 'pStyle1_justify_withHanging');

	$section->addText('Legislação pertinente: Lei Municipal n° 1974/2002; Decreto Municipal n° 84/2004; Decreto Municipal n° 34/2004; Lei complementar Municipal n° 1970/2002; Lei Complementar Municipal n° 1982/2003; Decreto Federal n° 3179/1999; Art. 60 da Lei Federal n° 9605/1998; Art. 66 do Decreto Federal n° 6.514/2008; Resolução n° 237/1997 do CONAMA; Resolução n° 079/2009 do COEMA; Lei Estadual n° 7.389/2010, Lei Federal 12305/2010.', 'fStyle1_normal', 'pStyle1_justify_withHanging');

	$section->addText('Atenciosamente,', 'fStyle1_normal', 'pStyle1_justify_withHanging');

	$section->addTextBreak(1);

	$section->addText('______________________________', 'fStyle1_normal', 'pStyle4_center');

	//$lineStyle = array('weight' => 1, 'width' => 150, 'height' => 0, 'align' => 'center', 'shading');
	//$section->addLine($lineStyle);

	$section->addText('David Ramos Pereira', 'fStyle1_normal', 'pStyle4_center');
	$section->addText('Geólogo/Matrícula 28516-1/1', 'fStyle1_normal', 'pStyle4_center');


	$header = $section->addHeader();
	$header->addWatermark('C:\xampp\htdocs\Barcarena_Online-main\SEMADE-2021.jpg', array('PosHorizontalRel' => 'page', 'PosVerticalRel' => 'page', 'height' => 843, 'width' => 596.1));

	$doc_filename = "NOTIFICACAO_". date("d-m-Y"). "_" . $nomedaempresa . ".docx";

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
	// unlink($temp_file_uri); // deletes the temporary file
	exit("ok");
	        
	}else{
		echo "erro";
	}

?>