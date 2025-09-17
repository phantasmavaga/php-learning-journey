<?php
$num = 1;
do {
    echo "Number: $num\n";
    $num++;
} while ($num <= 5);
$num2 = 5 ;
do {
    print "inside num=$num2\n";
} while (--$num2);//Since the 0 value is accepted as false, the condition automatically stands when it is 0.
echo "Outside num =$num2";
?>