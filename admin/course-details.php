<?php
require_once 'connectors/conn.php';
//require_once 'connectors/session.php'; 
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';


$i=0;


$start=0;
$limit=1;

if(isset($_GET['RefId'])){
$RefId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['RefId'])));
$CourseId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['CourseId'])));
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['CourseCode'])));
  
	 $sql = " SELECT * FROM course WHERE RefId='$RefId'";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_array($result);
			$CourseCode= $row['CourseCode'];
		$total=mysqli_num_rows($result);
		if($rownum=mysqli_num_rows($result)){}
}
}
}

				 $sql = "SELECT * FROM enrollment WHERE RefId='$RefId' AND CourseCode='$CourseCode'";
               $query=mysqli_query ($link, $sql);
			   $totale=mysqli_num_rows($query);
			   $total= number_format($total);
			   
			    $sqli = "SELECT * FROM enrollment WHERE RefId='$RefId' AND CourseCode='$CourseCode' AND Status='Inprogress'";
               $queryi=mysqli_query ($link, $sqli);
			   $totali=mysqli_num_rows($queryi);
			   $totali= number_format($totali);
			   
			    $sqlc = "SELECT * FROM enrollment WHERE RefId='$RefId' AND CourseCode='$CourseCode'AND Status='Completed'";
               $queryc=mysqli_query ($link, $sqlc);
			   $totalc=mysqli_num_rows($queryc);
			   $totalc= number_format($totalc);
			   
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
									<h4>Course Detail</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Course Details
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="blog-wrap">
						<div class="container pd-0">
							<div class="row">
								<div class="col-md-8 col-sm-12">
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-img">
										<?php	echo"<img width='100%' src='thumbnail/$row[RefId].png' alt='' />"; ?>
										</div>
										<div class="blog-caption">
											<h5 class="mb-10">
												<?php	echo"$row[CourseCode]: $row[CourseTitle]"; ?>
											</h5>
											<h6 class="mb-10">
												<msg>Course Description</msg>
											</h6>
											<p>
												<?php	echo"$row[Description]"; ?>
											</p>
											<h6 class="mb-10">
												<msg>Course Overview</msg>
											</h6>
											<p>
												<?php	echo"$row[Overview]"; ?>
											</p>
											<h6 class="mb-10">
												<msg>Eligibility</msg>
											</h6>
											<p>
												<?php	echo"$row[Eligibility]"; ?>
											</p>
											
											<h5 class="mb-10">Course Outline</h5>
											<ul>
											<?php
											$sqlol = " SELECT * FROM outline WHERE CourseCode='$CourseCode'";	
											$resultol = mysqli_query($link, $sqlol);
											while($rowol = mysqli_fetch_array($resultol)){
												echo"<li>
													<a class='primary-btn ' href='content-view.php?OId=$rowol[OId]&RefId=$rowol[RefId]&Cc=$rowol[CourseCode]'>$rowol[Outline]</a>
											</li>";}
												?>												
											</ul>
											
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="card-box mb-30">
										<h5 class="pd-20 h5 mb-0">Statistics</h5>
										<div class="list-group">
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>Enrollment
												<span class="badge badge-primary badge-pill"><?php echo $totale; ?></span></a
											>
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>In Progress
												<span class="badge badge-primary badge-pill"
													><?php echo $totali; ?></span
												></a
											>
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>Completed
												<span class="badge badge-primary badge-pill"><?php echo $totalc; ?></span></a
											>
						<!--					<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>jQuery
												<span class="badge badge-primary badge-pill"
													>15</span
												></a
											>
											<a
												href="#"
												class="list-group-item d-flex align-items-center justify-content-between"
												>Design
												<span class="badge badge-primary badge-pill">5</span></a
											>    -->
										</div>
									</div>
									<div class="card-box mb-30">
									<?php
									 $sqlc = " SELECT * FROM ebook WHERE CourseCode='$row[CourseCode]'";
	
		$resultc = mysqli_query($link, $sqlc);
		if(mysqli_num_rows($resultc)>0){
			//$rowc = mysqli_fetch_array($resultc);
		$totalc=mysqli_num_rows($resultc);
		if($rownumc=mysqli_num_rows($resultc)){}
									?>
										<h5 class="pd-20 h5 mb-0">Couse Materials(<?php echo $totalc; ?>)</h5>
										<div class="latest-post">
											<ul>
												<li>
													
													<?php
										
}
										while($rowc = mysqli_fetch_array($resultc)){
										
										echo"
														<a href='courseware/$rowc[FileName]'
															><img src='images/pdf.png'> $rowc[EbookTitle]</a
														><p></br>";
										}
										echo"<a class='btn btn-small' href='course-ebook?CourseCode=$CourseCode'>Edit/Remove Course material</a>";
											?>
													
												<!--	<span>HTML</span> -->
												</li>
												
											</ul>
										</div>
									</div>
									<div class="card-box overflow-hidden">
									<?php
									$CourseCode="$row[CourseCode]";
										 $sqlv = " SELECT * FROM videos WHERE CourseCode='$CourseCode'";
	
		$resultv = mysqli_query($link, $sqlv);
		if(mysqli_num_rows($resultv)>0){
			//$rowv = mysqli_fetch_array($resultv);
		$totalv=mysqli_num_rows($resultv);
		if($rownumv=mysqli_num_rows($resultv)){}
									?>
										<h5 class="pd-20 h5 mb-0">Videos(<?php echo $totalv; ?>)</h5>
										<div class="list-group">
										<?php
										
}
										while($rowv = mysqli_fetch_array($resultv)){
										//$_SESSION['CourseCode']="$rowv[CourseCode]";
										echo"	<a
												href='video.php?Fname=$rowv[FileName]&Ref=$rowv[Ref]'
												class='list-group-item d-flex align-items-center justify-content-between'
												><img src='images/video.png'>$rowv[VideoTitle]</a
											>";
										}
										echo"<a class='btn btn-small' href='course-video?CourseCode=$CourseCode'>Edit/Remove Video</a>";
											?>
											<?php //echo "$sqlv";?>
										</div>
									</div></br>
															<div class="card-box overflow-hidden">
									<?php
									$CourseCode="$row[CourseCode]";
										 $sqlqv = " SELECT * FROM myquiz WHERE CourseCode='$CourseCode'";
	
		$resultqv = mysqli_query($link, $sqlqv);
		if(mysqli_num_rows($resultqv)>0){
			//$rowv = mysqli_fetch_array($resultv);
		$totalqv=mysqli_num_rows($resultqv);
		$totalqv= number_format($totalqv);
		if($rownumqv=mysqli_num_rows($resultqv)){}
									?>
										<h5 class="pd-20 h5 mb-0">Quiz Questions (<?php echo $totalqv; ?>)</h5>
										<div class="list-group">
										<?php
										
}
										
										//$_SESSION['CourseCode']="$rowv[CourseCode]";
										echo"	<a class='btn btn-small'
												href='quiz.php?CourseCode=$CourseCode&RefId=$RefId'
												class='list-group-item d-flex align-items-center justify-content-between'
												>View/Add quiz questions</a
											>
											";
										
											?>
											<?php //echo "$sqlv";?>
										</div>
									</div>
									
								</div>
							</div>
						</div>
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
