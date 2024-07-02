<?php


$start_time = microtime(true);

$a =1;

for($i=1; $i <= 1000; $i++){
$a++;
}
$send_time = microtime(true);
$execution_time = ($end_time - $start_time);

echo "Execution time of script = ".$execution_time." sec";

?>