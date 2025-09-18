<?php
header("Content-type: image/png");
$im=imagecreate(130,30);
$bgColor=imagecolorallocate($im,255,255,255);
$textColor=imagecolorallocate($im,0,0,255);
imagestring($im,5,0,0,"PHP Journey",$textColor);
imagepng($im);
?>