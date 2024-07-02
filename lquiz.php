	<?php require_once 'connectors/conn.php';?>
	<?php require_once 'connectors/time-track.php';?>
	<?php
	
		$EId="$_GET[EId]";
		$RefId="$_GET[RefId]";
		$CourseCode="$_GET[CourseCode]";
		
		$prog = " SELECT * FROM enrollment WHERE LId='$_SESSION[LId]' AND Status='Inprogress' AND RefId='$_GET[RefId]'";	
		if($resultp = mysqli_query($link, $prog)){
		if(mysqli_num_rows($resultp)>0){				
		$rowp = mysqli_fetch_array($resultp);
		$progress= $rowp[Progress1] + $rowp[Progress2] + $rowp[Progress3] + $rowp[Quiz];
		$progress= number_format($progress);
		}
		}
		if($progress <= 20){
		header("location:course-view.php?CId=$CourseCode&RefId=$RefId&err=You need to mark the course activities as COMPLETE.");
		}
		if($progress >= 20){
		$upde="UPDATE enrollment SET Progress1='20', Progress2='20',Progress3='20' WHERE EId='$EId' AND RefId='$RefId' AND LId='$_SESSION[LId]'";
		$link->query($upde);
		}
		
		include 'connectors/quize-control.php';
		
		$sqlcq = " SELECT * FROM certificate WHERE EId='$_GET[EId]' AND RefId='$_GET[RefId]' AND CourseCode='$_GET[CourseCode]'";	
		$resultcq = mysqli_query($link, $sqlcq);
		//$rows = mysqli_fetch_array($result);
		$totalcq=mysqli_num_rows($resultcq);
		if($totalcq >0){
		header("location:course-view.php?CId=$CourseCode&RefId=$RefId&err=You have taken and passed the Quiz already.");	
		}
		
		$sql = " SELECT * FROM myquiz WHERE CourseCode='$_GET[CourseCode]'";	
		$result = mysqli_query($link, $sql);
		//$rows = mysqli_fetch_array($result);
		$totalq=mysqli_num_rows($result);
		
		$sqlct = " SELECT * FROM enrollment WHERE RefId='$_GET[RefId]'";	
		$resultct = mysqli_query($link, $sqlct);
		$rowct = mysqli_fetch_array($resultct);
		$CourseTitle="$rowct[CourseTitle]";
		$totalq=mysqli_num_rows($result);
		
		

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
</script>   
    <script type="text/javascript">
        function preventBack() {
            event.preventDefault();
        }
		function preventreload() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function () {
            null
        };
    </script>
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
		
		.qradio input{
		float: left;	
		}
	</style>
	
	<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 2px auto;
  font-family: Raleway;
  font-size: 18px;
  padding: 15px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}



/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #004E2B;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
.qt{
float: right;	
}




</style>

<style>
/* The container */
.containerc {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.containerc input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #ccc;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.containerc:hover input ~ .checkmark {
  background-color: green;
}

