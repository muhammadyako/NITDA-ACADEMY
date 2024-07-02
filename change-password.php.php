	<?php
	//session_start();
require_once 'connectors/session.php'; 	
require_once 'connectors/conn.php';
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';


$i=0;


$start=0;
$limit=1;

if(isset($_POST['Change'])) { // Checking null values in message.
    
	//$pin = mysqli_real_escape_string ($link,$_POST['pin']);
$Npassword =  mysqli_real_escape_string  ($link,$_POST['Npassword']);
$Rpassword =  mysqli_real_escape_string  ($link,$_POST['Rpassword']);
$Password= "$Npassword";
$LId="$_SESSION[LId]";
$Email="$_SESSION[Lne]";
  
		//if (empty($_POST['Opassword'])){
		//$OpasswordError = "<spanb>Enter old password</spanb>";
		//$errors = 1;
		//}
		if (empty($_POST['Npassword'])){
		$NpasswordError = "<spanb>Enter new password</spanb>";
		$errors = 1;
		}
		if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@#$%^&*]).{8,}$/", $_POST['Npassword'])){
		$spasswordError = "<spanb>Password At least 8 characters long, one uppercase letter, one lowercase letter, one digit and one special character</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Rpassword'])){
		$RpasswordError = "<spanb>Enter repeat password</spanb>";
		$errors = 1;
		}
		if ($_POST['Rpassword'] != $_POST['Npassword']){
		$RpasswordErrorb = "<spanb>Password and repeat password do not matched!</spanb>";
		$errors = 1;
		}
		
		
		if($errors == 0){



$upd=" UPDATE learner SET Password= md5('$Password') WHERE Email='$Email' ";
	
	if(mysqli_query ($link, $upd)){
	
				$msg="<center><msg>Password has been changed Successfully</msg></center>";
				//header("location:my-courses.php?m='Password has been changed Successfully'");
				}else{
				$msg="<center><spanb>Error Occured not changed</spanb></center>";
				}				
}
}
		
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<?php require_once 'title.php';?>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">			
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/bottomnav.css">
			<style>
			spanb{
				color:red;
			}
			msg{
				color: green;
			}
				
			</style>
		</head>
		<body>	
		  <header id="header" id="home">
	  		<?php require_once 'header-top.php';?>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <?php require_once 'logo.php';?>
			     <?php require_once 'nav-menu.php';?><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
	  
			<!-- start banner Area -->
<!--			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Change password				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="change-password.php"> Change password</a></p>
						</div>	
					</div>
				</div>
			</section>							-->
			<!-- End banner Area -->				  

			<!-- Start contact-page Area --> </br></br></br></br>
			<section class="contact-page-area section-gap">
				<div class="container">
				<h5 class="mb-30">Change password</h5>
					<div class="row">
						
						
						<div class="col-lg-8">
						<?php echo "$msg"; ?>
							<form class="form-area contact-form text-right"  action="" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										
										<input name="Npassword" placeholder="New password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="password" value="<?php echo $Npassword; ?>">
										<?php echo "$NpasswordError $spasswordError"; ?>
										<input name="Rpassword" placeholder="Repeat password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" class="common-input mb-20 form-control" required="" type="password" value="<?php echo $Rpassword; ?>">
										<?php echo "$RpasswordError $RpasswordErrorb"; ?>
										<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button name="Change" class="genric-btn primary" style="float: right;">Change</button>											
									</div>
									</div>
									
									
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

			<!-- start footer Area -->
	<?php require_once 'bottomnav.php';?>
	<?php require_once 'footer.php'; ?>
			<!-- End footer Area -->	


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>