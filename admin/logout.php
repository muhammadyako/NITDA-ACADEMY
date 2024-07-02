<?php 
session_start();
require_once 'connectors/conn.php';
$update= "UPDATE adminlog SET active='0' WHERE sn='$_SESSION[uid]' ";
 $exc=mysqli_query ($link, $update);

//session_destroy();
unset($_SESSION[URole]);
unset($_SESSION[UId]);
unset($_SESSION[UEmail]);
unset($_SESSION[UName]);
unset($_SESSION[UPhoneno]);
header("Location:index.php");


?>