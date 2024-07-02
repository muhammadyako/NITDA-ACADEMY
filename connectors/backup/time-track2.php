<?php
session_start();
if(!isset($_SESSION['Lne']) || !isset($_SESSION['Lnp'])){
header("location:user/");
}
require_once '../connectors/conn.php';
//$_SESSION['Start']= time();

function CalculateTime(){
	if(isset($_SESSION['Start'])){
		$Start= $_SESSION['Start'];
		$Current= time();
		$Spent= $Current - $Start;
		return $Spent;
	}
	//return 0;
}

$Spent= CalculateTime();
$TimeSpent= $Spent/60;
echo " $_SESSION[Start] $Spent $Current Time spent on the page is: " .$Spent. " Seconds";


 $sql = " SELECT * FROM learner WHERE LId='$_SESSION[LId]'";	
		$result = mysqli_query($link, $sql);
		if(mysqli_num_rows($result)>0){
		 $row = mysqli_fetch_array($result);
		 $Ts = $row['TimeSpent'];
		}
	$TimeSpent = ($Ts + $TimeSpent);

$upd="UPDATE learner SET TimeSpent ='$TimeSpent' WHERE LId='$_SESSION[LId]'";	
	$Ex=mysqli_query ($link, $upd);
	$_SESSION['Start']= time();
	echo "TS is:$Ts";
	
?>