<?php
	session_start();
require_once '../connectors/conn.php';
//require_once 'connectors/session.php'; 
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';


if(isset($_POST['Find'])) { // Checking null values in message.
    


	//$pin = mysqli_real_escape_string ($link,$_POST['pin']);
$PhoneNo =  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['PhoneNo']));
$State =  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['State']));

		if (empty($_POST['PhoneNo'])){
		$PhoneNoError = "<spanb>Enter your phone no</spanb>";
		$errors = 1;
		}
		if (empty($_POST['State'])){
		$StateError = "<spanb>Enter your State</spanb>";
		$errors = 1;
		}
		//if(!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)){	
		//$EmailErrorb = "<spanb>Invalid Email format</spanb>";
		//$errors = 1;
		//}
		//if (empty($_POST['Phoneno'])){
		//$PhonenoError = "<spanb>Enter your phone number</spanb>";
		//$errors = 1;
		//}
		
		if($errors == 0){
	
	//$sql = " SELECT * FROM learner WHERE Email='$Email' AND Phoneno='$Phoneno' ";
	$sql = " SELECT * FROM learner WHERE PhoneNo='$PhoneNo' AND State='$State' ";
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		
		  while($row = mysqli_fetch_array($result)){
		   $YEmail="$row[Email]";		   
		 
	}
	$YEmail="$YEmail";
		}else{
			$Err="Incorrect phone number or State!";
			}
		
		}
		}
}		
	

 


//echo "$sqlb";

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>NITDA ACADEMY</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
			<center><a href="../"><button>Back to Home</button></a></center>
				<form method="post" action="">
				<center><?php echo "<b>$YEmail</b><spanb>$Err</spanb>";  ?></center>
					<h3>Find my Email</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Phone number <spanb>*</spanb></label>
							<input type="text" name="PhoneNo" maxlength="60" class="form-control" placeholder="Your Phone no." value="<?php echo $PhoneNo; ?>">
							<?php echo "$PhoneNoError <p> $PhoeNoErrorb"; ?>	
						</div>
							<div class="form-wrapper">
							<label for="">State <spanb>*</spanb></label>
							<input type="text" name="State" maxlength="60" class="form-control" placeholder="Your State. e.g Abia" value="<?php echo $State; ?>">
							<?php echo "$StateError <p> $StateErrorb"; ?>	
						</div>							
					</div>
					
					
					<button data-text="Find" name="Find">
						<span>Find</span>
					</button></br>
					<div class="checkbox">
						<label>
							<al><a href="index">Login</a></al>
							<ar><a href="register">Register</a></ar>
						</label>
					</div>
				</form>
			</div>
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>