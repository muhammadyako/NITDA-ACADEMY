	<?php //require_once 'connectors/session.php';?>
	<?php
session_start();
?>
	<?php require_once 'connectors/conn.php';?>
	<?php
	
	$sql = " SELECT * FROM category";
	
		$result = mysqli_query($link, $sql);
		$rows = mysqli_fetch_array($result);
		
		
		if(isset($_GET['CId'])){
$Category =  htmlspecialchars(strtolower(mysqli_real_escape_string  ($link,$_GET['Category'])));
$CategoryId =  htmlspecialchars(strtolower(mysqli_real_escape_string  ($link,$_GET['CId'])));
$CategoryName =  htmlspecialchars(strtolower(mysqli_real_escape_string  ($link,$_GET['CategoryName'])));



		
		$sqlc = " SELECT * FROM course WHERE CategoryId='$CategoryId'";
	
		$resultc = mysqli_query($link, $sqlc);
		//$rowsc = mysqli_fetch_array($resultc);
		if(mysqli_num_rows($resultc)<1){
			$err="<spanb>No result found</spanb>"; 
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
			<style>
			.mimg{
		width: 420px;	
		height: 150px;	
		}
		
			spanb{
				color:red;
			}
			msg{
				color: green;
			}				
			
		</style>
		  </header><!-- #header -->
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								<?php echo "$CategoryName"; ?>
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="index.php"><?php echo "$CategoryName"; ?></a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	



			<!--<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">								
								<p><form class="form-wrap" method="get" action="">
								<input class="form-control" type="text" width="500" placeholder="Search....." name="search" value="">
								<button class="primary-btn text-uppercase">Search</button>
								</form></p>
							</div>
						</div>
					</div>	-->


			<!-- Start course category Area --> 
			
			<!-- End course category Area -->

<!-- Start popular-courses Area --> 
			</br>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h4 class="mb-10"><?php echo "$CategoryName"; ?></h4>
								
							</div>
						</div>
					</div>						
					<div class="row">
					<?php while($rowc = mysqli_fetch_array($resultc)){
						$Count= "$rowc[Count]";
						$Duration="$row[Duration]";
			$CategoryId="$row[CategoryId]";
			$RefId="$row[RefId]";
							$Count = number_format($Count);
						$sqlt = " SELECT * FROM enrollment WHERE CourseCode='$rowc[CorseCode]'";	
		$resultt = mysqli_query($link, $sqlt);
						$totalt=mysqli_num_rows($resultt);
						$Provider="$rowc[Provider]";
			If($Provider=='NITDA'){
				$require="This course does not require approval to enroll";
			}else{
			$require="This course requires approval to enroll";	
			}
						echo"<div class='single-popular-carusel col-lg-3 col-md-6'>
							<div class='thumb-wrap relative'>
								<div class='thumb relative'>
									<div class='overlay overlay-bg'></div>	
									<a href='course-details.php?CourseId=$rowc[CourseId]&RefId=$rowc[RefId]'><img class='img-fluid mimg' src='admin/thumbnail/$rowc[Thumbnail]' alt=''></a>
								</div>
								<div class='meta d-flex justify-content-between'>
									<p><span class='lnr lnr-users'></span> $Count </p>
									<h4>$rowc[Duration]</h4>
								</div>									
							</div>
							<div class='details'>
								<a href='course-details.php?CourseId=$rowc[CourseId]&RefId=$rowc[RefId]'>
									<h4>
										$rowc[CourseTitle]
									</h4>
								</a>
								<a href='course-details.php?CourseId=$rowc[CourseId]&RefId=$rowc[RefId]'><button class='genric-btn primary small'>Enroll</button></a>
								<p>								
									$require <p> Offered By: $rowc[Provider]										
								</p>
								<p>
										Last updated $rowc[LastUpdated]										
									</p>
							</div>
					</div>";} ?>	
							<?php echo "$err";  ?>
					<!--<a href="#" class="primary-btn text-uppercase mx-auto">Load More Courses</a>-->													
					</div>
				</div>	
			</section></br>
			<!-- End popular-courses Area -->			

			<!-- Start search-course Area -->
		<!--	<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								Get reduced fee <br>
								during this Summer!
							</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
							</p>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#"><h4>Expert Instructors</h4></a>		
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology and power.
									</p>						
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Certification</h4></a>		
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology and power.
									</p>						
								</div>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
							<form class="form-wrap" action="#">
								<h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>		
								<input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
								<input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
								<input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
								<div class="form-select" id="service-select">
									<select>
										<option datd-display="">Choose Course</option>
										<option value="1">Course One</option>
										<option value="2">Course Two</option>
										<option value="3">Course Three</option>
										<option value="4">Course Four</option>
									</select>
								</div>									
								<button class="primary-btn text-uppercase">Submit</button>
							</form>
						</div>
					</div>
				</div>	
			</section>-->
			<!-- End search-course Area -->			

			<!-- Start upcoming-event Area -->
			
			<!-- End upcoming-event Area -->				

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