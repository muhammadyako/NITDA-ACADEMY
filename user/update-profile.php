<?php
require_once '../connectors/session.php'; 
require_once '../connectors/conn.php';
//require_once 'connectors/functions.php';


$sql = " SELECT * FROM learner WHERE LId='$_SESSION[LId]'";
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		 while($row = mysqli_fetch_array($result)){		 
		   $LId="$row[LId]";
		   $Fname="$row[Fname]";
		   $Mname="$row[Mname]";
		   $Sname="$row[Sname]";
		   $Gender="$row[Gender]";
		   $Dob="$row[Dob]";
		   $State="$row[State]";
		   $Lga="$row[Lga]";
		   $Qualification="$row[Qualification]";
		   $Specialisation="$row[Specialisation]";
		   $Email="$row[Email]";
		   $PhoneNo="$row[PhoneNo]";
		 }
		}
		}
		
		

//AddCourse();
if(isset($_POST["Update"])){
$Fname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Fname'])));
$Sname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Sname'])));
$Mname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Mname'])));
$Gender =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Gender'])));
$Dob =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Dob'])));
$Email =  htmlspecialchars(strtolower(mysqli_real_escape_string  ($link,$_POST['Email'])));
$PhoneNo =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['PhoneNo'])));
$State =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['State'])));
$Lga =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Lga'])));
$Qualification =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Qualification'])));
$Specialisation =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Specialisation'])));
$Passworda =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Password'])));
$Password =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Password'])));
$Rpassword =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Rpassword'])));
//$Password= Sha1('$Password');
$UserIp = $_SERVER['REMOTE_ADDR'];
$da= getdate();
$DateJoin="$da[mday] $da[month] $da[year]";
$VCode= mt_rand(100000, 999999);


		
		

