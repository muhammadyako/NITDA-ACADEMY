	<?php
	 session_start();
	 require_once 'connectors/conn.php';
	 require_once 'connectors/time-track.php';
	 require_once 'connectors/visit.php';
	 
	 
	$sql = " SELECT * FROM category";
	
		$result = mysqli_query($link, $sql);
		//$rows = mysqli_fetch_array($result);
		$totalcat=mysqli_num_rows($result);
		
		$sqlc = " SELECT * FROM course ORDER BY Count DESC Limit 5";
	
		$resultc = mysqli_query($link, $sqlc);
		//$rowsc = mysqli_fetch_array($resultc);
		$totalcourses=mysqli_num_rows($resultc);
		
		$sqlt = " SELECT * FROM feedback WHERE Display='1' LIMIT 6";	
		$resultt = mysqli_query($link, $sqlt);
		//$rows = mysqli_fetch_array($result);
		$totalt=mysqli_num_rows($resultt);
	
	?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<link rel="shortcut icon" type="image/x-icon" href="img/fav.png" />
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
		<style>
		.sform{
		width: 200px;
		
		}
		.sform button{
		background-color: green;
		}
		.mimg{
		width: 420px;	
		height: 150px;	
		}
		
		</style>
		<body>	
		  <header id="header" id="home">
	  		<?php require_once 'header-top.php';?>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <?php require_once 'logo.php';?>
			      <?php require_once 'nav-menu.php';?>
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								We Build your Digital Capacity			
							</h1>
							<p class="fs-5 text-white mb-4 pb-2">The National Information Technology Development Agency (NITDA), provides a platform for Nigerians to build digital skills and capacity to make them more employable, access the benefit of the Digital Economy, and to have the requisite skills to start enterprises.</p>
							<!--<p class="pt-10 pb-10">
								In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope known as the Hubble.
							</p>-->
							<?php
							if($_SESSION['LId'] ==''){
								echo'
							<a href="user/register.php" class="primary-btn text-uppercase">Get Started</a>';
							}
							?>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>

								</div>
								<h4>Experience</h4>
								</br>
								<button class="primary-btn text-pascalercase">Enabling Transformation</button>
								<div class="desc-wrap">
									<p style="text-align: justify;">
										Learn new knowledge and skills in a variety of ways, from engaging video lectures and dynamic graphics to data visualizations and interactive elements.
									</p>
																	
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									 <i class="fa fa-3x fa-globe text-primary mb-4"></i>

								</div>
								<h4>Practice</h4>
								</br>
								<button class="primary-btn text-pascalercase">Enabling Transformation</button>
								<div class="desc-wrap">
									<p style="text-align: justify;">
										Demonstrating your knowledge is a critical part of learning. NART courses and programs provide a space to practice with quizzes, open response assessments, virtual environments, and more.
									</p>
																	
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									 <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>

								</div>
								<h4>Apply</h4>
								</br>
								<button class="primary-btn text-pascalercase">Enabling Transformation</button>
								
								<div class="desc-wrap">
									<p style="text-align: justify;">
										Learning on NART transforms how you think and what you can do, and translates directly into the real world—immediately apply your new capabilities in the context of your job.
									</p>
																	
								</div>
							</div>
						</div>										
					</div>
				</div>	
			</section>
			<!-- End feature Area -->
			
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">		<h4 class="mb-10">EXPLORE MORE COURSE CATEGORIES</h4>						
								<p><form class="form-wrap" method="get" action="search">
								<input class="form-control" type="text" width="500" placeholder="Search for a  course....." name="search" value="">
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
								<h4 class="mb-10">COURSE CATEGORIES</h4>
								
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
								<h4 class="mb-10">MOST ENROLLED COURSES</h4>
								<!--<p>There is a moment in the life of any aspiring.</p>-->
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-popular-carusel">
						<?php while($rowc = mysqli_fetch_array($resultc)){
							$Count= "$rowc[Count]";
							$Count = number_format($Count);
							$Duration="$rowc[Duration]";
			$CategoryId="$rowc[CategoryId]";
			$CouseId="$rowc[CouseId]";
			$RefId="$rowc[RefId]";
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
									<a href='course-details.php?CourseId=$rowc[CourseId]&RefId=$rowc[RefId]'><button class='genric-btn primary small'>Enroll</button></a>
									<p>
										$require <p> Offered By: $rowc[Provider]										
									</p>
									<p>
										Last updated $rowc[LastUpdated]										
									</p>
								</div>
						</div>";} ?>	
						
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
			
		
			</br></br>
			
			<!-- Start cta-one Area -->
			<section class="cta-one-area relative section-gap">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row justify-content-center">
						<div class="wrap"></br></br></br>
							<h1 class="text-white">Get Educated Online From Your Home</h1>
							<p>
							The National Information Technology Development Agency (NITDA), provides a platform for Nigerians to build digital skills and capacity to make them more employable, access the benefit of the Digital Economy, and to have the requisite skills to start enterprises.
							</p>
							<?php
							if($_SESSION['LId'] ==''){
								echo'
							<a href="user/register.php" class="primary-btn text-uppercase">Get Started</a>';
							}
							?>							
						</div>					
					</div>
				</div>	
			</section>
			<!-- End cta-one Area -->
<!-- Start blog Area --></br>
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">LATEST NEWS AND EVENTS.</h1>
								<p>From Our Blog.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b1.jpg" alt="">								
							</div>
							<p class="meta">13 December, 2023  |  By <a href="#">Abdulraheem Muhammed Etudaye</a></p>
							<a href="#">
								<h5>International Financial Corporation (IFC) And World Bank Group Courtesy Visit</h5>
							</a>
							<p>
								In furtherance of the Presidential mandate to accelerate national productivity through technological innovation, the Director General, National Information Technology Development Agency (NITDA), Kashifu Inuwa Abdullahi, received....			</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b2.jpg" alt="">								
							</div>
							<p class="meta">25 April, 2023  |  By <a href="#">S. Alkali</a></p>
							<a href="#">
								<h5>Connect The Dot’s Conference And Igniting Resilience Book Launch</h5>
							</a>
							<p>
								The Director General, National Information Technology Development Agency (NITDA), Kashifu Inuwa Abdullahi, has outlined the agency’s plan for the development of Nigeria’s IT sector with a focus on....
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>						
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b3.jpg" alt="">								
							</div>
							<p class="meta">25 June, 2024  |  By <a href="#">Radiya Nasir</a></p>
							<a href="#">
								<h5>DIGITAL LITERACY FOR ALL INITIATIVE</h5>
							</a>
							<p>
								The National Information Technology Development Agency (NITDA) is introducing the 'Digital Literacy for All' initiative, a pioneering effort aimed at bridging the digital divide, in line with President 
@officialABAT
's priority area to reform the economy to deliver sustained inclusive growth...
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b4.jpg" alt="">								
							</div>
							<p class="meta">25 July, 2024  |  By <a href="#">Devine Buhari</a></p>
							<a href="#">
								<h5>The digital era is upon us, and it is brimming with opportunities for those with tech skills.</h5>
							</a>
							<p>
								The digital era is upon us, and it is brimming with opportunities for those with tech skills.....
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>							
						</div>							
					</div>
				</div>	
			</section> 
			<!-- End blog Area -->	
				<!-- Start review Area -->
			<section class="review-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">	
				<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Leaner's feedbacks</h1>
								<p>This is what our leaners had to say.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="active-review-carusel">
						
						<?php while($rowt = mysqli_fetch_array($resultt)){
						echo"
							<div class='single-review item'>
								<div class='title justify-content-start d-flex'>
									<a href='#'><h4>$rowt[Name]</h4></a>
									<div class='star'>
										<span class='fa fa-star checked'></span>
										<span class='fa fa-star checked'></span>
										<span class='fa fa-star checked'></span>
										<span class='fa fa-star checked'></span>
										<span class='fa fa-star checked'></span>
									</div>
								</div>
								<p align='justify'>
									$rowt[Feedback]
								</p>
							</div>";
						}
						?>
																																
						</div>
					</div>
				</div>	
			</section> 
			<!-- End review Area -->		
			
		
			<!-- Start cta-two Area --></br>
			
			<!-- End cta-two Area -->
						
			<!-- start footer Area -->		
			<?php 
			if(isset($_SESSION['Lne']) AND isset($_SESSION['Lnp'])){
			require_once 'bottomnav.php';
			}
			?>
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