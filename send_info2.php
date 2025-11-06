<?php
$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
$male = $gender == "Male" ? 'checked' : null;
$female = $gender == "Female" ? 'checked' : null;

$language = isset($_POST['language']) ? $_POST['language'] : null;
$german = isset($language[0]) && ($language[0] == "German") ? 'checked' : null;
$english = isset($language[1]) && ($language[1] == "English") ? 'checked' : null;
$french = isset($language[2]) && ($language[2] == "French") ? 'checked' : null;
?>

<form method="post" action="">
    <h4>Gender</h4>
    <input type="radio" <?= $male ?> value="Male" name="gender">Male
    <input type="radio" <?= $female ?> value="Female" name="gender">Female

    <h4>Languages you know</h4>
    <input type="checkbox" <?= $german ?> value="German" name="language[0]">German
    <input type="checkbox" <?= $english ?> value="English" name="language[1]">English
    <input type="checkbox" <?= $french ?> value="French" name="language[2]">French
    <br><input type="submit" value='Save'>
</form>
