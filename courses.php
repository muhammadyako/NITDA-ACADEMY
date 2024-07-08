	<?php //require_once 'connectors/session.php';?>
	<?php session_start();?>
	
	<?php require_once 'connectors/conn.php';?>
	<?php require_once 'connectors/time-track.php';?>
	<?php
	
	$sql = " SELECT * FROM category";
	
		$result = mysqli_query($link, $sql);
		//$rows = mysqli_fetch_array($result);
		$totalcat=mysqli_num_rows($result);
		
		$sqlc = " SELECT * FROM course";
	
		$resultc = mysqli_query($link, $sqlc);
		$rowsc = mysqli_fetch_array($resultc);
		$totalcourses=mysqli_num_rows($resultc);
	
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
								Courses		
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="courses.php">Courses</a></p>
						</div>	
					</div>
				</div>
			</section>                                       -->
			<!-- End banner Area -->	

			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">								
								<p><form class="form-wrap" method="get" action="search.php">
								<input class="form-control" type="text" width="500" placeholder="Search for a course....." name="search" value="">
</br>
								<button class="primary-btn text-uppercase">Search</button>
								</form></p>
							</div>
						</div>
					</div>	
					<!--</section>-->
					
					<!-- Start course category Area --> 
			
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h4 class="mb-10">Course Categories</h4>
								
							</div>
						</div>
					</div>						
					<div class="row">
					<?php while($row = mysqli_fetch_array($result)){
						echo"<div class='single-popular-carusel col-lg-3 col-md-6'>
							<div class='thumb-wrap relative'>
								<div class='thumb relative'>
									<div class='overlay overlay-bg'></div>	
									<a href='category-details.php?CId=$row[CategoryId]&CategoryName=$row[CategoryName]'><img class='img-fluid mimg' src='admin/catthumbnail/$row[Thumbnail]' alt=''></a>
								</div>
								<div class='meta d-flex justify-content-between'>
									<p>$row[CategoryName]</p>
									<h4></h4>
								</div>									
							</div>
							<div class='details'>
								<a class='genric-btn primary small' href='category-details.php?CId=$row[CategoryId]&CategoryName=$row[CategoryName]'>
									Open Category
								</a><p></p>
								
							</div>
					</div>"; } ?>	
									
																			
					</div>
					<?php //echo"</br><a href='#' class='primary-btn text-uppercase mx-auto'>Load More Courses</a>"; ?>
				</div>	
			</section>
			<!-- End course category Area -->

<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h4 class="mb-10">Popular Courses</h4>
								<!--<p>There is a moment in the life of any aspiring.</p>-->
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-popular-carusel">
						<?php while($rowc = mysqli_fetch_array($resultc)){
							$Count= "$rowc[Count]";
							$Count = number_format($Count);
							$Duration="$row[Duration]";
			$CategoryId="$row[CategoryId]";
			$RefId="$row[RefId]";
			$Provider="$rowc[Provider]";
			If($Provider=='NITDA'){
				$require="This course does not require approval to enroll";
			}else{
			$require="This course requires approval to enroll";	
			}
						echo"
							<div class='single-popular-carusel'>
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
									<a class='genric-btn primary small' href='course-details.php?CourseId=$rowc[CourseId]&RefId=$rowc[RefId]'><button class='genric-btn primary small'>Enroll</button></a>
									<p>
										$require <p> Offered By: $rowc[Provider]										
									</p>
									<p>
									Last updated $rowc[LastUpdated]										
									</p>
								</div>
						</div>";} ?>	
						<!--	<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p2.jpg" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn React js beginners
										</h4>
									</a>
									<p>
										When television was young, there was a hugely popular show based on the still popular fictional characte										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p3.jpg" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn Photography
										</h4>
									</a>
									<p>
										When television was young, there was a hugely popular show based on the still popular fictional characte										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p4.jpg" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn Surveying
										</h4>
									</a>
									<p>
										When television was young, there was a hugely popular show based on the still popular fictional characte										
									</p>
								</div>
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p1.jpg" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn Designing
										</h4>
									</a>
									<p>
										When television was young, there was a hugely popular show based on the still popular fictional characte										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p2.jpg" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn React js beginners
										</h4>
									</a>
									<p>
										When television was young, there was a hugely popular show based on the still popular fictional characte										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p3.jpg" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn Photography
										</h4>
									</a>
									<p>
										When television was young, there was a hugely popular show based on the still popular fictional characte										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p4.jpg" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble"></span>35</p>
										<h4>$150</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn Surveying
										</h4>
									</a>
									<p>
										When television was young, there was a hugely popular show based on the still popular fictional characte										
									</p>
								</div>
							</div>	-->						
						</div>
					</div>
				</div>	
			</section>
			<!-- End popular-course Area -->
			
			
			<!-- Start search-course Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h3 class="text-white">
								Our Six Competence Areas You Need to Know!
							</h3>
							
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<h4>Devices & Software </h4></a>		
															
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<h4>Information & Data Literacy</h4></a>		
															
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<h4>Communication & Collaboration</h4></a>		
															
								</div>
								
							</div>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<h4>Digital Content Creation</h4></a>		
															
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<h4>Safety</h4></a>		
															
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<h4>Problem Solving</h4></a>		
															
								</div>
								
							</div>
							
						</div>
						<?php require_once 'search-profile.php'; ?>
					</div>
				</div>	
			</section>
			<!-- End search-course Area -->
			

			<!-- Start upcoming-event Area -->
			
			<!-- End upcoming-event Area -->				

			<!-- Start cta-two Area -->
			</br>
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