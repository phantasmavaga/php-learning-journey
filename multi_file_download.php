<?php
$files = array("resim.jpeg", "log.txt", "hurriyet.pdf");
$zipName = "extract.zip";
$zip = new ZipArchive;
$zip->open($zipName, ZipArchive::CREATE);
foreach ($files as $file) {
    $zip->addFile($file);
}
$zip->close();

header("Content-type: application/zip");
header("Content-disposition: attachment; filename=" . $zipName);
header("Content-Length: " . filesize($zipName)); 
readfile($zipName);
?>