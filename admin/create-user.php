<?php
require_once 'connectors/session.php';
require_once 'connectors/conn.php';
//require_once 'connectors/functions.php';


//AddCourse();
if(isset($_POST["Create"])){
$Fname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Fname'])));
$Sname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Sname'])));
$Mname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Mname'])));
$Email =  htmlspecialchars(strtolower(mysqli_real_escape_string  ($link,$_POST['Email'])));
$Fname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Fname'])));
$Phoneno =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Phoneno'])));
$Pphoneno = $_POST['Phoneno'];
$Role =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Role'])));
//$Password= MD5(Sha1('$Phoneno'));
//$Password= Sha1('$Pphoneno');
$Password= "$Phoneno";

$da= getdate();
$DateCreated="$da[mday] $da[month] $da[year]";

$sqlch = " SELECT * FROM user WHERE Email='$Email' OR Phoneno='$Phoneno'";
	
		if($resultch = mysqli_query($link, $sqlch)){
		if(mysqli_num_rows($resultch)>0){
		$total=mysqli_num_rows($resultch);
		while($row = mysqli_fetch_array($resultch)){
			$checkemail="$row[Email]";
			$checkphoneno="$row[Phoneno]";
			//$checkbvn="$row[bvn]";
			//$checkacctno="$row[acctno]";
		}
		}
		}
		
		if ($_POST['Email']== "$checkemail" AND (!empty($_POST['Email']))){
		$existemailError = "<spanb>This Email <b>$Email</b> already exists</spanb>";
		$errors = 1;
		}
		if ($_POST['Phoneno']== "$checkphoneno" AND (!empty($_POST['Phoneno']))){
		$existphoneError = "<spanb>This Phone number <b>$Phoneno</b> already exists</spanb>";
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
		if(!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL) AND (!empty($_POST['Email']))){
	
		$EmailErrorb = "<spanb>Invalid Email format</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Phoneno'])){
		$PhonenoError = "<spanb>Enter Phone Number</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Role'])){
		$RoleError = "<spanb>Select User Role</spanb>";
		$errors = 1;
		}



		if($errors == 0){	

$sql = " INSERT INTO User (Fname,Sname,Mname,Email,Phoneno,Role,Status,Password,DateCreated) VALUES 
('$Fname', '$Sname','$Mname','$Email','$Phoneno','$Role','Active',md5('$Password'),'$DateCreated')";	
if(mysqli_query ($link, $sql)){

$to = '$Email';
$subject  = 'Account craetion';
$message  = 'Your account has been created successfully your Email:$Email <p>  your Password: $Phonenno';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'FRom: no-reply@academy.nitda.gov.ng';
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

if (@mail($to, $email, $message, $headers))
    {
	$mailsmg= "<center><msg>An email has been sent to the user!</msg></center>";	
	}else{
		$mailsmg= "Not able to send an email to the user!";
	}
	$msg= "<center><msg>User Created Successfully! <p> $mailsmg</msg></center>";

}else{
$msg= "<center><spanb>An Error Occured Creating User! $sql</spanb></center>";
}	
}
}

		
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<?php require_once 'title.php';?>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="images/fav.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		

		<?php require_once 'header.php';?>
		<?php require_once 'right-sidebar.php';?>
		<?php require_once 'left-sidebar.php';?>
		

		
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Create User</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Create user
										</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
	

	

					<!-- Form grid Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<center><h4 class="text-blue h4">Create User</h4></center>								
							</div>
							</br><?php echo $msg; ?>
							
						</div>
						<form name="Categoryform" method="post" class="" action="">						
													
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>First Name<spanb>*</spanb></label>
										<input type="text" class="form-control" name="Fname" value="<?php echo $Fname; ?>" />
										<?php echo "$FnameError $FnameErrorb  ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Surname<spanb>*</spanb></label>
										<input type="text" class="form-control" name="Sname" value="<?php echo $Sname; ?>" />
										<?php echo "$SnameError $SnameErrorb  ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Middle Name</label>
										<input type="text" class="form-control" name="Mname" value="<?php echo $Mname; ?>" />
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email<spanb>*</spanb></label>
										<input type="Email" class="form-control" name="Email" value="<?php echo $Email; ?>" />
										<?php echo "$EmailError $EmailErrorb $existemailError ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Phone No.<spanb>*</spanb></label>
										<input type="number" class="form-control" name="Phoneno" value="<?php echo $Phoneno; ?>" />
										<?php echo "$PhonenoError $PhonenoErrorb $existphoneError ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Role<spanb>*</spanb></label>
										<select class="form-control" name="Role" name="Role" value="<?php echo $Role; ?>">
										<?php echo"<option value='$Role'>$Role</option>"; ?>
										<option value="Administrator">Administrator</option>
										<option value="Instructor">Instructor</option>										
										</select>
										<?php echo "$RoleError ";   ?>
									</div>
								</div>
								
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<button type="submit" name="Create"
										class="btn btn-success btn-lg btn-block">Create</button>
									</div>
								</div>
								
							</div>
							
						</form>

					</div>
					<!-- Form grid End -->

					
				<?php require_once 'footer.php'; ?>
			</div>
		</div>
		<!-- welcome modal start -->
		
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
