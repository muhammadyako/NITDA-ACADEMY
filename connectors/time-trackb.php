<?php
session_start();
if(!isset($_SESSION['Lne']) || !isset($_SESSION['Lnp'])){
header("location:user/");
}
//require_once '../connectors/conn.php';
//$_SESSION['Start']= time();

$da= getdate();
$DateJoin="$da[mday] $da[month] $da[year]";
$Month= "$da[month]";
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
$TimeSpent= ($Spent / 60);
//echo " $_SESSION[Start] $Spent $Current Time spent on the page is: " .$Spent. " Seconds";


 $sql = " SELECT * FROM learner WHERE LId='$_SESSION[LId]'";	
		$result = mysqli_query($link, $sql);
		if(mysqli_num_rows($result)>0){
		 $row = mysqli_fetch_array($result);
		 $Ts = $row['TimeSpent'];
		}
	$TimeSpent = ($Ts + $TimeSpent);
	
	
	$sqla = " SELECT * FROM activity WHERE Year='$da[year]'";	
		$resulta = mysqli_query($link, $sqla);
		if(mysqli_num_rows($resulta)>0){
		 $rowa = mysqli_fetch_array($resulta);
		 $Tsb = $rowa[$Month];
		 $month = $rowa[$Month];
		 $Totala = $rowa['Total'];
		}
	$TimeSpentb = $Tsb + $TimeSpent;
	$Total = $Totala + $TimeSpent;
	

$upd="UPDATE learner SET TimeSpent ='$TimeSpent' WHERE LId='$_SESSION[LId]'";	
	$Ex=mysqli_query ($link, $upd);
	
 	$updb="UPDATE activity SET $da[month] ='$TimeSpentb',Total ='$Total' WHERE Year='$da[year]'";	
	$Exb=mysqli_query ($link, $updb);
	
	unset($_SESSION[Start]);
	$TimeSpentb="";
	$Total="";
	//$_SESSION['Start']= time();
	
	//echo "TS is: $Spent  $TimeSpent $sqla";
	
?>