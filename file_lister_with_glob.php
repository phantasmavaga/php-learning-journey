<?php
$listallphpfiles=glob("*");
foreach ($listallphpfiles as $file) {
    echo "file: $file\n";
}
?>