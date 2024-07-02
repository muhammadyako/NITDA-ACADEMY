<?php
session_start();
if(!isset($_SESSION['UId']) || !isset($_SESSION['URole']) || !isset($_SESSION['UEmail']) || !isset($_SESSION['UName'])){
header("location:index.php");
}
?>

