<?php

function AddVideo(){
include 'conn.php';
$Error=0;
$msg="";
$Category="";	

if(isset($_POST["VideoTitle"])){
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CourseCode'])));
$VideoTitle =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['VideoTitle'])));
$FileName =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['FileName'])));
$VideoTitle="$CourseCode:$VideoTitle.mp4";

if (!empty($_FILES['Video']['tmp_name'])){
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$videomime=finfo_file($finfo,$_FILES['VideoClip']['tmp_name']);
}

		if (empty($_POST['CourseCode'])){
		$CourseCodeError = "<spanb>Select Course</spanb>";
		$errors = 1;
		}
		if (empty($_POST['VideoTitle'])){
		$VideoTitleError = "<spanb>Enter the Video Title</spanb>";
		$errors = 1;
		}
		if ($videomime !=='video/mp4'){
		$mimeError = "<spanb> video MP4 format is only accepted</b></span>";
		$errors = 1;
		}
		if (empty($_FILES['VideoClip']['tmp_name'])){
		$VideoError = "<spanb>please select Video</spanb>";		
		$errors = 1;
		}
		//if ($_FILES['VideoClip']['size'] > 6002000 ){
		//$VideoErrorb = "<spanb>Video is too large <b>not larger than 6MB is accepted</b></span>";
		//$errors = 1;
		//}
		
		if($errors == 0){
$sqlb = " INSERT INTO videos (CourseCode, VideoTitle, FileName) VALUES ('$CategoryCode', '$VideoTitle','$FileName')";	
if(mysqli_query ($link, $sqlb)){
move_uploaded_file($_FILES['VideoClip']['tmp_name'],"videoclips/$VideoTitle");
$msg= "<center><msg>Video Uploaded Successfully!</msg></center>";
}
}
}
}

?>