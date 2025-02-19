<?php
require_once 'connectors/conn.php';
require_once 'connectors/session.php'; 
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';


$i=0;


$start=0;
$limit=1;

	 $sqlt = " SELECT * FROM enrollment WHERE Provider='NITDA' ";	
	 $resultt = mysqli_query($link, $sqlt);
	 $total=mysqli_num_rows($resultt);

	 $sql = " SELECT SUM(Progress1) + SUM(Progress2) + SUM(Progress3) + SUM(Quiz) AS tprogress FROM enrollment WHERE Provider='NITDA' ";	
	 $result = mysqli_query($link, $sql);
		//if(mysqli_num_rows($result)>0){
			$row= mysqli_fetch_assoc($result);
		//$total=mysqli_num_rows($result);
		$tprog= $row['tprogress'];	
		
		$oprog= $total / 100;
		//$oprogress= ($tprog / 100 ) * $oprog;
		$oprogress= ($tprog / 100 );
		$oprogress= number_format($oprogress);
		$oprogress= intval($oprogress);
		
		//$totalprogress= ($tprog * $total) / 100;
		$totalprogress= ($tprog * $total);
		$avgl= $tprog / $total;
		$avgl= number_format($avgl);
		$avgl= intval($avgl);
//}

	
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
			href="vendors/images/favicon-16x16.png"
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
									<h4>Progress</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Learning progress
										</li>
									</ol>
								</nav>
								
							</div>
						</div>
					</div>
					<div class="row">
					
						
						<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h5 mb-20">Learning Progress</h5>
								Overall Learning progress<div class="progress mb-20" style="height: 30px">
									<div
										class="progress-bar bg-success"
										role="progressbar"
										style="width: <?php echo "$oprogress%";?>"
										aria-valuenow="0"
										aria-valuemin="0"
										aria-valuemax="100"
									>
									<?php echo "$oprogress%"; ?>
									</div>
								</div>
								Average Learner Progress<div class="progress mb-20" style="height: 30px">
									<div
										class="progress-bar bg-info"
										role="progressbar"
										style="width: <?php echo "$avgl%";?>"
										aria-valuenow="25"
										aria-valuemin="0"
										aria-valuemax="100"
									>
										<?php echo "$avgl%";?>
									</div>
								</div>
								
							</div>
						</div>
	<!--					<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
							<div class="pd-20 card-box">
								<h5 class="h5 mb-20">Height Progress</h5>
								<div class="progress mb-20" style="height: 5px">
									<div
										class="progress-bar"
										role="progressbar"
										style="width: 50%"
										aria-valuenow="0"
										aria-valuemin="0"
										aria-valuemax="100"
									></div>
								</div>
								<div class="progress mb-20" style="height: 18px">
									<div
										class="progress-bar"
										role="progressbar"
										style="width: 25%"
										aria-valuenow="25"
										aria-valuemin="0"
										aria-valuemax="100"
									>
										25%
									</div>
								</div>
								<div class="progress" style="height: 25px">
									<div
										class="progress-bar bg-info"
										role="progressbar"
										style="width: 75%"
										aria-valuenow="25"
										aria-valuemin="0"
										aria-valuemax="100"
									>
										75%
									</div>
								</div>
							</div>
						</div>                -->
					
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
