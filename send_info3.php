<?php
// Variables to remember the selections after submit
$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
$languages = isset($_POST['languages']) ? $_POST['languages'] : [];
?>

<form method="post" action="">
    <h4>Gender</h4>
    <input type="radio" <?php if($gender == "Male") echo 'checked'; ?> name="gender" value="Male"> Male
    <input type="radio" <?php if($gender == "Female") echo 'checked'; ?> name="gender" value="Female"> Female

    <h4>Languages you know</h4>
    <input type="checkbox" <?php if(isset($languages[0]) && $languages[0] == "German") echo 'checked'; ?> name="languages[0]" value="German"> German
    <input type="checkbox" <?php if(isset($languages[1]) && $languages[1] == "English") echo 'checked'; ?> name="languages[1]" value="English"> English
    <input type="checkbox" <?php if(isset($languages[2]) && $languages[2] == "French") echo 'checked'; ?> name="languages[2]" value="French"> French
    <br>
    <input type="submit" value="Save">
</form>
