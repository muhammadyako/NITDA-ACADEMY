<?php
 //require_once 'session.php'; 
//require_once 'conn.php';

$da= getdate();
$date= strtotime("$da[mday] $da[month] $da[year]");
$ndate= date( 'd-m-Y', $date );
$dat= date( 'd-m-Y H:i:s' );
$useripa = $_SERVER['REMOTE_ADDR'];

$upd="UPDATE visitors SET $da[month]=$da[month]+1, Total=Total+1 WHERE Year='$da[year]'";
$link->query($upd);


?>