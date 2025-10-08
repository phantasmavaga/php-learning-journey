<?php
/* In the simplest form, if the user's password from the form is correct, 
   we redirect them to the control panel. Otherwise, we redirect to the login form. */
if(isset($_POST['password']) && $_POST['password'] == '1234'){

    header("Location: control_panel.php");

}else{

    header("Location: login_form.php");

}
?>
