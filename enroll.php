<?php
require_once 'connectors/session.php';
require_once 'connectors/conn.php';

	
if(isset($_GET['RefId'])){
$RefId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['RefId'])));
$CourseId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['CourseId'])));
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['CourseCode'])));


	 $sqla = " SELECT * FROM courselimit";	
		if($resulta = mysqli_query($link, $sqla)){
		if(mysqli_num_rows($resulta)>0){		
		while($rowa = mysqli_fetch_array($resulta)){	
	$LStatus="$rowa[Status]";
	$CLimit="$rowa[CLimit]";
	//$CLimit= number_format($CLimit);
	//if($LStatus =='ON'){
		
	//}

}	
}
}
	  
	 $sql = " SELECT * FROM course WHERE RefId='$RefId'";
	
		$result = mysqli_query($link, $sql);		
			$row = mysqli_fetch_array($result);
		//$total=mysqli_num_rows($result);	
$CourseCode="$row[CourseCode]";	
$CourseId="$row[CourseId]";	
$CourseTitle="$row[CourseTitle]";
$Provider="$row[Provider]";
$Url="$row[Url]";
$CategoryId="$row[CategoryId]";
$Duration="$row[Duration]";
$RefId="$row[RefId]";
$Provider="$row[Provider]";
if($Provider !=="NITDA"){
$Status="Pending";
$Approve="Pending";	
}else{
$Status="Inprogress";
$Approve="Approved";	
}
}

$da= getdate();
$date= strtotime("$da[mday] $da[month] $da[year]");
$ndate= date( 'd-m-Y', $date );

$d=strtotime("+$Duration");
$q=strtotime("+$Duration-1 Week");
$SDate = date("d-m-Y");
$EDate = date("d-m-Y ", $d);
$QDate = date("d-m-Y ", $q);

$sqll = " SELECT * FROM learner WHERE Email='$_SESSION[Lne]'";
	
		$resultl = mysqli_query($link, $sqll);		
			$rowl = mysqli_fetch_array($resultl);
		//$total=mysqli_num_rows($result);	
$LId="$rowl[LId]";
$Email="$rowl[Email]";		
$Fname="$rowl[Fname]";
$Mname="$rowl[Mname]";
$Sname="$rowl[Sname]";
		
		$verifye = " SELECT * FROM enrollment WHERE CourseId='$CourseId' AND LId='$LId'";	
		$resulte = mysqli_query($link, $verifye);		
			$rowe = mysqli_fetch_array($resulte);
			if(mysqli_num_rows($resulte)>0){
			header("location:my-courses.php?i=You have already enrolled this course");
				$errors=1;
			}
			
		$verify = " SELECT * FROM enrollment WHERE CourseId='$CourseId' AND LId='$LId' AND Status='$Status'";	
		$resultv = mysqli_query($link, $verify);		
			$rowv = mysqli_fetch_array($resultv);
			if(mysqli_num_rows($resultv)>0){
			header("location:my-courses.php?i=You are already enrolled in this course");
				$errors=1;
			}
			$vlimit = " SELECT * FROM enrollment WHERE Status='Inprogress' AND LId='$LId'";
	
		$resultvl = mysqli_query($link, $vlimit);		
			$rowvl = mysqli_fetch_array($resultvl);
			$Courses= mysqli_num_rows($resultvl);
			//$Courses= number_format($Courses);
			//if(mysqli_num_rows($resultvl)>2){
				if($Courses >= $CLimit ){
			header("location:my-courses.php?i=Sorry, You can not have <b>more than $CLimit</b> courses Inprogress at onece");
				$errors=1;
			}


if($errors == 0){
$sqlb = " INSERT INTO enrollment (LId,Email,Fname,Sname,Mname,RefId,CategoryId,CourseCode,CourseId,CourseTitle,Provider,Url,Progress1,Progress2,Progress3,Quiz,Month,Year,SDate,EDate,QDate,Approve,Status) VALUES 
('$LId','$Email','$Fname', '$Sname','$Mname','$RefId','$CategoryId','$CourseCode','$CourseId','$CourseTitle','$Provider','$Url','0','0','0','0','$da[month]','$da[year]','$SDate','$EDate','$QDate','$Approve','$Status')";
	
if(mysqli_query ($link, $sqlb)){
	$upd="UPDATE course SET Count = Count + 1 WHERE CourseId='$CourseId'";	
	$Ex=mysqli_query ($link, $upd);

if($Provider !=="NITDA"){
$msg= "Sorry, you cannnot enroll this course by yourself but a request was sent to the Academy!";
}else{
	$msg= "Enrolled Successfully!";
}

header("location:my-courses.php?m=$msg");
}else{
$i= "An Error Occured Creating User £sqlb!";
}
}	


//echo $sqlb;
//echo $verify;
//echo "$vlimit   $Courses";
//echo $Courses;

?>