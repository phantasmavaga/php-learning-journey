<?php
if(!isset($_POST['head']) && !isset($_POST['description'])){
    echo '
        <form action="" method="POST">
            Article Title <br>
            <input type="text" name="title" size="45"><br>
            Article Content<br>
            <textarea name="description" rows="5" cols="45"></textarea><br>
            <input type="submit" value="Submit Article"/>
        </form>';
} else {
    // Convert ENTER (\n new line) to <br> using nl2br() function
    $description = nl2br($_POST['description']);
    echo "<h3>{$_POST['title']}</h3>";
    echo "<div>$description</div>";
}
?>
