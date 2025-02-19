<?php
require_once 'connectors/conn.php';
require_once 'connectors/session.php'; 
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';


$i=0;


$start=0;
$limit=1;

if(isset($_GET["CategoryId"])){
$RefId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['RefId'])));
$CategoryId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['CategoryId'])));
$CategoryName =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['CategoryName'])));
}

  
	 $sql = " SELECT * FROM course WHERE CategoryId='$CategoryId' ";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		$total=mysqli_num_rows($result);
		if($rownum=mysqli_num_rows($result)){}
}
}
	
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<?php require_once 'title.php';?>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="images/fav.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<?php require_once 'header.php';?>
		<?php require_once 'right-sidebar.php';?>
		<?php require_once 'left-sidebar.php';?>
		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="title">
									<h4><?php echo $CategoryName; ?></h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Courses
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
			
					
					<center><h4 class="h4 text-blue mb-30">Available Courses</h4></center>
					<div class="card-columns mb-30">
					<?php
                                          while($row = mysqli_fetch_array($result) AND $i<=$total){
												$i++; 
												
					echo"
						<div class='card card-box'>
							<a href='course-details.php?RefId=$row[RefId]&CourseCode=$row[CourseCode]'><img
								class='card-img-top mimg'
								src='thumbnail/$row[RefId].png'
								alt='$row[CourseTitle] thumbnail'
							/></a>
							<div class='card-body'>
								<h5 class='card-title'>$row[CourseTitle]</h5>
								<p align='justify' class='card-text'>
									$row[Description]
								</p>
								<p class='card-text'>
									<small class='text-muted'>Last updated $row[LastUpdated]</small>
								</p>
								<a href='course-details.php?RefId=$row[RefId]&CourseCode=$row[CourseCode]'><button type='button' class='btn btn-secondary btn-sm'>
										View 
									</button></a>
									<a href='modify-course.php?RefId=$row[RefId]&CourseCode=$row[CourseCode]'><button type='button' class='btn btn-secondary btn-sm'>
										Modify 
									</button></a>
							</div>
						</div>";
										  }
										  ?>
										  
						
					</div>
				
				</div>
				<?php require_once 'footer.php'; ?>
			</div>
		</div>
		<!-- welcome modal start -->
		
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
