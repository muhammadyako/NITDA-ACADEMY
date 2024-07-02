	<?php
	require_once 'connectors/session.php'; 
require_once 'connectors/conn.php';

//require_once 'connectors/session.php'; 
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';

$LId=$_SESSION['LId'];
  
	 $sql = " SELECT * FROM learner WHERE LId='$LId'";	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		
		//$Fname="$row[Fname]";
		//$Sname="$row[Sname]";
		//$Mname="$row[Mname]";
		//$Dob="$row[Dob]";
		//$Fname="$row[Fname]";
		
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
								Profile			
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="profile.php"> Profile</a></p>
						</div>	
					</div>
				</div>
			</section>					-->
			<!-- End banner Area -->	
				
			<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 event-details-left">
							<div class="main-img">
								<!--<img class="img-fluid" src="img/event-details-img.jpg" alt="">-->
							</div>
							<div class="details-content">
							<?php echo"<center><msg>$msg $_GET[msg]</msg></center>"; ?>
		<!--					<a href="#">
									<h4>Profile</h4>
								</a>
								<a href='profile'><button class='genric-btn primary-border medium'>Profile</button></a>   -->
								<table width="50%" border="0">
								<?php
								$row = mysqli_fetch_array($result);
								echo
								"<tr><th><h4>Profile</h4></th><td><a href='user/update-profile'><button class='genric-btn primary-border medium'>Edit</button></a></td></tr>
								<tr><th>First Name:</th><td>$row[Fname]</td></tr>
								<tr><th>Surname:</th><td>$row[Sname]</td></tr>
								<tr><th>Middle Name:</th><td>$row[Mname]</td></tr>
								<tr><th>Email:</th><td>$row[Email]</td></tr>
								<tr><th>Phone no.:</th><td>$row[PhoneNo]</td></tr>
								<tr><th>Birth Date:</th><td>$row[Dob]</td></tr>
								<tr><th>Gender:</th><td>$row[Gender]</td></tr>
								<tr><th>State:</th><td>$row[State]</td></tr>
								<tr><th>LGA:</th><td>$row[Lga]</td></tr>
								<tr><th colspan='2' align='center'><b>Educational Info</b></th></tr>
								<tr><th>Qualification:</th><td>$row[Qualification]</td></tr>
								<tr><th>Specialisation:</th><td>$row[Specialisation]</td></tr>";								
								?>
								
								
								</table>
							</div>
							<div class="social-nav row no-gutters">
								
								
							</div>
						</div>
						<div class="col-lg-4 event-details-right">
							
							
																		
						</div>
					</div>
				</div>	
			</section>
			<!-- End event-details Area -->
					
				
			<!-- Start cta-two Area -->
			
			<!-- End cta-two Area -->						    			

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