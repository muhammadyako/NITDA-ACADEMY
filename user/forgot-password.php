<?php
	session_start();
require_once '../connectors/conn.php';
//require_once 'connectors/session.php'; 
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';


if(isset($_POST['Reset'])) { // Checking null values in message.
    


	//$pin = mysqli_real_escape_string ($link,$_POST['pin']);
$Phoneno =  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['Phoneno']));
$Email =  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['Email']));

if (empty($_POST['Email'])){
		$EmailaError = "<spanb>Enter your email email</spanb>";
		$errors = 1;
		}
		if(!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)){	
		$EmailErrorb = "<spanb>Invalid Email format</spanb>";
		$errors = 1;
		}
		//if (empty($_POST['Phoneno'])){
		//$PhonenoError = "<spanb>Enter your phone number</spanb>";
		//$errors = 1;
		//}
		
		if($errors == 0){
	
	//$sql = " SELECT * FROM learner WHERE Email='$Email' AND Phoneno='$Phoneno' ";
	$sql = " SELECT * FROM learner WHERE Email='$Email' ";
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		
		  while($row = mysqli_fetch_array($result)){
		   $cemail="$row[Email]";
		   $Ccemail = strtolower($cemail);
		 $cusername="$row[userName]";
	}	  
	

 //$activation = md5(uniqid(rand(), true));
 //$activation =rand();
 $activation = mt_rand(100000, 999999);
 $Password= "$activation";
 $newpass="<spanb>your new password = $activation</spanb>";
$secure="ba54d";
//$activationb="$activation * $secure";


//$sqlb = " UPDATE learner SET password='$Password' WHERE Email='$Email' AND Phoneno='$Phoneno'";
$sqlb = " UPDATE learner SET password= md5('$Password') WHERE Email='$Email'";
       
if(mysqli_query ($link, $sqlb)){
	
$to = '$Ccemail';
$subject  = 'Password Reset';
 //$message = 'Your password has been reset to $activation.<p> You are strongly advised to change your password as soon as you login.';
$message="<center><msg>An email with a new password
has been sent to <b>$Ccemail</b> </msg></center>";	
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'FRom: no-reply@academy.nitda.gov.ng';
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if (@mail($to, $email, $message, $headers))
    {
	$mailsmg= "<center><msg>An email with a new password
has been sent to <b>$ccemail</b> </msg></center>";	
	}else{
		$mailsmg= "Not able to send an email to the user!";
	}
 
     $newpass="<msg>your new password=$activation</msg>";            // Flush the buffered output.
//header('location:index.php?newpass=your new password='.$activation.'');
}

}else{
$emailError="<spanb>Wrong email or phone number</spanb>";
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
				<center><?php echo "$msg $message  <p>$newpass";  ?></center>
					<h3>Reset password</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Email <spanb>*</spanb></label>
							<input type="text" name="Email" maxlength="60" class="form-control" placeholder="Your Email" value="<?php echo $Email; ?>">
							<?php echo "$EmailError <p> $EmailErrorb"; ?>	
						</div>						
					</div>
					
					
					<button data-text="Reset" name="Reset">
						<span>Reset</span>
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