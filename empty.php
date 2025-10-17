<?php
if(empty($_POST["username"])){
    echo "Username is not given!";
}
else{
    echo "This <b>'".$_POST["username"]."'</b>  is your username";
}
?>