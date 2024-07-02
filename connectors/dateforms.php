<?php

$QDate= date("d-m-Y");
$Today= date("d-m-Y");

$QDateb="03-06-2024";
$QDateb= date("Y-m-d", strtotime($QDateb));


echo "$QDateb <p> $QDate <p> $Today<p>" ;

//echo $QDate;
if(strtotime($QDateb) > strtotime($Today)){
echo "Hello QDate";	
}
if(strtotime($Today) > strtotime($QDateb)){
echo "Hello Today";	
}
?>