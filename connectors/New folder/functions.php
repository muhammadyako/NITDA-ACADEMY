<?php
include 'connectors/conn.php';
//class Course {
	
	function AddCategory(){
		include 'connectors/conn.php';
if(isset($_POST["Category"])){
$Category =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Category'])));
}
if (empty($_POST['Category'])){
		$CategoryError = "<spanb>Enter Category</spanb>";
		$errors = 1;
		}

//$msg="";
//$Category="";	


		if($errors == 0){	

$sqld = " INSERT INTO Category (CategoryName) VALUES ('$Category')";	
if(mysqli_query ($link, $sqld)){

$msg= "<center><msg>Category added Successfully!</msg></center>";
}	
}
}



function AddCourse(){
	include 'connectors/conn.php';
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
//}



?>