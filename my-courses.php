	<?php
	require_once 'connectors/session.php'; 
require_once 'connectors/conn.php';
require_once 'connectors/time-track.php';
require_once 'connectors/visit.php';
require_once 'connectors/unsetquiz.php';
//require_once 'connectors/session.php'; 
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';

$LId=$_SESSION['LId'];
  
	 $sql = " SELECT * FROM enrollment WHERE LId='$LId' ORDER BY EId DESC ";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		$total=mysqli_num_rows($result);
		$total= number_format($total);		
		//$row = mysqli_fetch_array($result);
		
}else{
$record="<center><spanb>No record found! Click on below button to enroll a course </br><a href='courses'><buuton class='genric-btn primary small'>Enroll a course</buuton></a></spanb></center>";	
}
}
		$sqlt = " SELECT * FROM enrollment WHERE LId='$LId' ORDER BY EId DESC ";	
		$resultt = mysqli_query($link, $sqlt);		
		$totalc=mysqli_num_rows($resultt);
		$totalc= number_format($totalc);
		
		$sqlx = " SELECT * FROM enrollment WHERE LId='$LId' AND Status='Inprogress' ORDER BY EId DESC ";	
		$resultx = mysqli_query($link, $sqlx);		
		$tprogress=mysqli_num_rows($resultx);
		$tprogress= number_format($tprogress);
		
		$sqly = " SELECT * FROM enrollment WHERE LId='$LId' AND Status='Pending' ORDER BY EId DESC ";	
		$resulty = mysqli_query($link, $sqly);		
		$tpending=mysqli_num_rows($resulty);
		$tpending= number_format($tpending);
		
		$sqlz = " SELECT * FROM enrollment WHERE LId='$LId' AND Status='Completed' ORDER BY EId DESC ";	
		$resultz = mysqli_query($link, $sqlz);		
		$tcompleted=mysqli_num_rows($resultz);
		$tcompleted= number_format($tcompleted);
	
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
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/progressb.css">
			<style type="text/css">
		
		
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
			margin-bottom: 20px;
		}
		table, th, td {
		   border: 0px solid #bbb;
		   text-align: left;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		th {
			background-color: #ddd;
		}
		th,td {
			padding: 5px;
		}
		button {
			cursor: pointer;
		}
		/*Initial style sort*/
		.tablemanager th.sorterHeader {
			cursor: pointer;
		}
		.tablemanager th.sorterHeader:after {
			content: " \f0dc";
			font-family: "FontAwesome";
		}
		/*Style sort desc*/
		.tablemanager th.sortingDesc:after {
			content: " \f0dd";
			font-family: "FontAwesome";
		}
		/*Style sort asc*/
		.tablemanager th.sortingAsc:after {
			content: " \f0de";
			font-family: "FontAwesome";
		}
		/*Style disabled*/
		.tablemanager th.disableSort {

		}
		#for_numrows {
			padding: 10px;
			float: left;
		}
		#for_filter_by {
			padding: 10px;
			float: right;
		}
		#pagesControllers {
			display: block;
			text-align: center;
		}
		spanb{
			color:red;
		}
		
		.mimgb{
		width: 420px;	
		height: 190px;	
		}
		
		
	</style>
		</head>
		<body>	
		  <header id="header" id="home">
	  		<?php require_once 'header-top.php';?>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between ">
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
								My Courses		
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="my-courses.php"> My Courses</a></p>
						</div>	
					</div>
				</div>
			</section>                                                -->
			<!-- End banner Area -->	

			<!-- Start Sample Area -->
		<!--	<section class="sample-text-area">
				<div class="container">
					<h3 class="text-heading">Text Sample</h3>
					<p class="sample-text">
						Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary, or short film to show off their creative prowess. Many have great ideas and want to “wow” the<sup>Superscript</sup> scene, or video renters with their big project.  But once you have the<sub>Subscript</sub> “in the can” (no easy feat), how do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked hand-written title inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC barcodes and polywrap sitting on your doorstep?  You need to create eye-popping artwork and have your project replicated. Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is certainly a helpful option to ensure a professional end result, but to help with your DVD replication project, here are 4 easy steps to follow for good DVD replication results: 

					</p>
				</div>
			</section>-->
			
			<!-- Start Align Area --></br></br></br></br>
			<div class="whole-wrap">
				<div class="container">
					
					
					
					<div class="section-top-border">
						<center><h4 class="mb-30">My Courses</h4></center>
						<?php //require_once 'sidenav.php'; ?>
						<?php echo"
	  <center>
	  <nav class='mnavbar'>	  
	  <ul class='mnav-links'>
	   <input type='checkbox' id='checkbox_toggle' />
      <label for='checkbox_toggle' class='hamburger'>&#9776;</label>
	  <div class='mmenu'>
	  <li><a href='dashboard'>Dashboard</a></li>
	  <li><a class='active' href='my-courses'>All courses ($totalc)</a></li>
	  <li><a href='inprogress-courses'>Inprogress ($tprogress)</a></li>
	  <li><a href='pending-courses'>Pending Approval ($tpending)</a></li> 
	  <li><a href='completed-courses'>Completed ($tcompleted)</a></li>	  
	  </div>
	</ul>	  
	  </nav>
	  </center></p>"; ?>
						<?php echo "<center><b><spanb><b>$_GET[i]</b></spanb></b></center> <b><center><msg>$_GET[m]</msg></b></center>"; ?>
						<div class="row">
							
						<?php	while($row = mysqli_fetch_array($result)){
							
							$sqlb = " SELECT * FROM course WHERE RefId='$row[RefId]'";	
							if($resultb = mysqli_query($link, $sqlb)){
							if(mysqli_num_rows($resultb)>0){
							$rowb = mysqli_fetch_array($resultb);							
							$Duration="$rowb[Duration]";
							}
							}
						
						$prog = " SELECT * FROM enrollment WHERE LId='$LId' AND Status='Inprogress' AND RefId='$row[RefId]' ORDER BY EId DESC ";	
		if($resultp = mysqli_query($link, $prog)){
		if(mysqli_num_rows($resultp)>0){				
		$rowp = mysqli_fetch_array($resultp);
		$progess= $rowp[Progress1] + $rowp[Progress2] + $rowp[Progress3] + $rowp[Quiz];
		$progess= number_format($progess);
		}
		}	
			if($rowp['Status']== "Inprogress" AND $rowp['Step'] == 0){
			$Lb="Start Learning";
			}elseif($rowp['Status']== "Inprogress" AND $rowp['Step'] == 1){
			$Lb="Continue Learning";
			}elseif($rowp['Status']== "Completed" AND $rowp['Step'] == 2){
			$Lb="Continue Completed";
			}elseif($rowp['Status']== "Pending"){
			$Lb="Pending Approval";
			}				
							
				if($row['Provider']== "NITDA"){
				echo"
							<div class='col-lg-4'>
							<div class='single-cat-widget'>
								<div class='content relative'>
									
								    <a href='course-view.php?CId=$row[CourseCode]&RefId=$row[RefId]' >
								      <div class='thumb'>
								  		 <img class='content-image img-fluid d-block mx-auto mimgb' src='admin/thumbnail/$rowb[Thumbnail]' alt='$row[CourseTitle]'>
								  	  </div>
								      <div class='content-details'>
								        <h5 class='content-title mx-auto '>$row[CourseTitle]</h5>
								        <span></span>								        
								        <p><a href='course-view.php?CId=$row[CourseCode]&RefId=$row[RefId]'><button class='genric-btn primary-border medium'>$Lb</button></a></p>
								      </div>
								    </a>
								</div>
							</div>
							
							<div class='skill'>
        <p>Progress</p>
        <div class='skill-bar skill1' style='width: $progess%;'>
            <span class='skill-count1'>$progess%</span>
        </div>
    </div>
						</div>";
				}else{
					echo"
						
						<div class='col-lg-4'>
							<div class='single-cat-widget'>
								<div class='content relative'>
									
								    <a href='course-view.php?CId=$row[CourseCode]&RefId=$row[RefId]' >
								      <div class='thumb'>
								  		 <img class='content-image img-fluid d-block mx-auto mimgb' src='admin/thumbnail/$rowb[Thumbnail]' alt='$row[CourseTitle]'>
								  	  </div>
								      <div class='content-details'>
								        <h5 class='content-title mx-auto'>$row[CourseTitle]</h5>";
										if($row[Status] =='Pending' OR $row[Status] =='Declined'){
										echo"<span></span>								        
								        <p><a href='$row[Url]'><button class='genric-btn primary-border medium'>$row[Status]</button></a></p>";
										}else{
								       echo" <span></span>								        
								        <p><a href='$row[Url]'><button class='genric-btn primary-border medium'>Start Learning</button></a></p>";
										}
								      echo"</div>
								    </a>
								</div>
							</div>
							<div class='skill'>
        <p>Progress</p>
        <div class='skill-bar skill1' style='width: $progess%;'>
            <span class='skill-count1'>$progess%</span>
        </div>
    </div>
						</div>";
				}
						}
						?>						
						</div>
						
						
						
						<?php echo $record; ?>
						
						
					</div>
				
					
					
					
				</div>
			</div>
			<!-- End Align Area -->

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
<!-- External jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script type="text/javascript" src="./js/jquery-1.12.3.min.js"></script> -->
	<script type="text/javascript" src="js/tableManager.js"></script>
	<script type="text/javascript">
		// basic usage
		$('.tablemanager').tablemanager({
			firstSort: [[3,0],[2,0],[1,'asc']],
			disable: ["last"],
			appendFilterby: true,
			dateFormat: [[4,"mm-dd-yyyy"]],
			debug: true,
			vocabulary: {
    voc_filter_by: 'Filter By',
    voc_type_here_filter: 'Filter...',
    voc_show_rows: 'Rows Per Page'
  },
			pagination: true,
			showrows: [5,10,20,50,100],
			disableFilterBy: [1]
		});
		// $('.tablemanager').tablemanager();
	</script>
	<script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>			
		</body>
	</html>