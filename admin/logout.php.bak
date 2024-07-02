<?php 
session_start();
require_once 'connectors/conn.php';
$update= "UPDATE adminlog SET active='0' WHERE sn='$_SESSION[uid]' ";
 $exc=mysqli_query ($link, $update);

//session_destroy();
unset($_SESSION[LId]);
unset($_SESSION[Lne]);
unset($_SESSION[Lne]);
unset($_SESSION[LName]);
header("Location:index.php");


?>