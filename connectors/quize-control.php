<?php
//require_once 'conn.php';
$da= getdate();
		$date= strtotime("$da[mday] $da[month] $da[year]");
		$ndate= date( 'd-m-Y', $date );

		$d=strtotime("+$Duration");
		$q=strtotime("+$Duration-1 Week");
		$today = date("Y-m-d");
		$EDate = date("d-m-Y ", $d);
		$QDate = date("d-m-Y ", $q);
	
		$qd = " SELECT * FROM enrollment WHERE EId='$_GET[EId]' AND RefId='$_GET[RefId]' AND CourseCode='$_GET[CourseCode]'";	
		$resultqd = mysqli_query($link, $qd);
		$rowqd = mysqli_fetch_array($resultqd);
		$totalqd=mysqli_num_rows($resultqd);
		$QDateb="$rowqd[QDate]";
		$QDateb= date("Y-m-d", strtotime($QDateb));
		if(strtotime($QDateb) > strtotime($today)){
		header("location:course-view?CId=$CourseCode&RefId=$RefId&err=Your quiz comes up on $rowqd[QDate].");	
		}
		if($rowqd[QDate]==="Done"){
		header("location:course-view?CId=$CourseCode&RefId=$RefId&msg=You have already taken and passed the quiz.");	
		}
		//echo "$QDateb <p> $today <p>$qd";	
		?>