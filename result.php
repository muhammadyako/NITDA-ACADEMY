	<?php
	require_once 'connectors/session.php'; 
require_once 'connectors/conn.php';
require_once 'connectors/dbconfig.php';

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
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Result		
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="result.php"> Result</a></p>
						</div>	
					</div>
				</div>
			</section>
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
								<?php
include 'connectors/dbconfig.php';
$fetchqry = "SELECT * FROM `quiz`";
$result=mysqli_query($con,$fetchqry);
$num=mysqli_num_rows($result);
$i=1;
for($i;$i<=$num;$i++){
@$userselected = $_POST[$i];
$fetchqry2 = "UPDATE `quiz` SET `userans`='$userselected' WHERE `id`=$i"; 
mysqli_query($con,$fetchqry2);
} 
$qry3 = "SELECT `ans`, `userans` FROM `quiz`;";
$result3 = mysqli_query($con,$qry3);
while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
    if($row3['ans']==$row3['userans']){
	 @$_SESSION['score'] += 1 ;
 }
}
 $Score = @$_SESSION['score'] * 100 / 7;
 $Score = number_format($Score);
 ?> 
 <div class="col-md-offset-2 col-md-8">
<center><h2>Result:</h2><br><br>
 <span><b>No. of Correct Answer:</b>&nbsp;<?php  echo $no = @$_SESSION['score']; 
											//var_dump($_SESSION['ids']);
 //session_unset(); ?></span><br><br>
<!-- <span><b>Your Score:</b>&nbsp<?php //if(isset($no)) echo $no*1; ?></span></br></br>-->
 <span><b>Your Score:</b>&nbsp<?php if(isset($no)) echo "$Score%"; ?></span></br></br>
 <a href="<?php echo $_SESSION['Back'];?>"><button class="genric-btn primary small">Ok</button></a></center>
</div>
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