<?php
$age = 17;
if ($age == 15 || $age == 16 || $age == 17 || $age == 18) {
    echo "You’re considered a teenager now";
}
elseif ($age > 18 && $age <= 25) {
    echo "You’re on your way to adulthood";
}
elseif ($age > 25 && $age <= 30) {
    echo "You’re an adult";
}
elseif ($age > 30) {
    echo "You’re getting older";
}
else {
    echo "You’re still a child";
}
?>
