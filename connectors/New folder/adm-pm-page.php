<?php
session_start();
//if(($_SESSION[usercategory]== A) || ( $_SESSION[JT]== ON AND $_SESSION[usercategory]== U)){
if($_SESSION['pmusercategory'] !='A'  ||  $_SESSION['pmusercategory'] !='A' AND $_SESSION['PM'] !='ON'){
header("location:dashboard.php");
}
?>