<?php
// Store submitted values
$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
$languages = isset($_POST['languages']) ? $_POST['languages'] : null;
?>

<form method="post" action="">
    <h4>Gender</h4>
    <input type="radio" <?php if($gender == "Male") echo 'checked'; ?> name="gender" value="Male"> Male
    <input type="radio" <?php if($gender == "Female") echo 'checked'; ?> name="gender" value="Female"> Female

    <h4>Languages you know</h4>

    <?php
    if(isset($languages[0]) && $languages[0] == 'German') {
        echo '<input type="checkbox" checked value="German" name="languages[0]"/> German';
    } else {
        echo '<input type="checkbox" value="German" name="languages[0]"/> German';
    }

    if(isset($languages[1]) && $languages[1] == 'English') {
        echo '<input type="checkbox" checked value="English" name="languages[1]"/> English';
    } else {
        echo '<input type="checkbox" value="English" name="languages[1]"/> English';
    }

    if(isset($languages[2]) && $languages[2] == 'French') {
        echo '<input type="checkbox" checked value="French" name="languages[2]"/> French';
    } else {
        echo '<input type="checkbox" value="French" name="languages[2]"/> French';
    }
    ?>

    <br>
    <input type="submit" value="Save">
</form>
