<?php
if(isset($_POST["courselang"]))echo "Choosen foreign lang:<br>";
foreach ($_POST["courselang"] as $key => $value) {
    echo $value."<br>";
}
?>