<?php
// goto_loop_counter.php
// Counts from 0 to 9 using goto statements

$counter = 0;

start_loop:
if ($counter >= 10)
    goto end_loop;
echo $counter . "\n";
$counter++;
goto start_loop;

end_loop:
?>