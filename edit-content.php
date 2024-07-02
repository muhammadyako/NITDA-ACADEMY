<?php
require_once 'connectors/session.php';
require_once 'connectors/conn.php';
//require_once 'connectors/functionsb.php';
//AddVideo();


if(isset($_GET['RefId'])){
$RefId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['RefId'])));
$OId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['OId'])));
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_GET['Cc'])));


 $sql = " SELECT * FROM outline WHERE RefId='$RefId'";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_array($result);	
		if($rownum=mysqli_num_rows($result)){}
		$RefId="$row[RefId]";
		$$CourseCode="$row[$CourseCode]";
		$Outline="$row[Outline]";
		$Content="$row[Content]";
		
}
}
}




if(isset($_POST["Outline"])){
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CourseCode'])));
$Outline =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Outline'])));
//$Content =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Content'])));
$Content = $_POST['Content'];
$Ebookname="$CourseCode$EbookTitle.pdf";

$RefId=time();
$da= getdate();
$Date="$da[mday] $da[month] $da[year]";

		//if (!empty($_FILES['Ebook']['tmp_name'])){
		//$finfo = finfo_open(FILEINFO_MIME_TYPE);
		//$ebookmime=finfo_file($finfo,$_FILES['Ebook']['tmp_name']);
		//}

		if (empty($_POST['CourseCode'])){
		$CourseCodeError = "<spanb>Select Course</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Outline'])){
		$OutlineError = "<spanb>Enter Outline title</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Content'])){
		$ContentError = "<spanb>Enter Outline Content</spanb>";
		$errors = 1;
		}

if($errors == 0){
$upd="UPDATE outline SET Outline='$Outline', Content='$Content' WHERE RefId='$RefId'";
	
	if(mysqli_query ($link, $upd)){
//move_uploaded_file($_FILES['Ebook']['tmp_name'],"courseware/$Ebookname");
$msg= "<center><msg>Updated Successfully!</msg></center>";
}else{
$msg= "<center><spanb>Not Updated!</spanb></center>";	
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
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Course Content</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Add course content
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								
							</div>
						</div>
					</div>

					<div class="html-editor pd-20 card-box mb-30">
						<h4 class="h4 text-blue">Add course content</h4>
						<p>Course outline and content</p>
						
						<center><?php echo "$msg";?></center>
						<form method="post" action="" enctype="multipart/form-data">
						<div class='form-group'>
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
						<div class="form-group">
										<label>Course Outline(Title)<spanb>*</spanb></label>
										<input type="text" name="Outline" class="form-control" value="<?php echo "$Outline"; ?>" />										
										<?php echo "$OutlineError ";   ?>
									</div>
									<div class="form-group">
									<label>Course Outline Content<spanb>*</spanb></label>
						<textarea name="Content"
							class="textarea_editor form-control border-radius-0"
							placeholder="Enter text ..."
						><?php echo "$Content"; ?></textarea>
						<?php echo "$ContentError ";   ?>
						</div>
						
						<div class='form-group'></br>										
									<button type="submit" name="Cat"
										class="btn btn-success btn-lg btn-block">Submit</button>
										<?php echo "$CatthumbnailError";   ?>
									</div>
									</form>
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
