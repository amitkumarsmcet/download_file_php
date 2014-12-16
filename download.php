<?php
$file_name = $_GET['file'];

$filePath = "./files/".$file_name;
$fileName = explode("/", $filePath);
$fileName = array_reverse($fileName);

$content_type = mime_content_type ($filePath);
ob_clean();
header("Cache-Control: public");
header("Content-Description: File Transfer");
header('Content-Type: '.$content_type);			
header('Content-Length: '.filesize( $filePath ));
header('Content-Disposition: attachment;filename="'.$fileName[0].'"');
header("Content-Transfer-Encoding: binary");
echo file_get_contents($filePath);
die;
exit;
?>