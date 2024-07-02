<?php
require_once 'connectors/session.php';
require_once 'connectors/conn.php';
//require_once 'connectors/functions.php';


//AddCourse();
if(isset($_POST["CategoryId"])){
$Course =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Course'])));
$CategoryId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CategoryId'])));
//$CategoryName =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CategoryName'])));
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CourseCode'])));
$CourseTitle=  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CourseTitle'])));
$TopCourse =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['TopCourse'])));
$Provider =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Provider'])));
$Url =  htmlspecialchars(strtolower(mysqli_real_escape_string  ($link,$_POST['Url'])));
$Description =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Description'])));
$Overview =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Overview'])));
$Eligibility =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Eligibility'])));
$Requirement =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Requirement'])));
$Duration =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Duration'])));
$Status =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Status'])));

$AddedBy =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CourseCode'])));
$videoname="$ProjectId.mp4";
$RefId=time();
$da= getdate();
$Date="$da[mday] $da[month] $da[year]";
$Thumbnailname = "$RefId.png";
$CourseMaterialname = "$RefId.pdf";

if (!empty($_FILES['Thumbnail']['tmp_name'])){
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$Thumbnailmime=finfo_file($finfo,$_FILES['Thumbnail']['tmp_name']);
}
if (!empty($_FILES['CourseMaterial']['tmp_name'])){
$finfob = finfo_open(FILEINFO_MIME_TYPE);
$CourseMaterialmime=finfo_file($finfo,$_FILES['CourseMaterial']['tmp_name']);
}

		$check = " SELECT * FROM course WHERE CategoryId='$CategoryId' AND CourseTitle='$CourseTitle' ";	
		 $result = mysqli_query($link, $check);		
		 $row = mysqli_fetch_array($result);	
		 $rownum=mysqli_num_rows($result);
		 

		if ($rownum >0){
		$ExistCourse = "<spanb>The Course <b> $CourseCode: $CourseTitle </b>already exist</spanb>";
		$errors = 1;
		}
		if (empty($_POST['CourseTitle'])){
		$CourseTitleError = "<spanb>Enter Course Title</spanb>";
		$errors = 1;
		}
		if (empty($_POST['CourseCode'])){
		$CourseCodeError = "<spanb>Enter Course</spanb>";
		$errors = 1;
		}
		if (empty($_POST['CategoryId'])){
		$CategoryIdError = "<spanb>Select Category</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Provider'])){
		$ProviderError = "<spanb>Select Provider</spanb>";
		$errors = 1;
		}
		if (empty($_FILES['Thumbnail']['tmp_name'])){
		$ThumbnailError = "<spanb>Select Course Thumbnail</spanb>";
		$errors = 1;
		}
		if ($_FILES['Thumbnail']['size'] > 60600 ){
		$ThumbnailErrorb = "<spanb>Picture 1 is too large <b>not larger than 60kb is accepted</b></span>";
		$errors = 1;
		}
		//if ($Thumbnailmime !=='application/jpg'){
		//$mimedegreeError = "<spanb> video MP4 format is only accepted</b></span>";
		//$errors = 1;
		//}
		if (empty($_FILES['CourseMaterial']['tmp_name'])){
		$CourseMaterialError = "<spanb>Select Course Material PDF</spanb>";
		$errors = 1;
		}
		if ($CourseMaterialmime !=='application/pdf'){
		$CourseMaterialError = "<spanb> Course Material PDF format only accepted</b></span>";
		$errors = 1;
		}
		if (empty($_POST['Duration'])){
		$DurationError = "<spanb>Select Duration</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Status'])){
		$StatusError = "<spanb>Select Status</spanb>";
		$errors = 1;
		}

		 $sqla = " SELECT * FROM category WHERE CategoryId='$CategoryId' ";	
		 $result = mysqli_query($link, $sqla);
		 $row = mysqli_fetch_array($result);
		 $CategoryName = $row['CategoryName'];
		if($errors == 0){	

$sql = " INSERT INTO course (CategoryId,CategoryName,RefId,CourseCode, CourseTitle,Provider,Url,Eligibility,Description,Overview,Requirement,DateAdded,LastUpdated,Thumbnail,Duration,Status,Count,TopCourse,AddedBy) VALUES 
('$CategoryId','$CategoryName', '$RefId', '$CourseCode','$CourseTitle','$Provider','$Url','$Eligibility','$Description','$Overview','General','$Date','$Date','$Thumbnailname','$Duration','$Status','0','$TopCourse','$AddedBy')";	
if(mysqli_query ($link, $sql)){

if (!empty($_FILES['Thumbnail']['tmp_name'])){
 move_uploaded_file($_FILES['Thumbnail']['tmp_name'],"thumbnail/$Thumbnailname");
}
 if (!empty($_FILES['CourseMaterial']['tmp_name'])){
 move_uploaded_file($_FILES['CourseMaterial']['tmp_name'],"courseware/$CourseMaterialname");
 }
$msg= "<center><msg>Course added Successfully!</msg></center>";
}else{
$msg= "<center><spanb>An Error Occured Processing! </spanb></center>";
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
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/jquery-steps/jquery.steps.css"
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
									<h4>Add Course</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Add course
										</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>

					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
						
							<h4 class="text-blue h4">Add New Course</h4>							
							<!--<p class="mb-30">jQuery Step wizard</p>-->
						</div>
						</br><?php echo "<center>$msg $ExistCourse</center>"; ?>
						<div class="wizard-content">
							<form class="tab-wizard wizard-circle wizard" method="post" action="" enctype="multipart/form-data">
								<h5>Course Info</h5>
								<section>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Category<spanb>*</spanb></label>
										<select class="custom-select form-control" name="CategoryId">
																			 <?php echo"<option value='$CategoryId'>$CategoryId</option>";  ?>
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
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Course Code<spanb>*</spanb></label>										
										<input type="text" name="CourseCode" class="form-control" value="<?php echo $CourseCode; ?>" />										
										<?php echo "$CourseCodeError ";   ?>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Course Title<spanb>*</spanb></label>
										<input type="text" name="CourseTitle" class="form-control" value="<?php echo $CourseTitle; ?>" />
										<?php echo "$CourseTitleError";   ?>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Is Top Course? :</label>
												<select class="custom-select form-control" name="TopCourse">
													 <?php echo"<option value='$TopCourse'>$TopCourse</option>";  ?>
													<option value="Yes">Yes</option>
													<option value="No">No</option>													
												</select>
											</div>
										</div>
									</div>
<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Course Provider<spanb>*</spanb></label>
										<select class="custom-select form-control" name="Provider">
																			 <?php echo"<option value='$Provider'>$Provider</option>";  ?>
																			 <?php echo"<option value='NITDA'>NITDA</option>
																						<option value='Third party'>Third party</option>";
																			 
																			 ?>
																			 
                                                            //<?php 
															// $sqlct = " SELECT * FROM Category";
														//if($resultct = mysqli_query($link, $sqlct)){
														//if(mysqli_num_rows($resultct)>0){
															
															//while($rowct = mysqli_fetch_array($resultct)){
															//echo"<option value='$rowct[CategoryId]'>$rowct[CategoryName]</option>";	
															//}
															//}
															//}
															?>
																		</select>
																		<?php echo "$ProviderError";   ?>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Url Link (If third party)</label>
										<input type="text" name="Url" class="form-control" value="<?php echo $Url; ?>" />										
										<?php echo "$LinkError ";   ?>
											</div>
										</div>
									</div>									
								</section>
								<!-- Step 2 -->
								<h5>Description & Overview</h5>
								<section>
									<div class="row">
										
										<div class="col-md-12">
											<div class="form-group">
												<label>Eligibility:</label>
												<textarea class="form-control" name="Eligibility"><?php echo "$Eligibility"; ?></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										
										<div class="col-md-12">
											<div class="form-group">
												<label>Course Description :</label>
												<textarea class="form-control" name="Description"><?php echo "$Description"; ?></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										
										<div class="col-md-12">
											<div class="form-group">
												<label>Course Overview :</label>
												<textarea class="form-control" name="Overview"><?php echo "$Overview"; ?></textarea>
											</div>
										</div>
									</div>
								</section>
								<!-- Step 3 -->
								<h5>Uploads</h5>
								<section>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Thumbnail(png/jpeg/jpg)<spanb>*</spanb></label>
												<input type="file" name="Thumbnail" class="form-control" />
												<?php echo "$ThumbnailError $ThumbnailErrorb $ThumbnailErrorc";   ?>
											</div>
											<div class="form-group">
												<label>Status<spanb>*</spanb></label>
												<select class="custom-select form-control" name="Status">
													 <?php echo"<option value='$Status'>$Status</option>";  ?>
													<option value="Active">Active</option>
													<option value="Inactive">Inactive</option>													
												</select>	
													<?php echo "$StatusError";   ?>
											</div>		
					<!--						<div class="form-group">
												<label>Course Material(Pdf)<spanb>*</spanb></label>
												<input type="file" name="CourseMaterial" class="form-control" />
												<?php //echo "$CourseMaterialError $CourseMaterialErrorb $CourseMaterialErrorc";   ?>
											</div>				-->
										</div>
										
										<div class="col-md-6">
										<div class="form-group">
												<label>Duration(Months)<spanb>*</spanb></label>
												<select class="custom-select form-control" name="Duration">
													 <?php echo"<option value='$Duration'>$Duration</option>";  ?>
													<option value="1 Month">1 Month</option>
													<option value="2 Months">2 Months</option>
													<option value="3 Months">3 Months</option>
													<option value="4 Months">4 Months</option>
													<option value="5 Months">5 Months</option>	
													<option value="6 Months">6 Months</option>
													<option value="7 Months">7 Months</option>	
													<option value="8 Months">8 Months</option>	
													<option value="9 Months">9 Months</option>	
													<option value="10 Months">10 Months</option>	
													<option value="11 Months">11 Months</option>	
													<option value="12 Months">12 Months</option>	
												</select>	
													<?php echo "$StatusError";   ?>
											</div>		
																				
										</div>
									</div>
								</section>			
								
						</div>
					</div>
					

					<!-- success Popup html Start -->
					<div
						class="modal fade"
						id="success-modal"
						tabindex="-1"
						role="dialog"
						aria-labelledby="exampleModalCenterTitle"
						aria-hidden="true"
					>
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-body text-center font-18">
									<h3 class="mb-20">Form Submition!</h3>
									<div class="mb-30 text-center">
										<img src="vendors/images/success.png" />
									</div>
									Confirm Submission 
								</div>
								<div class="modal-footer justify-content-center">
								
								<input class="btn btn-primary" type="submit" value="Send">
									<button type="submit"
										name="submit"
										class="btn btn-primary"
										data-dismiss="modal"
									>
										Cancel
									</button>
									</form
								</div>
							</div>
						</div>
					</div>
					<!-- success Popup html End -->
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
		<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
		<script src="vendors/scripts/steps-setting.js"></script>
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
