	<?php //require_once 'connectors/session.php';?>
	<?php
session_start();
?>
	<?php require_once 'connectors/conn.php';?>
	<?php require_once 'connectors/time-track.php';?>
	<?php
	if(isset($_GET['RefId'])){
$RefId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['RefId'])));
$CourseId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['CourseId'])));
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['CourseCode'])));
  
	 $sql = " SELECT * FROM course WHERE RefId='$RefId'";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_array($result);
			$Duration="$row[Duration]";
			$CategoryId="$row[CategoryId]";
			$RefId="$row[RefId]";
		$total=mysqli_num_rows($result);
		if($rownum=mysqli_num_rows($result)){}
}
}
}

//$sqlct = " SELECT * FROM category WHERE RefId='$RefId'";
	
		//if($resultct = mysqli_query($link, $sqlct)){
		//if(mysqli_num_rows($resultct)>0){
			//$rowct = mysqli_fetch_array($resultct);
			//$CategoryId="$rowct[CategoryId]";
		//}
		//}
	
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
<!--			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								<?php //echo "$row[CourseTitle]"; ?>	
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="course-details.php"> <?php echo "$row[CourseTitle]"; ?></a></p>
						</div>	
					</div>
				</div>
			</section>        				-->
			<!-- End banner Area -->	

			<!-- Start course-details Area -->				</br></br></br></br>
			<section class="course-details-area pt-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 left-contents">
							<div class="main-image">
								<?php	echo"<img class='mimgc' src='admin/thumbnail/$row[Thumbnail]' alt='$row[CourseTitle]' />"; ?>
							</div>
							<h3><?php echo $row[CourseTitle]; ?></h3>
							<div class="jq-tab-wrapper" id="horizontalTab">
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Eligibility</div>
	                                <div class="jq-tab-title" data-tab="2">Course Overview</div>	                                
	                            </div>
								
	                            <div class="jq-tab-content-wrapper">
	                                <div class="jq-tab-content active" data-tab="1">
	                                     <p align="justify"><?php echo $row[Eligibility]; ?></p>
										<br>
										<br>
	                                   
	                                </div>
	                                <div class="jq-tab-content" data-tab="2">
	                                   <p align="justify"><?php echo $row[Description]; ?></p>  
	                                </div>
	                             	                                                           
	                            </div>
	                        </div>
						</div>
						<div class="col-lg-4 right-contents">
							<ul>
								<!--<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Trainer’s Name</p> 
										<span class="or">George Mathews</span>
									</a>
								</li>-->
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Duration </p>
										<span>3 Months</span>
									</a>
								</li>														
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Start Date</p>
										<span><?php echo date("d-m-y");   ?></span>
										
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>End Date </p>
										<?php $d=strtotime("+$Duration"); ?>
										<span><?php echo date("d-m-y ", $d);   ?></span>
										
									</a>
								</li>								
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Offered By: </p>
										<span><?php echo $row['Provider'];   ?></span>
										<?php //echo date("h:i:sa");   ?>
									</a>
								</li>
							</ul>
				<?php	echo"	<a href='enroll.php?CourseCode=$row[CourseCode]&RefId=$row[RefId]' class='primary-btn text-uppercase'>Enroll the course</a>"; ?>
						</div>
					</div>
				</div>	
			</section>
			<!-- End course-details Area -->
			

			<!-- Start popular-courses Area --> 
			<section class="popular-courses-area section-gap courses-page">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h5 class="mb-10">Related Courses</h5>
								
							</div>
						</div>
					</div>						
					<div class="row">
					<?php
					$sqlc = " SELECT * FROM course WHERE CategoryId='$CategoryId' AND CourseId !='$CourseId'  ORDER BY CourseId DESC LIMIT 4";
	
		$resultc = mysqli_query($link, $sqlc);
		//$rowsc = mysqli_fetch_array($resultc);
		if(mysqli_num_rows($resultc)<1){
			$err="<spanb>No record found</spanb>"; 
		}
		
					while($rowc = mysqli_fetch_array($resultc)){
						$Count= "$rowc[Count]";
							$Count = number_format($Count);
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
									<h4>Free</h4>
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
					
						<?php echo "<center>$err</center>"; ?>
						</br>					
																		
					</div>
					<!--<a href="#" class="primary-btn text-uppercase mx-auto">Load More Courses</a>-->	
				</div>	
			</section>
			<!-- End popular-courses Area -->					

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