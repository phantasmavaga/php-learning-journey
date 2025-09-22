<?php
header("Content-type: application/pdf");
header('Content-Disposition:attachment;filename="hurriyet.pdf"');
readfile("hurriyet.pdf");
?>