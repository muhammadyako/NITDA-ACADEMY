	<?php
require_once 'connectors/conn.php';
//require_once 'connectors/functions.php';


//AddCourse();
if(isset($_POST["Join"])){
$Fname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Fname'])));
$Sname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Sname'])));
$Mname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Mname'])));
$Gender =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Gender'])));
$Dob =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Dob'])));
$Email =  htmlspecialchars(strtolower(mysqli_real_escape_string  ($link,$_POST['Email'])));
$Phoneno =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Phoneno'])));
$State =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['State'])));
$Lga =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Lga'])));
$Password= MD5(Sha1('$Password'));
$Userip = $_SERVER['REMOTE_ADDR'];
$da= getdate();
$DateJoin="$da[mday] $da[month] $da[year]";

		if (empty($_POST['Fname'])){
		$FnameError = "<spanb>Enter First Name</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Sname'])){
		$SnameError = "<spanb>Enter Surname</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Email'])){
		$EmailError = "<spanb>Enter Email</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Phoneno'])){
		$PhonenoError = "<spanb>Enter Phone Number</spanb>";
		$errors = 1;
		}
		//if (empty($_POST['Role'])){
		//$RoleError = "<spanb>Select User Role</spanb>";
		//$errors = 1;
		//}



		if($errors == 0){	

$sql = " INSERT INTO learner (Fname,Sname,Mname,Gender,Dob,Email,Phoneno,Sate,Lga,Password,Status,UserIp,DateJoin) VALUES 
('$Fname', '$Sname','$Mname','$Gender','$Dob','$Email','$Phoneno','$Sate','Lga','$Password','Status','$UserIp','$DateJoin')";	
if(mysqli_query ($link, $sql)){

$msg= "<center><msg>User Created Successfully!</msg></center>";
}else{
$msg= "<center><spanb>An Error Occured Creating User!</spanb></center>";
}	
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
			<script type= "text/javascript" src = "js/populatestate.js"></script>
		</head>
		<body>	
		  <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<div class="row">
			  			<div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
			  				<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
			  				</ul>			
			  			</div>
			  			<div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
			  				<a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+953 012 3654 896</span></a>
			  				<a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">support@colorlib.com</span></a>			
			  			</div>
			  		</div>			  					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.html">Home</a></li>
			          <li><a href="about.html">About</a></li>
			          <li><a href="courses.html">Courses</a></li>
			          <li><a href="events.html">Events</a></li>
			          <li><a href="gallery.html">Gallery</a></li>
			          <li class="menu-has-children"><a href="">Blog</a>
			            <ul>
			              <li><a href="blog-home.html">Blog Home</a></li>
			              <li><a href="blog-single.html">Blog Single</a></li>
			            </ul>
			          </li>	
			          <li class="menu-has-children"><a href="">Pages</a>
			            <ul>
		              		<li><a href="course-details.html">Course Details</a></li>		
		              		<li><a href="event-details.html">Event Details</a></li>		
			                <li><a href="elements.html">Elements</a></li>
					          <li class="menu-has-children"><a href="">Level 2 </a>
					            <ul>
					              <li><a href="#">Item One</a></li>
					              <li><a href="#">Item Two</a></li>
					            </ul>
					          </li>					                		
			            </ul>
			          </li>					          					          		          
			          <li><a href="contact.html">Contact</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
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
								Register				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="register.php"> Register</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						
						
						<div class="col-lg-8">
							<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
								<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="fname" placeholder="Enter your first name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your first name'" class="common-input mb-20 form-control" required="" type="text">
										
										<input name="mname" placeholder="Enter Middle name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your middle name'" class="common-input mb-20 form-control" type="text">
										
										<input name="sname" placeholder="Enter your surname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your surname'" class="common-input mb-20 form-control" required="" type="text">
										
										<select class="common-input mb-20 form-control" name="Gender">
										<option value="">Select</Option>
										<option value="Male">Male</Option>
										<option value="Female">Female</Option>
										</select>
										
										<input name="Dob" placeholder="Enter birth date 01/01/1960" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter birth date'" class="common-input mb-20 form-control" required="" type="text">
				
										
										<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
										
										<input name="phoneno" placeholder="Enter your phone no." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phoe no/'" class="common-input mb-20 form-control" required="" type="text">
										
										<select class="common-input mb-20 form-control" name="State" id="state">
										<option value="">Select</Option>										
										</select>
										
										<select class="common-input mb-20 form-control" name="Lga" id="lga">
										<option value="">Select</Option>										
										</select>

										<input name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" class="common-input mb-20 form-control" required="" type="password">
										
										<input name="password" placeholder="Repeat Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter repeat password'" class="common-input mb-20 form-control" required="" type="rpassword">
										<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button name="Join" class="genric-btn primary" style="float: right;">Submit</button>
									<?php echo $sql; ?>										
									</div>
									</div>
									<a href="login.php">Login</a>
									
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End contact-page Area -->

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
			<script language="javascript">
	populateStates("state", "lga"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	populateStates("country2");
	populateStates("country2");
</script>
		</body>
	</html>