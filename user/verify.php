<?php
	session_start();
require_once '../connectors/conn.php';
//require_once 'connectors/session.php'; 
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';
if (!isset($_SESSION['VEmail'])){
header("location:index.php"); 	
}

$msg=$_GET['msg'];
$Code=$_GET['Code'];
$VEmail=$_GET['Email'];

if(isset($_POST['Verify'])) { // Checking null values in message.
    


	//$pin = mysqli_real_escape_string ($link,$_POST['pin']);
unset($_SESSION['msg']);
unset($_SESSION['VCode']);
unset($_SESSION['VEmail']);
$msg="";
$VCode =  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['VCode']));
$VEmail =  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['VEmail']));
//$VEmail =  $_SESSION['VEmail'];
$Ls = date("d-m-y H:i");

		if (empty($_POST['VCode'])){
		$VCodeError = "<spanb>Enter the Verification code</spanb>";
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
	$sql = " SELECT * FROM learner WHERE Email='$VEmail' AND VCode='$VCode' ";
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		
		  while($row = mysqli_fetch_array($result)){
		   $cemail="$row[Email]";
		 $cusername="$row[userName]";
		 
			$_SESSION['LId']="$row[LId]";
			$_SESSION['Lne']="$row[Email]";
			$_SESSION['Lnp']="$row[PhoneNo]";
			$_SESSION['LFname']="$row[Fname]";
			$_SESSION['LMname']="$row[Mname]";
			$_SESSION['LSname']="$row[Sname]";
			$_SESSION['LName']="$row[Fname] $row[Mname] $row[Sname]";
			$_SESSION['LastSeen']="$row[LastSeen]";
			$_SESSION['Start']= time();
	}	  
	
$Ccemail = strtolower($cemail);
 //$activation = md5(uniqid(rand(), true));
 $activation =rand();
 $Password= "$activation";
 $newpass="<spanb>your new password=$activation</spanb>";
$secure="ba54d";
//$activationb="$activation * $secure";


//$sqlb = " UPDATE learner SET password='$Password' WHERE Email='$Email' AND Phoneno='$Phoneno'";
$sqlb = " UPDATE learner SET VCode='0', LastSeen='$Ls'  WHERE Email='$VEmail' AND VCode='$VCode'";
       
if(mysqli_query ($link, $sqlb)){
unset($_SESSION['VEmail']);
unset($_SESSION['VCode']);	
$to = '$Ccemail';
$subject  = 'Email verification';
 $message = 'Your email has been verified successfully.';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'FRom: no-reply@academy.nitda.gov.ng';
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if (@mail($to, $email, $message, $headers))
    {
	header("location:../dashboard.php");	
	}else{
		//$mailsmg= "Not able to send an email to the user!";
		header("location:../dashboard");
	} 
     $newpass="<msg>your new password=$activation</msg>";            // Flush the buffered output.
	 header('../location:dashboard.php');
//header('location:index.php?newpass=your new password='.$activation.'');
}

}else{
$VCodeErrorc="<spanb>Wrong verification code</spanb>";
}
	}

}
} 



if(isset($_GET['Rsc'])) {
	$VEmail=$_GET['Email'];

$sqlrc = " SELECT * FROM learner WHERE Email='$VEmail' AND VCode !='0' ";
		if($resultrc = mysqli_query($link, $sqlrc)){
		if(mysqli_num_rows($resultrc)>0){
		
		  while($rowrc = mysqli_fetch_array($resultrc)){
		   $RVCode="$row[VCode]";
		   $RVEmail="$row[Email]";
		   $to = $RVEmail;
		   if($RVEmail ==0){
			header('location:index.php?msg=Account veried already!');   
		   }
		  }
		  
		  $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'FRom: no-reply@academy.nitda.gov.ng';
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if (@mail($to, $email, $message, $headers))
    {
	$mailsmg= "<center><msg>verification code resent <b>Successfully</b> </msg></center>";	
	}else{
		$mailsmg= "Not able to resend!";
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
				<center><?php echo "$msg $mailsmg<p>$Code";  ?></center>
					<h3>Verification</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Verification Code <spanb>*</spanb></label>
							<input type="hidden" name="VEmail" class="form-control" placeholder="Verification email" value="<?php echo $VEmail; ?>">
							<input type="number" name="VCode" maxlength="6" class="form-control" placeholder="Verification code" value="<?php echo $VCode; ?>">
							<?php echo "$VCodeError <p>$VCodeErrorc $EmailErrorb"; ?>	
						</div>						
					</div>
					
					
					<button data-text="Verify" name="Verify">
						<span>Verify</span>
					</button></br>
					<div class="checkbox">
						<label>
							<al><a href="<?php echo "$_SER[HTTP_SELF]?Rsc=125414&VEmail=$VEmail"; ?>">Resend code</a></br><a href="index.php">Login</a></al>
							<ar><a href="register.php">Register</a></ar>
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