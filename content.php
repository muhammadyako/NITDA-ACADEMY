<?php
	require_once 'connectors/session.php';
	require_once 'connectors/conn.php';
	require_once 'connectors/time-track.php';
	
	if(isset($_GET['RefId'])){
$RefId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['RefId'])));
$OId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['OId'])));
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['Cc'])));
  
	 $sql = " SELECT * FROM outline WHERE RefId='$RefId'";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_array($result);
			//$Duration="$row[Duration]";
		$total=mysqli_num_rows($result);
		if($rownum=mysqli_num_rows($result)){}
}
}
}

if(isset($_GET['RefId'])){
$RefId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['RefId'])));
$CourseId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['CourseId'])));
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['CId'])));
  
	 $sqla = " SELECT * FROM course WHERE CourseCode='$_GET[Cc]'";
	
		if($resulta = mysqli_query($link, $sqla)){
		if(mysqli_num_rows($resulta)>0){
			$rowa = mysqli_fetch_array($resulta);
		$totala=mysqli_num_rows($resulta);
		if($rownum=mysqli_num_rows($resulta)){}
		$Duration="$rowa[Duration]";
}
}
}


$sqle = " SELECT * FROM enrollment WHERE CourseCode='$_GET[Cc]' AND LId='$_SESSION[LId]'";
	
		if($resulte = mysqli_query($link, $sqle)){
		if(mysqli_num_rows($resulte)>0){
			$rowe = mysqli_fetch_array($resulte);
		$totale=mysqli_num_rows($resulte);
		if($rownum=mysqli_num_rows($resulte)){}
		 $SDate="$rowe[SDate]";
		 $EDate="$rowe[EDate]";
		 $Progress1="$rowe[Progress1]";
		 $Progress2="$rowe[Progress2]";
		 $Progress3="$rowe[Progress3]";
		 $RefIda="$rowe[RefId]";
}
}
	
?>
<?php
if(isset($_POST["Progressa3"])){
$RefIda =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['RefIda'])));	
$updp="UPDATE enrollment SET Progress3 ='20' WHERE RefId='$RefIda' AND LId='$_SESSION[LId]'";	
	$Ex=mysqli_query ($link, $updp);
}
	
$sqle = " SELECT * FROM enrollment WHERE CourseCode='$_GET[Cc]' AND LId='$_SESSION[LId]'";
	
		if($resulte = mysqli_query($link, $sqle)){
		if(mysqli_num_rows($resulte)>0){
			$rowe = mysqli_fetch_array($resulte);
		$totale=mysqli_num_rows($resulte);
		if($rownum=mysqli_num_rows($resulte)){}
		 $SDate="$rowe[SDate]";
		 $EDate="$rowe[EDate]";
		  $QDate="$rowe[QDate]";
		 $Progress1="$rowe[Progress1]";
		 $Progress2="$rowe[Progress2]";
		 $Progress3="$rowe[Progress3]";
		 $RefIda="$rowe[RefId]";
		 $EIda="$rowe[EId]";
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
								Content view		
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="content.php"> Course Outline Details</a></p>
						</div>	
					</div>
				</div>
			</section>							-->
			<!-- End banner Area -->	
				
			<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 event-details-left">
							<div class="main-img">
								<!--<img class="img-fluid" src="img/event-details-img.jpg" alt=""> -->
							</div>
							<div class="details-content">
								<a href="#">
									<h4><?php echo "$row[Outline]"; ?></h4>
								</a>
								<p align='justify'>
									<?php echo "$row[Content]"; ?>									
								</p>
								<?php echo "<a href='$_SERVER[HTTP_REFERER]'><center><button class='btn btn-sm btn-secondary'>Back</button></center></a>"; ?></br>
							</div>
							
							
							<?php
									$CourseCode="$row[CourseCode]";
										 $sqlol = " SELECT * FROM outline WHERE CourseCode='$CourseCode' AND RefId !='$_GET[RefId]'";	
											$resultol = mysqli_query($link, $sqlol);
											while($rowol = mysqli_fetch_array($resultol)){
									
	                               echo "
											
												<a class='list-group-item d-flex' style='color: green' href='content.php?OId=$rowol[OId]&RefId=$rowol[RefId]&Cc=$rowol[CourseCode]'> $rowol[Outline]</a>
												
											
											"; 
											}
											if($Progress3 =='' OR $Progress3 ==0){
										echo"</br>
										<form method='post' action=''>
										<input type='hidden' name='RefIda' value='$RefIda'>
										<button name='Progressa3' class='genric-btn  primary small'>Mark as Compelete</button>
										</form>										
										";
										}else{
										echo "<msg><b>Completed</b></msg>";	
										}
											?>
						<!--	<div class="social-nav row no-gutters">
								<div class="col-lg-6 col-md-6 ">
									<ul class="focials">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
									</ul>
								</div>
								<div class="col-lg-6 col-md-6 navs">
									<a href="#" class="nav-prev"><span class="lnr lnr-arrow-left"></span>Prev Event</a>
									<a href="#" class="nav-next">Next Event<span class="lnr lnr-arrow-right"></span></a>									
								</div>
							</div> -->
						</div>
						<div class="col-lg-4 event-details-right">
							<div class="single-event-details">
								<h4>Details</h4>
								<ul class="mt-10">
									<li class="justify-content-between d-flex">									
										<span>Duration </span>
										<span><?php echo "$Duration";   ?></span>									
								</li>																
								<li class="justify-content-between d-flex">									
										<span>Start Date</span>
										<span><?php echo "$SDate";   ?></span>									
								</li>
								<li class="justify-content-between d-flex">									
										<span>End Date</span>
										<?php $d=strtotime("+3 months"); ?>
										<span><?php echo "$EDate";   ?></span>								
									
								</li>
																		
								</ul>
							</div>
																
						</div>
					</div>
				</div>	
			</section>
			<!-- End event-details Area -->
					
				
			<!-- Start cta-two Area -->
			
			<!-- End cta-two Area -->						    			

			<!-- start footer Area -->		
		<?php require_once 'bottomnav.php'; ?>
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