<?php
$za = new ZipArchive();
$za->open("contentforlist.zip");

for ($i = 0; $i < $za->numFiles; $i++) {
    $stat =$za->statIndex($i);
    echo $stat["name"]."\n";
}

$za->close();
?>