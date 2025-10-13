<?php
if ($_POST){
echo "Username is ".$_POST["username"];
echo "<br>";
echo "<br>";

echo "Password is".$_POST["psswd"];
}
?>
<form action="print_r2.php" method="post">
    Username <input type="text" name="username">
    <br>
    <br>
    Password <input type="password" name="psswd">
    <input type="submit" value="Login">
</form>