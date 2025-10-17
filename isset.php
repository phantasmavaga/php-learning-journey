<?php 
if(isset($_POST["email"])){
    echo $_POST["email"];

}
else {
    echo "There is not given email";
}// It does'nt matter for any conditions for "elseif (!isset)" 

?>