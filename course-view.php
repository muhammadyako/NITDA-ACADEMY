	<?php require_once 'connectors/session.php';?>
	<?php require_once 'connectors/conn.php';?>
	<?php require_once 'connectors/time-track.php';?>
	<?php require_once 'connectors/unsetquiz.php';?>
	<?php
	unset($_SESSION['Back']);
	
	if(isset($_POST["Progressa1"])){
$RefIda =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['RefIda'])));	
$updp="UPDATE enrollment SET Progress1 ='20' WHERE RefId='$RefIda' AND LId='$_SESSION[LId]'";	
	$Ex=mysqli_query ($link, $updp);
}

if(isset($_POST["Progressa2"])){
$RefIda =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['RefIda'])));	
$updp="UPDATE enrollment SET Progress2 ='20' WHERE RefId='$RefIda' AND LId='$_SESSION[LId]'";	
	$Ex=mysqli_query ($link, $updp);
}

if(isset($_POST["Progressa3"])){
$RefIda =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['RefIda'])));	
$updp="UPDATE enrollment SET Progress3 ='20' WHERE RefId='$RefIda' AND LId='$_SESSION[LId]'";	
	$Ex=mysqli_query ($link, $updp);
}
	
	
	if(isset($_GET['RefId'])){
$RefId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['RefId'])));
$CourseId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['CourseId'])));
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['CId'])));
  
	 $sql = " SELECT * FROM course WHERE RefId='$RefId'";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_array($result);
		$total=mysqli_num_rows($result);
		if($rownum=mysqli_num_rows($result)){}
		$Duration="$row[Duration]";
}
}
}


 $sqle = " SELECT * FROM enrollment WHERE RefId='$RefId' AND LId='$_SESSION[LId]'";
	
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
		 $Step="$rowe[Step]";
		 if($Step == 0){
			$upd="UPDATE enrollment SET Step='1' WHERE RefId='$RefId' AND LId='$_SESSION[LId]'";	
	$exc=mysqli_query ($link, $upd); 
		 }
}
}
	
?>

<?php
if(isset($_POST["LId"])){
$LId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['LId'])));
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CourseCode'])));
$Name =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Name'])));
$View =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['View'])));
$Feedback=  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['Feedback']));
$AddedBy =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CourseCode'])));

//$RefId=time();
$da= getdate();
$Date="$da[mday] $da[month] $da[year]";

$sql = " INSERT INTO feedback (LId,CourseCode,Name,View,Feedback,Date,Display,Dorder) VALUES 
('$LId','$CourseCode', '$Name','$View','$Feedback','$Date','','')";
$excf=mysqli_query ($link, $sql);
if(mysqli_num_rows($result)>0){
$msg="<msg>Your feedback sent successfully!</msg>";	
}else{
$msg="<spanb>Your feedback not sent!</span>";	
}




//echo $sql;
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
			<link rel="stylesheet" href="css/sidenav.css">
			<link rel="stylesheet" href="css/bottomnav.css">
			<link rel="stylesheet" href="css/progressb.css">
			<style>
			spanb{
			color: red;
			}
			msg{
			color: green;
			}
			.micon{
			width:16px;
			height: 16px;
			}
			.miconb{
			width:16px;
			height: 16px;
			}
			
			.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  margin: 5px;
}
.activeb, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}
.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.panel li a {  
  color: green;
}
.panel li a:hover {  
  color: red;
}

.pan  {  
  color: green;
}
.pan:hover {  
  color: red;
}
.mimgc{
		width: 100%;	
		height: 350px;	
		}
		
		.sideimg{
		width: 100%;	
		height: 150px;	
		}

			</style>
			<style>
* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
width: 20%;
  padding: 15px;
  margin: 5px;
  text-align: center;
  background-color:#ffc;
  height: 70px; /* Should be removed. Only for demonstration */
}
.column p  {
color: green;	
}

