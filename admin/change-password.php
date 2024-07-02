<?php
require_once 'connectors/session.php';
require_once 'connectors/conn.php';
require_once 'connectors/functions.php';


//AddCategory();
if(isset($_POST["Npassword"])){
$Opassword =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Opassword'])));
$Npassword =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Npassword'])));
$Rpassword =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Rpassword'])));
//$Password= Sha1('$Npassword');
$UserId="$_SESSION[UId]";

		//if (empty($_POST['Opassword'])){
		//$OpasswordError = "<spanb>Enter old password</spanb>";
		//$errors = 1;
		//}
		if (empty($_POST['Npassword'])){
		$NpasswordError = "<spanb>Enter new password</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Rpassword'])){
		$RpasswordError = "<spanb>Enter repeat password</spanb>";
		$errors = 1;
		}
		if ($_POST['Rpassword'] != $_POST['Npassword'] AND $_POST['Rpassword'] !=null){
		$RpasswordErrorb = "<spanb>Password and repeat password do not matched!</spanb>";
		$errors = 1;
		}
		if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*]).{8,}$/", $_POST['Npassword'])){
		$spasswordError = "<spanb>Password At least 8 characters long, one uppercase letter, one lowercase letter, one digit and one special character</spanb>";
		$errors = 1;
		}
		
		
		if($errors == 0){



$upd="UPDATE user SET Password= md5('$Npassword') WHERE UserId='$UserId'";
	
	if(mysqli_query ($link, $upd)){
	
				$msg="<center><msg>Password has been changed Successfully</msg></center>";
				}else{
				$msg="<center><spanb>Error Occured not changed</spanb></center>";
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
									<h4>Change password</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Change password
										</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
	

	

					<!-- Form grid Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
						<?php echo "<center>$msg </center>";   ?>
							<div class="pull-left">
								<h4 class="text-blue h4">Change password</h4>								
							</div>
							
						</div>
						<form name="Categoryform" method="post" class="" action="" enctype="multipart/form-data">
							
							<div class="row">
								<div class="col-md-6 col-sm-12">
								<!--	<div class="form-group">
										<label>Old password<spanb>*</spanb></label>
										<input type="password" name="Opassword" class="form-control" value="<?php echo $Opassword; ?>"/>										
										<?php echo "$OpasswordError";   ?>
									</div> -->
									<div class="form-group">
										<label>New password<spanb>*</spanb></label>
										<input type="password" name="Npassword" class="form-control" value="<?php echo $Npassword; ?>" />										
										<?php echo "$NpasswordError $spasswordError";   ?>
									</div>
									<div class="form-group">
										<label>Repeat password<spanb>*</spanb></label>
										<input type="password" name="Rpassword" class="form-control" value="<?php echo $Rpassword; ?>" />
										<?php echo "$RpasswordError $RpasswordErrorb";   ?></br>										
										<button type="submit" name="Pchange"
										class="btn btn-success btn-lg btn-block">Change</button>
										<?php //echo "$RpasswordError";   ?>
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
