	<?php 
	 require_once 'connectors/session.php';
	 require_once 'connectors/conn.php';
	 require_once 'connectors/time-track.php';
	 require_once 'connectors/visit.php';
	
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
			<style type="text/css">
		
		
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
			margin-bottom: 20px;
		}
		table, th, td {
		   border: 1px solid #bbb;
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
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
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
								Score		
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home</a>  <span class="lnr lnr-arrow-right"></span>  <a href="my-courses.php"> Score</a></p>
						</div>	
					</div>
				</div>
			</section>				-->
			<!-- End banner Area --></br></br></br></br>	

			<!-- Start Sample Area -->
		<!--	<section class="sample-text-area">
				<div class="container">
					<h3 class="text-heading">Text Sample</h3>
					<p class="sample-text">
						Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary, or short film to show off their creative prowess. Many have great ideas and want to “wow” the<sup>Superscript</sup> scene, or video renters with their big project.  But once you have the<sub>Subscript</sub> “in the can” (no easy feat), how do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked hand-written title inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC barcodes and polywrap sitting on your doorstep?  You need to create eye-popping artwork and have your project replicated. Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is certainly a helpful option to ensure a professional end result, but to help with your DVD replication project, here are 4 easy steps to follow for good DVD replication results: 

					</p>
				</div>
			</section>-->
			
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					
					
					
					<div class="section-top-border">
						
						<?php echo "<center><b><spanb><b>$_GET[i]</b></spanb></b></center> <b><center><msg>$_GET[m]</msg></b></center>"; ?>
						<div class="row">
							<div class="col-lg-12">
								<!--<blockquote class="generic-blockquote">-->
									<?php
require_once 'connectors/session.php'; 
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecourser";

$da= getdate();
$date= strtotime("$da[mday] $da[month] $da[year]");
$DateIssued= date( 'd-m-Y', $date );

//$d=strtotime("+$Duration");
$q=strtotime("+5 Days");
$SDate = date("d-m-Y");
$EDate = date("d-m-Y ", $d);
$QDate = date("d-m-Y ", $q);

$RefId= "$_POST[RefId]";
$EId= "$_POST[EId]";
$CourseCode= "$_POST[CourseCode]";
$CourseTitle= "$_POST[CourseTitle]";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$totalq=$_POST['totalq'];
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;

    // Process each question
    foreach ($_POST as $question => $answer) {
        // Process the answer (you can customize this part based on your quiz requirements)
        // For example, checking the answer against the database
        $sql = "SELECT ans FROM myquiz WHERE CourseCode='$CourseCode' AND id = $question";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row["ans"] == $answer) {
                $score++;
				$scoreb=$score;
            }
        }
    }
	$score = $score * 100 / $totalq;
	$score = number_format($score);
	$result=$score;
	$score= "$score%";
    // Save the score to the database or perform any other necessary actions
    // For example, you can insert the score into a scores table
	if($result >= 50){
    $insert_sql = "INSERT INTO certificate (RefId,EId,LId,CourseCode,CourseTitle,Fname,Mname,Sname,Result,DateIssued) 
	VALUES ('$RefId','$EId','$_SESSION[LId]','$CourseCode','$CourseTitle','$_SESSION[LFname]','$_SESSION[LMname]','$_SESSION[LSname]','$score','$DateIssued')";
    $conn->query($insert_sql);
	
	$upde="UPDATE enrollment SET Progress1='20', Progress2='20',Progress3='20', Quiz='40',QDate='Done', Status='Completed', Step='2' WHERE EId='$EId' AND RefId='$RefId' AND LId='$_SESSION[LId]'";
	$conn->query($upde);
	
	
    // Display the score to the user
	echo"<center>";
	echo "<h3><b>Congratulations</b></h3><p>";
	echo "Correct answers <b>$scoreb/$totalq</b><p>";
    echo "Your score: " . $score;
	echo"</br></br><a href='course-view.php?CId=$CourseCode&RefId=$RefId'><button>Ok</button></center></a>";
	echo"</center>";
}else{
$qd="UPDATE enrollment SET QDate='$QDate' WHERE EId='$EId' AND RefId='$RefId' AND LId='$_SESSION[LId]' ";
$conn->query($qd);

echo"<center>";
	echo "<h5><b><spanb>Sorry your score is less than 50%</spanb></b></h5><p>";
	echo "Correct answers <b>$scoreb/$totalq</b><p>";
    echo "Your score: " . $score;
	echo "<p><spanb>Try again in the next five days</spanb> ";
	echo"</br></br><a href='course-view.php?CId=$CourseCode&RefId=$RefId'><button>Ok</button></center></a>";
	echo"</center>";	
}
}



//echo $insert_sql;
//echo $sql;

$conn->close();

?>
								<!--</blockquote>-->
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
		</body>
	</html>