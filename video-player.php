	<?php require_once 'connectors/session.php';?>
	<?php require_once 'connectors/conn.php'; require_once 'connectors/time-track.php';?>
	<?php
	
	if(isset($_POST["Progressa2"])){
$RefIda =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['RefIda'])));	
$updp="UPDATE enrollment SET Progress2 ='20' WHERE RefId='$RefIda' AND LId='$_SESSION[LId]'";	
	$Ex=mysqli_query ($link, $updp);
}
	?>
	<?php
if(isset($_POST["Progressa3"])){
$RefIda =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['RefIda'])));	
$updp="UPDATE enrollment SET Progress3 ='20' WHERE RefId='$RefIda' AND LId='$_SESSION[LId]'";	
	$Ex=mysqli_query ($link, $updp);
}
	
$sqle = " SELECT * FROM enrollment WHERE RefId='$_GET[RefIda]' AND LId='$_SESSION[LId]'";
	
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

$sqlr = " SELECT * FROM videos WHERE Ref='$_GET[Ref]'";	
		$resultr = mysqli_query($link, $sqlr);
		if(mysqli_num_rows($resultr)>0){
		$rowr = mysqli_fetch_array($resultr);
		$Source= $rowr[Source];
		$Url= $rowr[Url];
		}
		
		
		$sql = " SELECT * FROM course WHERE RefId='$_GET[RefIda]'";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_array($result);
		$total=mysqli_num_rows($result);
		if($rownum=mysqli_num_rows($result)){}
		$Duration="$row[Duration]";
}
}

$prog = " SELECT * FROM enrollment WHERE LId='$_SESSION[LId]' AND Status='Inprogress' AND RefId='$RefIda' ORDER BY EId DESC ";	
		if($resultp = mysqli_query($link, $prog)){
		if(mysqli_num_rows($resultp)>0){				
		$rowp = mysqli_fetch_array($resultp);
		$progess= $rowp[Progress1] + $rowp[Progress2] + $rowp[Progress3] + $rowp[Quiz];
		$progess= number_format($progess);
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
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/progressb.css">
			<style>
			.micon{
			width:16px;
			height: 16px;
			}
			.micon{
			width:18px;
			height: 18px;
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
								<?php //echo "$_GET[Fname]";?>
								Video								
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="video-player.php"> Video</a></p>
						</div>	
					</div>
				</div>
			</section>                                   -->
			<!-- End banner Area -->	</br>
				
			<!-- Start event-details Area -->
			<section class="event-details-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 event-details-left">
							<div class="main-img">
								<?php
					$Video="$_GET[VideoCode]$_GET[VideoTitle].mp4";
					echo "<h5>$_GET[Fname]</h5>";
							//if($Video !=null){
								if($Source !='Youtube'){
echo "<center><div class='video-player'><video controls autoplay><source src='admin/videoclips/$_GET[Fname]' type='video/mp4'><source src='movie.ogg' type='video.ogg'>
									Your browser doest not support the video tag. <video></div><center></br>";
								}else{									
									
echo "<center><div class='video-player'><iframe class='iframe' src='https://youtube.com/embed/$Url'></iframe></div><center></br>";
								}
									//}else{
									//echo "<center><spanb><b>Video Not Available</spanb><b><center>";
									//}

?>


<?php
									$CourseCode="$_GET[Cc]";
										 $sqlv = " SELECT * FROM videos WHERE CourseCode='$CourseCode' AND Ref !='$_GET[Ref]'";
	
		$resultv = mysqli_query($link, $sqlv);
		if(mysqli_num_rows($resultv)>0){
			//$rowv = mysqli_fetch_array($resultv);
		$totalv=mysqli_num_rows($resultv);
		if($rownumv=mysqli_num_rows($resultv)){}
									?>
	                                   <?php
										
}
										while($rowv = mysqli_fetch_array($resultv)){
										//$_SESSION['CourseCode']="$rowv[CourseCode]";
										echo"	<a style='color: green' 
												href='video-player.php?Fname=$rowv[FileName]&Cc=$rowv[CourseCode]&RefIda=$RefIda&Ref=$rowv[Ref]'
												class='list-group-item d-flex align-items-center'
												> <i class='fa fa-film'>&nbsp;&nbsp;</i>  $rowv[VideoTitle]</a
											>";
										}
										
										if($Progress2 =='' OR $Progress2 ==0){
										echo"<p>
										<form method='post' action=''>
										<input type='hidden' name='RefIda' value='$RefIda'>
										<button name='Progressa2' class='genric-btn  primary small'>Mark as Compelete</button>
										</form>										
										";
										}else{
										echo "<msg><b>Completed</b></msg>";	
										}
										
										?>
							</div>
							
	<!--						<div class="social-nav row no-gutters">
								<div class="col-lg-6 col-md-6 ">
									<ul class="focials">
										
									</ul>
								</div>
								<div class="col-lg-6 col-md-6 navs">
									<a href="course-view.php" class="nav-prev"><span class="lnr lnr-arrow-left"></span>Back</a>
									<a href="my-courses.php" class="nav-next">Goto My Courses <span class="lnr lnr-arrow-right"></span></a>									
								</div>
							</div>			-->
						</div>
											<div class="col-lg-4 right-contents">
						<?php	echo"<img class='sideimg' src='admin/thumbnail/$row[Thumbnail]' alt='$row[CourseTitle]' />"; ?>
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
										<span><?php echo "$Duration";   ?></span>
									</a>
								</li>
															
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Start Date</p>
										<span><?php echo "$SDate";   ?></span>
										
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>End Date </p>
										<?php $d=strtotime("+3 months"); ?>
										<span><?php echo "$EDate ";   ?></span>
										
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Quiz Date </p>
										<span><?php echo "$QDate ";   ?></span>
										<?php //echo date("h:i:sa");   ?>
									</a>
								</li>
							</ul>
							
							<?php
				$sqlcq = " SELECT * FROM certificate WHERE EId='$EIda' AND RefId='$RefIda' AND CourseCode='$row[CourseCode]'";	
				$resultcq = mysqli_query($link, $sqlcq);
				//$rows = mysqli_fetch_array($result);
				$totalcq=mysqli_num_rows($resultcq);
				
							?>
							
				<?php if($totalcq <=0){	echo"	<a href='lquiz.php?CourseCode=$row[CourseCode]&RefId=$RefIda&EId=$EIda' class='primary-btn text-uppercase'>Take Quiz</a>";} ?>
				<?php if($totalcq >0){	echo"	<a href='certificate/class/basic.php?CourseCode=$row[CourseCode]&RefId=$row[RefId]' class='primary-btn text-uppercase'>Download certificate</a>";} ?>
				<?php echo"<div class='skill'>
        <p>Progress</p>
        <div class='skill-bar skill1' style='width: $progess%;'>
            <span class='skill-count1'>$progess%</span>
        </div>
    </div>";
	?>
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