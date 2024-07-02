<?php
require_once 'connectors/conn.php';
class Course {
	
	function AddCategory(){
if(isset($_POST["Category"])){
$Category =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Category'])));
}
if (empty($_POST['Category'])){
		$CategoryError = "<spanb>Enter Category</spanb>";
		$errors = 1;
		}

$msg="";
$Category="";	

}
		if($errors == 0){	

$sqld = " INSERT INTO Category (CategoryName) VALUES ('$Category')";	
if(mysqli_query ($link, $sqld)){

$msg= "<center><msg>Category added Successfully!</msg></center>";
}	
}



if(isset($_POST["CategoryId"])){
$Course =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Course'])));
$CategoryId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CategoryId'])));

		if (empty($_POST['Course'])){
		$CourseError = "<spanb>Enter Course</spanb>";
		$errors = 1;
		}
		if (empty($_POST['CategoryId'])){
		$CategoryError = "<spanb>Select Category</spanb>";
		$errors = 1;
		}
}


		if($errors == 0){	

$sqlb = " INSERT INTO Course (CategoryId, Course) VALUES ('$CategoryId', '$Course')";	
if(mysqli_query ($link, $sqlb)){

$msg= "<center><msg>Course added Successfully!</msg></center>";
}	
}

}


function AddVideo(){
$msg="";
$Category="";	

if(isset($_POST["Video"])){
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


$sqlb = " INSERT INTO videos (CourseCode, VideoTitle, FileName) VALUES ('$CategoryCode', '$VideoTitle','$FileName')";	
if(mysqli_query ($link, $sqlb)){
move_uploaded_file($_FILES['VideoClip']['tmp_name'],"videoclips/$VideoTitle");
$msg= "<center><msg>Video Uploaded Successfully!</msg></center>";
}

}
}
?>