<?php
	session_start();
require_once '../connectors/conn.php';
//require_once 'connectors/session.php'; 
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';
if ($_SESSION['LId'] !='' AND $_SESSION['Lne'] !='' AND (!isset($_SESSION['VEmail']))){
header("location:../dashboard.php"); 	
}

$i=0;


$start=0;
$limit=1;

$d=strtotime("+$Duration");
$dls=strtotime("+2 month");
$SDate = date("d-m-y");
$EDate = date("d-m-y ", $d);
$Ls = date("d-m-y H:i");
//$Ls = date("d-m-y H:i", $dls);

if(isset($_POST['Email'])) { // Checking null values in message.
    
	//$pin = mysqli_real_escape_string ($link,$_POST['pin']);
$Email =  mysqli_real_escape_string  ($link,$_POST['Email']);
$Password =  mysqli_real_escape_string  ($link,$_POST['Password']);
$Passworda =  mysqli_real_escape_string  ($link,$_POST['Password']);



//$Password= Sha1('$Password');
$UserIp = $_SERVER['REMOTE_ADDR'];
$da= getdate();
$DateJoin="$da[mday] $da[month] $da[year]";



		if (empty($_POST['Email'])){
		$EmailError = "<spanb>Enter Email</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Password'])){
		$PasswordError = "<spanb>Enter Password</spanb>";
		$errors = 1;
		}
		

		if($errors == 0){
  
	 $sql = " SELECT * FROM learner WHERE Email='$Email' AND Password= md5('$Password') ";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		 while($row = mysqli_fetch_array($result)){
			 $VCode="$row[VCode]";
			 if($VCode !=0){
			$_SESSION['VEmail']="$row[Email]";
			header("location:verify.php?Email=$VCode");	 
			 }			 
			
			$_SESSION['LId']="$row[LId]";
			$_SESSION['Lne']="$row[Email]";
			$_SESSION['Lnp']="$row[PhoneNo]";
			$_SESSION['LFname']="$row[Fname]";
			$_SESSION['LMname']="$row[Mname]";
			$_SESSION['LSname']="$row[Sname]";
			$_SESSION['LName']="$row[Fname] $row[Mname] $row[Sname]";
			$_SESSION['LastSeen']="$row[LastSeen]";
			$_SESSION['Start']= time();
			
			$upd= "UPDATE learner SET LastSeen='$Ls' WHERE Email='$Email'";
			$ex=mysqli_query ($link, $upd);
			header("location:../dashboard.php"); 
		 }
}else{
$msg="<center><spanb>Wrong Email or password $VCode</spanb></center></br>";	
}
}
		}
}
	//echo $sql;
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
				<center><?php echo "$msg $VCode";  ?></center>
					<h3>Login</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Email <spanb>*</spanb></label>
							<input type="text" maxlength="60" name="Email" value="<?php echo $Email; ?>" class="form-control" placeholder="Your Email">
							<?php echo "$EmailError"; ?>
						</div>
						<div class="form-wrapper">
							<label for="">Password <spanb>*</spanb></label>
							<input type="password" name="Password" value="<?php echo $Password; ?>" class="form-control" placeholder="Password">
							<?php echo "$PasswordError"; ?>
						</div>
					</div>
					
					
					<button data-text="Login">
						<span>Login</span>
					</button></br>
					<div class="checkbox">
						<label>
							<al><a href="forgot-password.php">Forgot password</a></al>
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