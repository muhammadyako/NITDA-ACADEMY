<?php
require_once 'connectors/session.php';
require_once 'connectors/conn.php';
//require_once 'connectors/functionsb.php';
//AddVideo();




if(isset($_GET["VId"])){
$VId =  strtoupper(mysqli_real_escape_string  ($link,$_GET['VId']));
$Ref =  strtoupper(mysqli_real_escape_string  ($link,$_GET['Ref']));	
$CourseCode =  strtoupper(mysqli_real_escape_string  ($link,$_GET['CourseCode']));	
	
 $sql = " SELECT * FROM videos WHERE VideoId='$VId' AND CourseCode='$CourseCode'";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		
		if($rownum=mysqli_num_rows($result)){}
while($row = mysqli_fetch_array($result)){
	$VId="$row[VideoId]";
	$Ref="$row[Ref]";
$CourseCode="$row[CourseCode]";
$Source="$row[Source]";
$Url="$row[Url]";
$VideoTitle="$row[VideoTitle]";
$FileName="$row[FileName]";
}	
}
}
}



if(isset($_POST["VideoTitle"])){
$Source =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Source'])));
$VId =  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['VId']));
$Ref =  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['Ref']));
$Url =  htmlspecialchars(mysqli_real_escape_string  ($link,$_POST['Url']));
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CourseCode'])));
$VideoTitle =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['VideoTitle'])));
$FileName =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['FileName'])));
$Clipname="$CourseCode$VideoTitle.mp4";
//$Clipname="$CourseCode.mp4";

//$Ref=time();
$da= getdate();
$Date="$da[mday] $da[month] $da[year]";

if (!empty($_FILES['VideoClip']['tmp_name'])){
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$videomime=finfo_file($finfo,$_FILES['VideoClip']['tmp_name']);
}

		if (empty($_POST['CourseCode'])){
		$CourseCodeError = "<spanb>Select Course</spanb>";
		$errors = 1;
		}
		if (empty($_POST['VideoTitle'])){
		$VideoTitleError = "<spanb>Enter the Video Title</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Source'])){
		$SourceError = "<spanb>Select video source</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Url']) AND $Source=='Youtube'){
		$UrlError = "<spanb>Enter Youtube Url</spanb>";
		$errors = 1;
		}
		if ($videomime !=='video/mp4' AND !empty($_FILES['VideoClip']['tmp_name'])){
		$mimeError = "<spanb> video MP4 format is only accepted</b></span>";
		$errors = 1;
		}
		//if (empty($_FILES['VideoClip']['tmp_name']) AND $Source=='Internal'){
		//$VideoError = "<spanb>please select Video</spanb>";		
		//$errors = 1;
		//}
		//if ($_FILES['VideoClip']['size'] > 6002000 ){
		//$VideoErrorb = "<spanb>Video is too large <b>not larger than 6MB is accepted</b></span>";
		//$errors = 1;
		//}

if($errors == 0){
$upda="UPDATE videos SET Source='$Source', Url='$Url', VideoTitle='$VideoTitle', CourseCode='$CourseCode' WHERE VideoId='$VId'";
$exca=mysqli_query ($link, $upda);
	
if (!empty($_FILES['VideoClip']['tmp_name'])){
move_uploaded_file($_FILES['VideoClip']['tmp_name'],"videoclips/$Clipname");
}
$upd="UPDATE course SET LastUpdated='$Date' WHERE CourseCode='$CourseCode'";	
	$exc=mysqli_query ($link, $upd);
$msg= "<center><msg>Video Updated Successfully!</msg></center>";
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
		<!-- switchery css -->
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/switchery/switchery.min.css"
		/>
		<!-- bootstrap-tagsinput css -->
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css"
		/>
		<!-- bootstrap-touchspin css -->
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css"
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
									<h4>Update Video Clips</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Update Video Clips
										</li>
									</ol>
								</nav>
							</div>							
						</div>
					</div>

					<!-- Select-2 Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Update Video Clips</h4>
								<p class="mb-30">You can search for a course by name</p>								
							</div>
						</div>
						<center><?php echo "$msg ";?></center>
						<form method="post" action="" enctype="multipart/form-data">
							<div class='row'>
								<div class='col-md-6'>
									<div class='form-group'>
									<input class='form-control' type='hidden' name='VId' value="<?php echo $VId; ?>">
									<input class='form-control' type='hidden' name='Ref' value="<?php echo $Ref; ?>">
										<label>Select Course<spanb>*</spanb></label>
										<select
											class='custom-select2 form-control'
											name='CourseCode'
											style='width: 100%; height: 38px'
										>
											<?php echo"<option value='$CourseCode'>$CourseCode $CourseTitle</option>";  ?>
                                                            <?php 
															 $sqlct = " SELECT * FROM course";
														if($resultct = mysqli_query($link, $sqlct)){
														if(mysqli_num_rows($resultct)>0){
															
															while($rowct = mysqli_fetch_array($resultct)){
															echo"<option value='$rowct[CourseCode]'>$rowct[CourseTitle]</option>";	
															}
															}
															}
															?>
											
										</select>
										<?php echo "$CourseCodeError ";   ?>
									</div>
								</div>
								<div class='col-md-6'>
									<div class='form-group'>
										<label>Video Title<spanb>*</spanb></label>
										<input class='form-control' type='text' name='VideoTitle' value="<?php echo $VideoTitle; ?>">
										<?php echo "$VideoTitleError ";   ?>
									</div>
								</div>
								<div class='col-md-6'>
									<div class='form-group'>
										<label>Video Source<spanb>*</spanb></label>
										<select name='Source' class='form-control'>
										<option value='<?php echo $Source;?>'><?php echo $Source;?></option>
										<option value='Internal'>Internal</option>
										<option value='Youtube'>Youtube</option>
										</select>
										<?php echo "$SourceError ";   ?>
									</div>
								</div>
								<div class='col-md-6'>
									<div class='form-group'>
										<label>Video ID <spanb>(If source is Youtube)</spanb></label>
										<input class='form-control' type='text' name='Url' value="<?php echo $Url; ?>">
										<?php echo "$UrlError ";   ?>
									</div>
								</div>
								<div class='col-md-6'>
									<div class='form-group'>
									<label>Select Video (Max size 50MB mp4) <spanb>(If source is Internal)</spanb></label>
										<input class='form-control' type='file' name='VideoClip'>
											<?php echo "$mimeError $VideoError $VideoErrorb ";   ?>
									</div>
								</div>
								<div class='col-md-6'>
									<div class='form-group'></br>
										<button type='submit' class='btn btn-secondary btn-sm'>
										Update
									</button>
									</div>
								</div>
							</div>
						</form>
					</div>
					<!-- Select-2 end -->
					<!-- Bootstrap Select Start -->
					
					<!-- Bootstrap Select End -->
					
					<!-- Bootstrap TouchSpin Start -->
					
					<!-- Bootstrap TouchSpin End -->
				</div>
				<?php require_once 'footer.php'; ?>
			</div>
		</div>
		<!-- welcome modal start -->
	
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- switchery js -->
		<script src="src/plugins/switchery/switchery.min.js"></script>
		<!-- bootstrap-tagsinput js -->
		<script src="src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<!-- bootstrap-touchspin js -->
		<script src="src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
		<script src="vendors/scripts/advanced-components.js"></script>
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
