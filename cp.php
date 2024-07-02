<?php
	//session_start();
require_once 'connectors/session.php'; 	
require_once 'connectors/conn.php';
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';


$i=0;


$start=0;
$limit=1;

if(isset($_POST['Change'])) { // Checking null values in message.
    
	//$pin = mysqli_real_escape_string ($link,$_POST['pin']);
$Npassword =  mysqli_real_escape_string  ($link,$_POST['Npassword']);
$Rpassword =  mysqli_real_escape_string  ($link,$_POST['Rpassword']);
$Password= MD5(Sha1('$Password'));
$LId="$_SESSION[LId]";
$Email="$_SESSION[Lne]";
  
		//if (empty($_POST['Opassword'])){
		//$OpasswordError = "<spanb>Enter old password</spanb>";
		//$errors = 1;
		//}
		
		
		
		if($errors == 0){



$upd=" UPDATE learner SET Password='$Password' WHERE Email='$Email' ";
	
	if(mysqli_query ($link, $upd)){
	
				$msg="<center><msg>Password has been changed Successfully</msg></center>";
				//header("location:my-courses.php?m='Password has been changed Successfully'");
				}else{
				$msg="<center><spanb>Error Occured not changed</spanb></center>";
				}				
}
}
		
?>