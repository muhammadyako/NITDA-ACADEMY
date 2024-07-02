<?php
 //require_once 'session.php'; 
//require_once 'connection.php';

$da= getdate();
$date= strtotime("$da[mday] $da[month] $da[year]");
$ndate= date( 'd-m-Y', $date );
$dat= date( 'd-m-Y H:i:s' );
$useripa = $_SERVER['REMOTE_ADDR'];
$sqlip = " SELECT * FROM userip WHERE userip='$useripa'";
	
		if($resultip = mysqli_query($link, $sqlip)){
		if(mysqli_num_rows($resultip)>0){
		$total=mysqli_num_rows($resultip);
		while($rowip = mysqli_fetch_array($resultip)){
		
		$counter= $rowip['count'];
		
		}
		}
		}
		
		if($counter >= 4){
			
			header('location: access-blocked.php');
			
		
		}	
			
		if($total==0){
			$sqladd ="INSERT INTO userip (userip,count,date) VALUES ('$useripa','0', '$dat') ";
			$add=mysqli_query ($link, $sqladd);
		}	
		
		
			
		//if($total >= 1){
			
			//$counterplus= $counter + 1;
		
			//$sqlupd ="UPDATE userip SET count='$counterplus' WHERE userip='$useripa' ";
			//$upd=mysqli_query ($link, $sqlupd);
		//}	
		
		
			
		
				
		
		//capture();
		//router();
		//echo "$counter<p>$total<p>$dat<p> $useripa<P>$sqladd";
		
		?>