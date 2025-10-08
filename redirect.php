<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>header, top titles</title>
    <meta charset="utf-8">
</head>
<body>
<?php
/* This will not cause an error because the ob_start() function
   gives priority to the header() call. It will process the output last. */
header('Location: login.php');
?>
</body>
</html>
<?php ob_end_flush(); ?>
