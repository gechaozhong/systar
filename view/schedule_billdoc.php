<?php
require 'plugin/PHPWord/PHPWord.php';
model('document');

$PHPWord = new PHPWord();

$section = $PHPWord->createSection();

//$document = $PHPWord->loadTemplate('plugin/PHPWord/Examples/Template.docx');

$PHPWord->addTableStyle('schedule_billdoc',array('borderSize'=>1,'borderColor'=>'333','cellMargin'=>100));

$table = $section->addTable('schedule_billdoc');

foreach($table_array as $line_name=>$line){
	$table->addRow();
	foreach($line as $cell_name=>$cell){
		$table->addCell(1750)->addText(strip_tags($cell['html']));
	}
}

// Save File
$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$filename=iconv('utf-8','gbk',$_SESSION['username']).$_G['timestamp'];
$objWriter->save('temp/'.$filename);

document_exportHead($filename);

$path='temp/'.$filename;

readfile($path);
unlink($path);
exit;
?>