<?php
	session_start();
require_once 'connectors/conn.php';
//require_once 'connectors/session.php'; 
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';
if ($_SESSION['UId'] !=''){
header("location:home.php");	
}
$da= getdate();
$date= strtotime("$da[mday] $da[month] $da[year]");
$ndate= date( 'd-m-Y', $date );
$dtime= date( 'd-m-Y H:i:s' );

$i=0;


$start=0;
$limit=1;

if(isset($_POST['Login'])) { // Checking null values in message.
    
	//$pin = mysqli_real_escape_string ($link,$_POST['pin']);
//$Email =  mysqli_real_escape_string  ($link,$_POST['Email']);
//$Password =  mysqli_real_escape_string  ($link,$_POST['Password']);
$Email =  htmlspecialchars(strtolower(mysqli_real_escape_string  ($link,$_POST['Email'])));
$Password =  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['Password']));
//$Passwordb= MD5(Sha1('$Password'));
//$Passwordb= MD5('$Password');
$Passwordb= Sha1("$Password");
$c=Sha1('$Password');
$c="$c";

if (empty($_POST['Email'])){
		$emailError = "<spanb>Enter email</spanb>";
		$errors = 1;
		}
		if(!filter_var($_POST["Email"], FILTER_VALIDATE_EMAIL)){	
		$emailErrorb = "<spanb>Invalid Email format</spanb>";
		$errors = 1;
		}
		
if (empty($_POST['Password'])){
		$passwordError = "<spanb>Enter password</spanb>";
		$errors = 1;
		}

if($errors == 0){
  
	 $sql = " SELECT * FROM user WHERE Email='$Email' AND Password= md5('$Password')";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		 while($row = mysqli_fetch_array($result)){
			$_SESSION['UName']="$row[Fname] $row[Mname] $row[Sname]";
			$_SESSION['URole']="$row[Role]";
			$_SESSION['UId']="$row[UserId]";
			$_SESSION['UEmail']="$row[Email]";
			$_SESSION['UPhoneno']="$row[Phoneno]";
			header("location:home.php"); 
		 }
}else{
	
	$msg="<spanb>Wrong email Or password</spanb>";
}
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
	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="index.php">
						<img src="vendors/images/logoerr2.png" alt="" />
					</a>
				</div>
				<!--<div class="login-menu">
					<ul>
						<li><a href="register.html">Register</a></li>
					</ul>
				</div>-->
			</div>
		</div>
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="vendors/images/login-page-img.png" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Login</h2>
							</div>
							<form name="Login" method="post" action="">
								<div class="select-role">
									<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<!--					<label class="btn active">
											<input type="radio" name="options" id="admin" />
											<div class="icon">
												<img
													src="vendors/images/briefcase.svg"
													class="svg"
													alt=""
												/>
											</div>
											<span>I'm</span>
											Manager
										</label>
										<label class="btn">
											<input type="radio" name="options" id="user" />
											<div class="icon">
												<img
													src="vendors/images/person.svg"
													class="svg"
													alt=""
												/>
											</div>
											<span>I'm</span>
											Employee
										</label>     -->
									</div>
								</div>
								<div class="input-group custom">
									<input
										type="email" name="Email"
										class="form-control form-control-lg"
										placeholder="Email" value="<?php echo $Email; ?>"
									/>
									<?php echo "$emailError $emailErrorb $_SESSION[UId]"; ?>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="icon-copy dw dw-user1"></i
										></span>
									</div>
								</div>
								<div class="input-group custom">
									<input
										type="password" name="Password"
										class="form-control form-control-lg"
										 value="<?php echo $Password;?>"
									/>
									<?php echo "$passwordError $rpasswordError"; ?>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="dw dw-padlock1"></i
										></span>
									</div>
								</div>
								<div class="row pb-30">
									<div class="col-6">
										<div class="custom-control custom-checkbox">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck1"
											/>
											<label class="custom-control-label" for="customCheck1"
												>Remember</label
											>
										</div>
									</div>
									<div class="col-6">
										<div class="forgot-password">
											<a href="forgot-password.php">Forgot Password</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
											
											<button name="Login"
											class="btn btn-success btn-lg btn-block" 
											type="submit">Login</button>
										</div>
										<?php echo "<center>$msg $RpasswordError</center>"; ?>
										<div
											class="font-16 weight-600 pt-10 pb-10 text-center"
											data-color="#707373"
										>
											
										</div>
					<!--					<div class="input-group mb-0">
											<a
												class="btn btn-outline-primary btn-lg btn-block"
												href="register.html"
												>Register To Create Account</a
											>
										</div> -->
									</div>
								</div>
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