/* When the radio button is checked, add a blue background */
.containerc input:checked ~ .checkmark {
  background-color: green;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.containerc input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.containerc .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

.qstyle{
font-size: 17px;
font-family: cursive;
margin: 15px;	
}


.time{
background-color: #004E2B;
 border-style: ridge ;
  border-width: 2px;
color: yellow;
float: right;
text-align:center;
width: 70px;
font-size: 28px;
font-family: bodoni;
font-weight: bold;	
}
</style>

<script>
  $( function() {
    $( "#draggable" ).draggable();
  } );
  </script>
  
  <script type="text/javascript">
  function timeout()
  {
	  var minute=Math.floor(timeLeft/60);
	  var second=timeLeft%60;
	  if(timeLeft<=0)
	  {  
         clearTimeout(tm);
		 document.getElementById("regForm").submit();
	  }
	  else
	  {   if(minute<10)
		  {
			  minute="0"+minute;
		  }
		  if(second<10)
		  {
			  second="0"+second;
		  }
		 document.getElementById("time").innerHTML=minute+":"+second; 
	  }
	  timeLeft--;
	var tm=setTimeout(function(){timeout()},1000);
	
	
  } 
  
  $(document).ready(function() {

    $(document)[0].oncontextmenu = function() { return false; }

    $(document).mousedown(function(e) {
        if( e.button == 2 ) {
            alert('Sorry, this functionality is disabled!');
            return false;
        } else {
            return true;
        }
    });
});
  </script>
		</head>
		<body onload="hidder();">	
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
								Quiz		
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="my-courses.php"> Quiz</a></p>
						</div>	
					</div>
				</div>
			</section>					-->
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
					

						<center>
<!--<div class="time" id="navbar">Time left :<span id="timer"></span></div>		-->
<button class="button" id="mybut" onclick="myFunction()">Start Quiz</button>
</center>
						<?php echo "<center><b><spanb><b>$_GET[i]</b></spanb></b></center> <b><center><msg>$_GET[m]</msg></b></center>"; ?>
						<div id="myDIV">
						<div class="row">
							<div class="col-lg-12">
								<!--<blockquote class="generic-blockquote">-->
									<form id="regForm" method="post" action="myresult.php">
									<div class="time" id="navbar"><span id="timer"></span></div>
<?php echo"<input type='hidden' name='totalq' value='$totalq'>"; ?>
  <h1>Quiz</h1>
   <script type="text/javascript">
    var timeLeft=2*60;
  
  </script>
  
  <div id="draggable" class="ui-widget-content">
  <!--<p><div id="time" style="float:right">Time</div>
  <div  style="float:right">Timeleft :</div></p>-->
</div>
  <!-- One "tab" for each step in the form: -->
  <?php while($row = mysqli_fetch_array($result) AND $i<=$totalq){
	  $i++;
	  //echo "$i / $totalq";
  echo"<div class='tab'>
  <div class='qt'><b>$i / $totalq</b></div></br>
  <input type='hidden' name='RefId' value='$_GET[RefId]'>
  <input type='hidden' name='EId' value='$_GET[EId]'>
  <input type='hidden' name='CourseCode' value='$_GET[CourseCode]'>
  <input type='hidden' name='CourseTitle' value='$CourseTitle'>
  <table border='0'>
  <tr><td colspan='2'><div class='qstyle'><b>$i. $row[que]</b></div></td></tr>
    <tr><td><p><label class='containerc'>$row[A]<input type='Radio' class='qradio' oninput='this.className = ''' id='question$i' name='$row[id]' value='A'><span class='checkmark'></span></label></td></tr></p>
	<tr><td><p><label class='containerc'>$row[B]<input type='Radio' class='qradio' oninput='this.className = ''' id='question$i' name='$row[id]' value='B'><span class='checkmark'></span></label></td></tr></p>
	<tr><td><p><label class='containerc'>$row[C]<input type='Radio' class='qradio' oninput='this.className = ''' id='question$i' name='$row[id]' value='C'><span class='checkmark'></span></label></td></tr></p>
	<tr><td><p><label class='containerc'>$row[D]<input type='Radio' class='qradio' oninput='this.className = ''' id='question$i' name='$row[id]' value='D'><span class='checkmark'></span></label></td></tr></p>
	 
	   </table>
    
  </div>"; }
  
  ?>
  
   
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
  <?php
  for($l=1; $l <= $totalq; $l++){
    echo"<span class='step'></span>";
  }
    
	?>
  </div>
</form>



<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
	
	
    //if (y[i].value == "") {
      // add an "invalid" class to the field:
      //y[i].className += " invalid";
      // and set the current valid status to false
     // valid = false;
    //}
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
								<!--</blockquote>-->
							</div>
						</div>
					</div>
					</div>
				
					
					
					
				</div>
			</div>
			<!-- End Align Area -->

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



<!-- quiz js starts-->
<script>
function myFunction() {
	var x = document.getElementById("myDIV");
    var b = document.getElementById("mybut");
    var x = document.getElementById("myDIV");
	if (x.style.display === "none") { 
	b.style.visibility = 'hidden';
	x.style.display = "block";
	startTimer();
}
}
window.onload = function() {
  document.getElementById('myDIV').style.display = 'none';
};
</script>
<?php			//$fetchtime = "SELECT `timer` FROM `quiz` WHERE id=1";
				//$fetched = mysqli_query($con,$fetchtime);
				//$time = mysqli_fetch_array($fetched,MYSQLI_ASSOC);
				$settime = '5:0';		
						?>
 <script type="text/javascript">

document.getElementById('timer').innerHTML = '<?php echo $settime; ?>';
  //03 + ":" + 00 ;


function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m==0 && s==0){document.getElementById("regForm").submit();}
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
  if(sec == 0 && m == 0){ alert('stop it')};
}
</script>

<script>
window.onscroll = function() {myFun()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop -50;

function myFun() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
		
		</body>
	</html>