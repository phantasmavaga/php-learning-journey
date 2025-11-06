<?php
$name = isset($_POST['name']) ? $_POST['name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
?>
<form action="" method="post">
    <input type="text" name="name" value="<?php echo $name; ?>">:Your Name<br>
    <input type="text" name="email" value="<?php echo $email; ?>">:Email <br>
    <input type="submit" name="send" value="Send me!">
</form>
