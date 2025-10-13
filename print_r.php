<?php
if($_POST) print_r($_POST);
?>
<form action="print_r.php" method="post">
    Username <input type="text" name="username">
    Password <input type="password" name="psswd">
    <input type="submit" value="Login">
</form>