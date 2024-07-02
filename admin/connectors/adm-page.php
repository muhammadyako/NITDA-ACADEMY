<?php
session_start();
if($_SESSION['pmusercategory'] !='A'){
header("location:dashboard.php");
}
?>