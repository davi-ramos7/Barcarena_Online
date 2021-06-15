<?php

if(isset($_POST['campo_numNot'])){
        
        $numdanotif = $_POST['campo_numNot'];
        $numdoprocesso = $_POST['campo_numProc'];

        require_once 'C:\xampp\htdocs\Barcarena_Online-main\vendor\autoload.php';

// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

$fnew1 = array('name' => 'Times New Roman', 'size' => 12, 'color' => '1B2232', 'bold' => false);
$phpWord->addFontStyle('fStyle1_normal', $fnew1);

$pNew1_1 = array('alignment' => 'both', 'indent' => 0, 'hanging' => -1, 'spaceBefore' => 0, 'spaceAfter' =>240, 'spacing' => 0, 'lineHeight' => 1.15);

$phpWord->addParagraphStyle('pStyle1_justify_withHanging', $pNew1_1);

$section = $phpWord->addSection();

$section->addText('Solicitamos a vossa senhoria a apresentação, dentro do prazo de 30 (trinta) dias, contando do recebimento desta notificação, à Secretaria Municipal de Meio Ambiente e Desenvolvimento Econômico (SEMADE), localizada à Rodovia PA 481, Km 01, São Francisco, para fins de Regularização Ambiental, do(s) documento(s) listado(s) abaixo:', 'fStyle1_normal', 'pStyle1_justify_withHanging');


$doc_filename = "Test_Report_". date("d-m-Y").".docx";

// Save file
// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');

$temp_file_uri = tempnam('', 'anytext');
$objWriter->save($temp_file_uri);

//download code
header('Content-Description: File Transfer');
// header("Content-Type: application/docx");//header('Content-Type: application/octet-stream');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Disposition: attachment; filename='.$doc_filename);
//header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Content-Length: ' . filesize($temp_file_uri));
readfile($temp_file_uri);
unlink($temp_file_uri); // deletes the temporary file

echo "ok";

} else {
	echo "Erro";
}

// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
// $objWriter->save('Teste_Sem_Download.docx');

// echo "Sem Download";