$sqlc = " SELECT * FROM learner WHERE Email='$Email'";
		if($resultc = mysqli_query($link, $sqlc)){
		if(mysqli_num_rows($resultc)>0){
		 while($rowc = mysqli_fetch_array($resultc)){
		 
		   $Emailc="$rowc[Email]";
		  			
		 }
		}
		}
		
		$sqld = " SELECT * FROM learner WHERE PhoneNo='$PhoneNo' ";
		if($resultd = mysqli_query($link, $sqld)){
		if(mysqli_num_rows($resultd)>0){
		 while($rowd = mysqli_fetch_array($resultd)){
		 
		  // $emailc="$rowc[email]";
		   $Phonenoc="$rowd[PhoneNo]";	  	   
			
		 }
		}
		}
		
		
		
		if (($Emailc == $Email) AND ($Email !='') AND ($Email !=$_SESSION['Lne'])){
		$EEmailError = "<spanb><b>$Email </b> Already Exists</spanb>";
		$errors = 1;
		}
		if ($Phonenoc == $PhoneNo AND $PhoneNo !='' AND $Email !=$_SESSION['Lne']){
		$EPhonenoError = "<spanb><b>$Phoneno</b> Already Exists</spanb>";
		$errors = 1;
		}
		if(!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)){	
		$EmailErrorb = "<spanb>Invalid Email format</spanb>";
		$errors = 1;
		}
		
		





		if (empty($_POST['Fname'])){
		$FnameError = "<spanb>Enter First Name</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Sname'])){
		$SnameError = "<spanb>Enter Surname</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Email'])){
		$EmailError = "<spanb>Enter Email</spanb>";
		$errors = 1;
		}
		if (empty($_POST['PhoneNo'])){
		$PhonenoError = "<spanb>Enter Phone Number</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Dob'])){
		$DobError = "<spanb>Enter Birthday</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Gender'])){
		$GenderError = "<spanb>Select Gender</spanb>";
		$errors = 1;
		}
		if (empty($_POST['State']) OR $_POST['State']=='-1'){
		$StateError = "<spanb>Select state</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Lga'])){
		$LgaError = "<spanb>Select Lga</spanb>";
		$errors = 1;
		}
		
		if (empty($_POST['Qualification'])){
		$QualError = "<spanb>Select Level of Qualification</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Specialisation'])){
		$SpectError = "<spanb>Enter Specialisation</spanb>";
		$errors = 1;
		}
		//if (empty($_POST['Role'])){
		//$RoleError = "<spanb>Select User Role</spanb>";
		//$errors = 1;
		//}



		if($errors == 0){	

	$upd="UPDATE learner SET PhoneNo='$PhoneNo',Fname='$Fname',Mname='$Mname',Sname='$Sname',Dob='$Dob',Gender='$Gender',State='$State',
	Lga='$Lga',Qualification='$Qualification',Specialisation='$Specialisation' WHERE LId='$LId'";	
	$exc=mysqli_query ($link, $upd);
	header('location: ../profile?msg=Profile updated Successfully! ');
$msg= "<center><msg>Profile updated Successfully!</msg></center>";
}
}




		
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
		<script src="js/populatestate.js"></script>
	</head>

	<body>

		<div class="wrapper">
			<div class="innerb">
			<center><a href="../dashboard"><button>Back to Dashboard</button></a></center>
				<form method="post" action="">
				<center><?php echo "$msg ";  ?></center>
					<h3>Update Profile</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">First Name <spanb>*</spanb></label>
							<input type="text" maxlength="15" name="Fname" value="<?php echo $Fname; ?>" class="form-control" placeholder="Your Name">
							<?php echo "$FnameError"; ?>
						</div>
						<div class="form-wrapper">
							<label for="">Middle Name <spanb></spanb></label>
							<input type="text" maxlength="15" name="Mname" value="<?php echo $Mname; ?>" class="form-control" placeholder="Middle Name">
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Surname <spanb>*</spanb></label>
							<input type="text" maxlength="15" name="Sname" value="<?php echo $Sname; ?>" class="form-control" placeholder="Surname">
							<?php echo "$SnameError"; ?>
						</div>
						<div class="form-wrapper">
							<label for="">Birthday <spanb>*</spanb></label>
							<span class="lnr lnr-calendar-full"></span>
							<input type="text" name="Dob" value="<?php echo $Dob; ?>" class="form-control datepicker-here" data-language='en'  data-date-format="dd M yyyy" id="dp2">
							<?php echo "$DobError"; ?>
						</div>
					</div>
					<div class="form-row last">
						<div class="form-wrapper">
							<label for="">Gender <spanb>*</spanb></label>
							<select class="form-control" name="Gender">							                               
                                    <option value="<?php echo $Gender; ?>"><?php echo $Gender; ?></Option>
									<option valu="Male">Male</Option>
									<option valu="Female">Female</Option>
                                </select>
								<?php echo "$GenderError"; ?>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
						
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Email <spanb>*</spanb></label>
							<input type="text" readonly="readonly" maxlength="60" name="Email" value="<?php echo $Email; ?>" class="form-control" placeholder="Email">
							<?php echo "$EEmailError $EmailError $EmailErrorb"; ?>
						</div>
						<div class="form-wrapper">
							<label for="">Phone no. <spanb>*</spanb></label>
							<input type="text" maxlength="14" name="PhoneNo" value="<?php echo $PhoneNo; ?>" class="form-control" placeholder="Your Phone no.">
							<?php echo "$EPhonenoError $PhonenoError"; ?>
						</div>
					</div>
					
					<div class="form-row last">
						<div class="form-wrapper">
							<label for="">State <spanb>*</spanb></label>
							<select class="form-control" id="state" name="State">                                    
                                     <option value="<?php echo $State; ?>"><?php echo $State; ?></Option>
									<option ><?php echo $State; ?></Option>
                                </select>
								<?php echo "$StateError"; ?>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
						<div class="form-wrapper">
							<label for="">Lga <spanb>*</spanb></label>
							<select class="form-control" id="lga" name="Lga">
								<option value="">Select</Option>
                                </select>
								<?php echo "$LgaError"; ?>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
					<div class="form-row last">
						<div class="form-wrapper">
							<label for="">Qualification<spanb> *</spanb></label>
							<select class="form-control" name="Qualification">
							                                     
                                    <option value="<?php echo $Qualification; ?>"><?php echo $Qualification; ?></Option>
									<option value="PhD">PhD</Option>
									<option value="Masters">Masters</Option>
									<option value="Degree">Degree</Option>
									<option value="HND">HND</Option>
									<option value="NCE">NCE</Option>
									<option value="ND">ND</Option>
									<option value="OND">OND</Option>
									<option value="Secondary">Secondary</Option>
									<option value="Primary">Primary</Option>
                                </select>
								<?php echo "$QualError"; ?>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
						<div class="form-wrapper">
							<label for="">Specialisation <spanb>*</spanb></label>
							<input type="text" maxlength="60" name="Specialisation" value="<?php echo $Specialisation; ?>" class="form-control" placeholder="Enter N/A if Primary or secondary">
							<?php echo "$SpecError $SpecErrorb"; ?>
						</div>
					</div>
					
			<!--		<div class="checkbox">
						<label>
							<input type="checkbox"> I agree to the terms and conditions.
							<span class="checkmark"></span>
						</label>
					</div>     -->
					<button name="Update" data-text="Update">
						<span>Update</span>
					</button></br>
					
				</form>
			</div>
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
		<script src="js/global.js"></script>
	<script src="js/populatestate.js"></script>
	<script language="javascript">
	populateStates("state", "lga"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	populateStates("country2");
	populateStates("country2");
</script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>