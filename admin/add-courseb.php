<?php
require_once 'connectors/conn.php';
//require_once 'connectors/functions.php';


//AddCourse();
if(isset($_POST["CategoryId"])){
$Course =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Course'])));
$CategoryId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CategoryId'])));

if (empty($_POST['CourseTitle'])){
		$CourseTitleError = "<spanb>Enter Course Title</spanb>";
		$errors = 1;
		}
		if (empty($_POST['CourseCode'])){
		$CourseCodeError = "<spanb>Enter Course</spanb>";
		$errors = 1;
		}
		if (empty($_POST['CategoryId'])){
		$CategoryError = "<spanb>Select Category</spanb>";
		$errors = 1;
		}



		if($errors == 0){	

$sqlb = " INSERT INTO Course (CategoryId,CourseCode, CourseTitle) VALUES ('$CategoryId', '$CourseCode','$CourseTitle')";	
if(mysqli_query ($link, $sqlb)){

$msg= "<center><msg>Course added Successfully!</msg></center>";
}	
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
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Form</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Form Basic
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-secondary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										January 2018
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div>
						</div>
					</div>
	

	

					<!-- Form grid Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Add Course</h4>								
							</div>
							<div class="pull-right">
								<a
									href="#form-grid-form"
									class="btn btn-primary btn-sm scroll-click"
									rel="content-y"
									data-toggle="collapse"
									role="button"
									><i class="fa fa-code"></i> Source Code</a
								>
							</div>
						</div>
						<form name="Categoryform" method="post" class="" action="">
							
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Category</label>
										<select class="form-control" name="CategoryId">
																			 <?php echo"<option value='$Category'>$Category</option>";  ?>
                                                            <?php 
															 $sqlct = " SELECT * FROM Category";
														if($resultct = mysqli_query($link, $sqlct)){
														if(mysqli_num_rows($resultct)>0){
															
															while($rowct = mysqli_fetch_array($resultct)){
															echo"<option value='$rowct[CategoryId]'>$rowct[CategoryName]</option>";	
															}
															}
															}
															?>
																		</select>
																		<?php echo "$CategoryIdError";   ?>
									</div>
									<div class="form-group">
										<label>Course Code<spanb*</spanb></label>
										<input type="text" name="CourseCode" class="form-control" />										
										<?php echo "$CourseCodeError $msg  ";   ?>
									</div>

									<div class="form-group">
										<label>Course Title<spanb*</spanb></label>
										<input type="text" name="CourseTitle" class="form-control" /></br>
										<button type="submit" name="Co"
										class="btn btn-success btn-lg btn-block">Add</button>
										<?php echo "$CourseTitleError $CourseErrorb $msg $sqlb ";   ?>
									</div>
								</div>
								
							</div>
							
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>col-md-6</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>col-md-6</label>
										<input type="text" class="form-control" />
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>col-md-6</label>
										<input type="text" class="form-control" />
									</div>
								</div>
							</div>
							
						</form>

					</div>
					<!-- Form grid End -->

					
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