.columnh {
  float: left;
  width: 100%;
  padding: 15px;
  margin: 5px;
  text-align: center;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.dccontainer {
  float: left;
  border-style: ridge ;
  border-color: gray;
  border-width: 2px;
  margin: 5px;
  width: 100%;
  
}

.dcolumnb {
  float: left;
  width: 100%;
  padding: 15px;
  margin: 0px;
  text-align: center;
  background-color:#fff;
  /*height: 160px; */ /* Should be removed. Only for demonstration */
}

.dccontainerb {
	padding: 15px;
  float: left;
  background-color: trasferent;
  border-style: none ;
  border-color: gray;
  border-width: 0.2px;
  margin: 5px;
  width: 100%;
  
}
.dccontainerb a {
	font-family: cursive;
color: green;
display: block;	
}

.dccontainerb a:hover {
color: red;
text-decoration: underline;
}

.chead {
color: gray;
font-family: Lato, "Noto Sans", sans-serif !important;
font-size: 14px;
font-weight: 700 !important;
line-height: 20px !important;
padding: 10px; 	
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
   .dcolumnb {
    width: 100%;
  }
}
</style>
<style> 
		.dcolumnb p { 
			font-size: 16px; 
		} 

		.pcontainerb { 
			background-color: rgb(192, 192, 192); 
			width: 100%; 
			border-radius: 15px; 
		} 

		.skillb { 
			background-color: rgb(116, 194, 92); 
			color: white; 
			padding: 1%; 
			text-align: right; 
			font-size: 20px; 
			border-radius: 15px; 
		} 

		.html { 
			width: 60%; 
		} 

		.php { 
			width: 60%; 
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
								<?php echo "$row[CourseTitle]"; ?>	
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="course-details.php"> <?php echo "$row[CourseTitle]"; ?></a></p>
						</div>	
					</div>
				</div>
			</section>  								-->                             
			<!-- End banner Area -->	

			<!-- Start course-details Area -->				</br></br></br></br>
			<section class="course-details-area pt-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 left-contents">
						<?php echo "<center>$msg</center>"; ?>
						<?php echo "<center><spanb>$_GET[err]</spanb></center>"; ?>
						<?php echo "<center><msg>$_GET[msg]</msg></center>"; ?>						
							<div class="main-image">
								
							</div>
							<h5><?php echo $row[CourseTitle]; ?></h5>							
							<div class="jq-tab-wrapper" id="horizontalTab">							
	                            <div class="jq-tab-menu">
	                                <div class="jq-tab-title active" data-tab="1">Contents</div>
	                                <div class="jq-tab-title" data-tab="2">Objectives</div>
	                                <div class="jq-tab-title" data-tab="3">Reviews</div>
	                            </div>
	                            <div class="jq-tab-content-wrapper">
								
								<div class="jq-tab-content active" data-tab="1">
											<div class='dccontainerb'>
											<center><h4>Contents</h4></center></br>
											<?php
											$CourseCode="$row[CourseCode]";
										 $sqlol = " SELECT * FROM outline WHERE CourseCode='$CourseCode'";	
											$resultol = mysqli_query($link, $sqlol);
											$totalol=mysqli_num_rows($resultol);
											if($totalol > 0){
											if(mysqli_num_rows($resultol)>0){
											
											}else{
										$outline="<spanb>Course Outline not available yet! mark it as complete</spanb>";	
												}
												echo "<div class='chead'>Course outline</div>";
											while($rowol = mysqli_fetch_array($resultol)){
									
	                               echo "	
											<a class='list-group-item d-flex align-items-center' href='content.php?OId=$rowol[OId]&RefId=$rowol[RefId]&Cc=$rowol[CourseCode]&RefIda=$RefIda'>$rowol[Outline]</a>
											";
											}
											echo "$outline</br>";
											if($Progress3 =='' OR $Progress3 ==0){
										echo"
										<form method='post' action=''>
										<input type='hidden' name='RefIda' value='$RefIda'>
										<button name='Progressa3' class='genric-btn  primary small'>Mark as Compelete</button>
										</form>										
										";
										}else{
										echo "<msg><b>Completed</b></msg>";	
										}
											}
											?>
											
											
											
											
											<?php
											$CourseCode="$row[CourseCode]";
										 $sqlc = " SELECT * FROM ebook WHERE CourseCode='$CourseCode'";	
											$resultc = mysqli_query($link, $sqlc);
											$totalc=mysqli_num_rows($resultc);
											if($totalc > 0){
											if(mysqli_num_rows($resultc)>0){
											
											}else{
										$ebook="<spanb>E-book not available yet! mark it as complete</spanb>";	
}										
										echo "<div class='chead'>Course materials</div>";
										while($rowc = mysqli_fetch_array($resultc)){
										
										echo"			
														<a href='admin/courseware/$rowc[FileName]' class='list-group-item d-flex align-items-center'
															><img class='micon' src='admin/images/pdf.png'>&nbsp; $rowc[EbookTitle]</a
														>";
										}
										echo "$ebook </br>";
										if($Progress1 =='' OR $Progress1 ==0){
										echo"
										<form method='post' action=''>
										<input type='hidden' name='RefIda' value='$RefIda'>
										<button name='Progressa1' class='genric-btn  primary small'>Mark as Compelete</button>
										</form>										
										";
										}else{
										echo "<msg><b>Completed</b></msg>";	
										}
											}
											?>
											
											
											
											
											
											
											<?php
											$CourseCode="$row[CourseCode]";
										 $sqlv = " SELECT * FROM videos WHERE CourseCode='$CourseCode'";	
											$resultv = mysqli_query($link, $sqlv);
											$totalv=mysqli_num_rows($resultv);
											if($totalv > 0){
											if(mysqli_num_rows($resultv)>0){
											
											}else{
										$video="<spanb>Videos not available yet! mark it as complete</spanb>";	
												}
												echo "<div class='chead'>Video series</div>";
											while($rowv = mysqli_fetch_array($resultv)){
									
	                               echo"									   
											<a 
												href='video-player.php?Fname=$rowv[FileName]&Cc=$rowv[CourseCode]&RefIda=$RefIda&Ref=$rowv[Ref]'
												class='list-group-item d-flex align-items-center'
												> <i class='fa fa-film'>&nbsp;&nbsp;</i>  $rowv[VideoTitle]</a
											>";
										}
										echo "$video</br>";
										if($Progress2 =='' OR $Progress2 ==0){
										echo"
										<form method='post' action=''>
										<input type='hidden' name='RefIda' value='$RefIda'>
										<button name='Progressa2' class='genric-btn  primary small'>Mark as Compelete</button>
										</form>										
										";
										}else{
										echo "<msg><b>Completed</b></msg>";	
										}
											}
											?>
									
											
											</div>
											</div>
											
											
											
	                                <div class="jq-tab-content" data-tab="2">
	                                   <p align='justify'> <?php echo $row[Description]; ?></p>
										<br>
										<br>
	                                   
	                                </div>                      

														
																			
											
	
	                                <div class="jq-tab-content" data-tab="3">
										<form method="post" action="">									
	                                	<div class="review-top row pt-40">
	                                		<div class="col-lg-3">
	                                			<div class="avg-review">
	                                				Average <br>
	                                				<span>5.0</span> <br>
	                                				(3 Ratings)
	                                			</div>
	                                		</div>
	                                		<div class="col-lg-9">
	                                			<h4 class="mb-20">Provide Your Rating</h4>
	                                			<div class="d-flex flex-row reviews">
	                                				<span>Quality</span>
													<div class="star">
														<i class="fa fa-star checked"></i>
														<i class="fa fa-star checked"></i>
														<i class="fa fa-star checked"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
	                                				<span>Outstanding</span>
	                                			</div>
	                                			<div class="d-flex flex-row reviews">
	                                				<span>Puncuality</span>
													<div class="star">
														<i class="fa fa-star checked"></i>
														<i class="fa fa-star checked"></i>
														<i class="fa fa-star checked"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
	                                				<span>Outstanding</span>
	                                			</div>
	                                			<div class="d-flex flex-row reviews">
	                                				<span>Quality</span>
													<div class="star">
														<i class="fa fa-star checked"></i>
														<i class="fa fa-star checked"></i>
														<i class="fa fa-star checked"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
	                                				<span>Outstanding</span>
	                                			</div>
	                                		</div>
	                                	</div>
	                                	<div class="feedeback">
										<h4 class="pb-20">How satisfied were you with our Service?</h4>
										<input type="hidden" id="LId"
										name="LId" value="<?php echo $_SESSION[LId];?>">
										<input type="hidden" id="CourseCode"
										name="CourseCode" value="<?php echo $CourseCode;?>"> 
										<input type="hidden" id="Name"
										name="Name" value="<?php echo $_SESSION[LName];?>"> 

			 <ul class="agile_info_select">
				 <li><input type="radio" name="View" value="Excellent" id="excellent" required> 
				 	  <label for="Excellent">Excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="View" value="Very Good" id="very good"> 
					  <label for="Very Good">Very Good</label>
				      <div class="check w3ls"></div>
				 </li>
				  <li><input type="radio" name="View" value="Good" id="good"> 
					  <label for="Good"> Good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="View" value="Neutral" id="neutral">
					 <label for="Neutral">Neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="View" value="Poor" id="poor"> 
					  <label for="Poor">Poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
	                                		<h4 class="pb-20">Your Feedback</h4>											
	                                		<textarea name="Feedback" class="form-control" cols="10" rows="10"></textarea>
	                                		<button type="submit" class="mt-20 primary-btn text-right text-uppercase">Submit</button>
	                                	</div>
						             
										</form>	                                	
	                                </div> 





<!--<button class='accordion'>Course Outline</button>
<div class='panel'>
  <p><?php
									$CourseCode="$row[CourseCode]";
										 $sqlol = " SELECT * FROM outline WHERE CourseCode='$CourseCode'";	
											$resultol = mysqli_query($link, $sqlol);
											if(mysqli_num_rows($resultol)>0){
											
											}else{
$outline="<spanb>Course Outline not available yet! mark it as complete</spanb>";	
}
											while($rowol = mysqli_fetch_array($resultol)){
									
	                               echo "
											<li class='justify-content-between d-flex'>
												<p><a  href='content.php?OId=$rowol[OId]&RefId=$rowol[RefId]&Cc=$rowol[CourseCode]&RefIda=$RefIda'>$rowol[Outline]</a></p>
												<a  href='content.php?OId=$rowol[OId]&RefId=$rowol[RefId]&Cc=$rowol[CourseCode]'>Read more</a>
											</li>
											"; 
											} 
											echo "$outline</br>";
											if($Progress3 =='' OR $Progress3 ==0){
										echo"
										<form method='post' action=''>
										<input type='hidden' name='RefIda' value='$RefIda'>
										<button name='Progressa3' class='genric-btn  primary small'>Mark as Compelete</button>
										</form>										
										";
										}else{
										echo "<msg><b>Completed</b></msg>";	
										}
											?></p>
</div>
<button class='accordion'>Course Material</button>
<div class='panel'>
  <p><?php
									 $sqlc = " SELECT * FROM ebook WHERE CourseCode='$CourseCode'";
	
		$resultc = mysqli_query($link, $sqlc);
		if(mysqli_num_rows($resultc)>0){
			//$rowc = mysqli_fetch_array($resultc);
		$totalc=mysqli_num_rows($resultc);
		if($rownumc=mysqli_num_rows($resultc)){}
									?>
	                                   <?php
										
}else{
$ebook="<spanb>E-book not available yet! mark it as complete</spanb>";	
}
										while($rowc = mysqli_fetch_array($resultc)){
										
										echo"
														<a href='admin/courseware/$rowc[FileName]'
															><img class='micon' src='admin/images/pdf.png'> $rowc[EbookTitle]</a
														><p></br>";
										}
										echo "$ebook </br>";
										if($Progress1 =='' OR $Progress1 ==0){
										echo"
										<form method='post' action=''>
										<input type='hidden' name='RefIda' value='$RefIda'>
										<button name='Progressa1' class='genric-btn  primary small'>Mark as Compelete</button>
										</form>										
										";
										}else{
										echo "<msg><b>Completed</b></msg>";	
										}
											?></p>
</div>
<button class='accordion'>Course Videos</button>
<div class='panel'>
  <p><?php
									$CourseCode="$row[CourseCode]";
										 $sqlv = " SELECT * FROM videos WHERE CourseCode='$CourseCode'";
	
		$resultv = mysqli_query($link, $sqlv);
		if(mysqli_num_rows($resultv)>0){
			//$rowv = mysqli_fetch_array($resultv);
		$totalv=mysqli_num_rows($resultv);
		if($rownumv=mysqli_num_rows($resultv)){}
									?>
	                                   <?php
										
}else{
$video="<spanb>Videos not available yet! mark it as complete</spanb>";	
}
										while($rowv = mysqli_fetch_array($resultv)){
										//$_SESSION['CourseCode']="$rowv[CourseCode]";
										echo"	<a 
												href='video-player.php?Fname=$rowv[FileName]&Cc=$rowv[CourseCode]&RefIda=$RefIda&Ref=$rowv[Ref]'
												class='list-group-item d-flex align-items-center justify-content-between pan'
												><img class='miconb' src='admin/images/video.png'>$rowv[VideoTitle]</a
											>";
										}
										echo "$video</br>";
										if($Progress2 =='' OR $Progress2 ==0){
										echo"
										<form method='post' action=''>
										<input type='hidden' name='RefIda' value='$RefIda'>
										<button name='Progressa2' class='genric-btn  primary small'>Mark as Compelete</button>
										</form>										
										";
										}else{
										echo "<msg><b>Completed</b></msg>";	
										}
											?></p>
</div></p>   -->
<?php
$prog = " SELECT * FROM enrollment WHERE LId='$_SESSION[LId]' AND Status='Inprogress' AND RefId='$RefIda' ORDER BY EId DESC ";	
		if($resultp = mysqli_query($link, $prog)){
		if(mysqli_num_rows($resultp)>0){				
		$rowp = mysqli_fetch_array($resultp);
		$progess= $rowp[Progress1] + $rowp[Progress2] + $rowp[Progress3] + $rowp[Quiz];
		$progess= number_format($progess);
		}
		}
		
echo "<div class='dcolumnb'>
		<p>Progress</p> 
	<div class=pcontainerb> 
		<div class='skillb' style='width: $progess%'>$progess%</div> 
	</div> 
		</div>";
		?></p>
<script>
var acc = document.getElementsByClassName('accordion');
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener('click', function() {
    this.classList.toggle('activeb');
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + 'px';
    } 
  });
}
</script>


									
	                            </div>
	                        </div>
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
			<!-- End course-details Area -->
			

			<!-- Start popular-courses Area --> 
			<section class="popular-courses-area section-gap courses-page">
				<div class="container">
									
					<div class="row">
						
						
						
											
<!--						<a href="my-courses.php" class="primary-btn text-uppercase mx-auto">Back to my courses</a>				-->												
					</div>
				</div>	
			</section>
			<!-- End popular-courses Area -->					

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