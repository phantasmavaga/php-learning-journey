<?php
header('Content-type:application/json');
$data=array("author"=>"phantasmavaga","repo"=>"php-learning-journey");
echo json_encode($data);
?>