<?php

require_once 'connectors/conn.php';
//require_once 'connectors-cnn/auto.php';
//require_once 'connectors-cnn/youin.php';
$newpass="";
if(isset($_POST['reset'])) { // Checking null values in message.
    


	//$pin = mysqli_real_escape_string ($link,$_POST['pin']);
$Phonenumber =  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['Phonenumber']));
$Email =  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['Email']));

if (empty($_POST['Email'])){
		$emailError = "<spanb>Enter your email</spanb>";
		$errors = 1;
		}
		if(!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL) AND $_POST["Email"] !=null){	
		$emailErrorb = "<spanb>Invalid Email format</spanb>";
		$errors = 1;
		}
		//if (empty($_POST['phonenumber'])){
		//$phoneError = "<spanb>Enter phonenumber</spanb>";
		//$errors = 1;
		//}
		
		if($errors == 0){
	
	$sql = " SELECT * FROM user WHERE Email='$Email' OR Phoneno='$Email' ";
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		
		  while($row = mysqli_fetch_array($result)){
		   $cemail="$row[Email]";
		 $cusername="$row[userName]";
	}	  
	
$ccemail = strtolower($cemail);
 //$activation = md5(uniqid(rand(), true));
  //$Gnp =rand();
  //$Newpassword="$Gnp";
  
  $Gnp = mt_rand(100000, 999999);
  $Newpassword="$Gnp";
  
 $newpass="<spanb>your new password=$Gnp</spanb>";
$secure="ba54d";
//$activationb="$activation * $secure";


$sqlb = " UPDATE user SET Password= md5('$Newpassword') WHERE email='$cemail' OR phoneno='$Email'";
       
if(mysqli_query ($link, $sqlb)){
	
	
	$to = '$Ccemail';
$subject  = 'Password Reset';
 $message = 'Your password has been reset to $Newpassword.<p> You are strongly advised to change your password as soon as you login.';
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


    $newpass="<msg>your new password=$Newpassword</msg>";            // Flush the buffered output.
//header('location:index.php?newpass=your new password='.$activation.'');
}

}else{
$msg="<spanb>Email not found </spanb>";
}
	}

}
		} 



//echo "$sqlb";

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
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="index.php">
						<img src="vendors/images/logoerr2.png" alt="" />
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="index.php">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6">
						<img src="vendors/images/login-page-img.png" alt="" />
					</div>
					<div class="col-md-6">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
							<?php echo "<center>$mailsmg <p> $newpass<center>"; ?>
								<h2 class="text-center text-primary">Forgot Password</h2>
							</div>
							<h6 class="mb-20">
								Enter your email address to reset your password
							</h6>							
							<form method="post" action="">
								<div class="input-group custom">
									<input
										type="email" name="Email"
										class="form-control form-control-lg"
										placeholder="Email" value="<?php echo $Email; ?>"
									/>
									<?php echo "$emailError $emailErrorb"; ?>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="fa fa-envelope-o" aria-hidden="true"></i
										></span>
									</div>
								</div>
								<div class="row align-items-center">
									<div class="col-5">
										<div class="input-group mb-0">
											<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
										-->
											<button name="reset"
											class="btn btn-success btn-lg btn-block" 
											type="submit">Reset</button>
										</div>										
									</div>
									<div class="col-2">
										<div
											class="font-16 weight-600 text-center"
											data-color="#707373"
										>
											OR
										</div>
									</div>
									<div class="col-5">
										<div class="input-group mb-0">
											<a
												class="btn btn-outline-primary btn-lg btn-block"
												href="index.php"
												>Login</a
											>
										</div>
									</div>
								</div></br>
								<?php echo "<center>$msg </center>"; ?>
							</form>
						</div>
					</div>
				</div>
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
