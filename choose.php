<?php 
if ($_POST) {
    echo "<h4>Collected data from form</h4>";
    echo "Mail: " . $_POST["mail"] . "<br>";
    echo "Gender: " . $_POST["gender"] . "<br>";
    echo "Foreign Languages:<br>";

    if (isset($_POST["language"])) {
        foreach ($_POST["language"] as $value) {
            echo $value . "<br>";
        }
    } else {
        echo "No language selected.<br>";
    }
}
?>
