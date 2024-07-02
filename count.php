<?php
require_once 'connectors/conn.php';

$da= getdate();
$DateJoin="$da[mday] $da[month] $da[year]";

		$sql1 = " SELECT * FROM enrollment WHERE Month='January' AND Year='$da[year]'";	
		$result1 = mysqli_query($link, $sql1);
		//$rows = mysqli_fetch_array($result);
		$January=mysqli_num_rows($result1);
		
		$sql2 = " SELECT * FROM enrollment WHERE Month='February' AND Year='$da[year]'";	
		$result2 = mysqli_query($link, $sql2);
		//$rows = mysqli_fetch_array($result);
		$February=mysqli_num_rows($result2);
		
		$sql3 = " SELECT * FROM enrollment WHERE Month='March' AND Year='$da[year]'";	
		$result3 = mysqli_query($link, $sql3);
		//$rows = mysqli_fetch_array($result);
		$March=mysqli_num_rows($result3);
		
		$sql4 = " SELECT * FROM enrollment WHERE Month='April' AND Year='$da[year]'";	
		$result4 = mysqli_query($link, $sql4);
		//$rows = mysqli_fetch_array($result);
		$April=mysqli_num_rows($result4);
		
		$sql5 = " SELECT * FROM enrollment WHERE Month='May' AND Year='$da[year]'";	
		$result5 = mysqli_query($link, $sql5);
		//$rows = mysqli_fetch_array($result);
		$May=mysqli_num_rows($result5);
		
		$sql6 = " SELECT * FROM enrollment WHERE Month='June' AND Year='$da[year]'";	
		$result6 = mysqli_query($link, $sql6);
		//$rows = mysqli_fetch_array($result);
		$June=mysqli_num_rows($result6);
		
		$sql7 = " SELECT * FROM enrollment WHERE Month='July' AND Year='$da[year]'";	
		$result7 = mysqli_query($link, $sql7);
		//$rows = mysqli_fetch_array($result);
		$July=mysqli_num_rows($result7);
		
		$sql8 = " SELECT * FROM enrollment WHERE Month='August' AND Year='$da[year]'";	
		$result8= mysqli_query($link, $sql8);
		//$rows = mysqli_fetch_array($result);
		$August=mysqli_num_rows($result8);
		
		$sql9 = " SELECT * FROM enrollment WHERE Month='September' AND Year='$da[year]'";	
		$result9 = mysqli_query($link, $sql9);
		//$rows = mysqli_fetch_array($result);
		$September=mysqli_num_rows($result9);
		
		$sql10 = " SELECT * FROM enrollment WHERE Month='June' AND Year='$da[year]'";	
		$result10 = mysqli_query($link, $sql10);
		//$rows = mysqli_fetch_array($result);
		$October=mysqli_num_rows($result10);
		
		$sql11 = " SELECT * FROM enrollment WHERE Month='Nobember' AND Year='$da[year]'";	
		$result11 = mysqli_query($link, $sql11);
		//$rows = mysqli_fetch_array($result);
		$Nobember=mysqli_num_rows($result11);
		
		$sql12 = " SELECT * FROM enrollment WHERE Month='December' AND Year='$da[year]'";	
		$result12 = mysqli_query($link, $sql12);
		//$rows = mysqli_fetch_array($result);
		$December=mysqli_num_rows($result12);
		
		echo "$January, $February, $March, $April, $May, $June, $July, $August, $September, $October, $Nobember, $December";
		

?>