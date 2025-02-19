<?php
require_once 'connectors/session.php';
require_once 'connectors/conn.php';
//require_once 'connectors/functions.php';


//AddCourse();
if(isset($_GET["LId"])){
$LId =  strtoupper(mysqli_real_escape_string  ($link,$_GET['LId']));	
$Email =  strtoupper(mysqli_real_escape_string  ($link,$_GET['Email']));	
	
 $sql = " SELECT * FROM learner WHERE LId='$LId' OR Email='$Email'";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		
		if($rownum=mysqli_num_rows($result)){}
while($row = mysqli_fetch_array($result)){
	$LId="$row[LId]";
$Email="$row[Email]";
$PhoneNo="$row[PhoneNo]";
$Fname="$row[Fname]";
$Mname="$row[Mname]";
$Sname="$row[Sname]";
$Gender="$row[Gender]";
$Dob="$row[Dob]";
$State="$row[State]";
$Lga="$row[Lga]";
$UserIp="$row[UserIp]";
$DateJoin="$row[DateJoin]";
$Status="$row[Status]";
}
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
			href="src/plugins/cropperjs/dist/cropper.css"
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
									<h4>Learner Profile</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Profile
										</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
							<div class="pd-20 card-box height-100-p">
								<div class="profile-photo">
									<a
										href="modal"
										data-toggle="modal"
										data-target="#modal"
										class="edit-avatar"
										><i class="fa fa-pencil"></i
									></a>
									<img
										src="vendors/images/photo1.jpg"
										alt=""
										class="avatar-photo"
									/>
									<div
										class="modal fade"
										id="modal"
										tabindex="-1"
										role="dialog"
										aria-labelledby="modalLabel"
										aria-hidden="true"
									>
										<div
											class="modal-dialog modal-dialog-centered"
											role="document"
										>
											<div class="modal-content">
												<div class="modal-body pd-5">
													<div class="img-container">
														<img
															id="image"
															src="vendors/images/photo2.jpg"
															alt="Picture"
														/>
													</div>
												</div>
												<div class="modal-footer">
													<input
														type="submit"
														value="Update"
														class="btn btn-primary"
													/>
													<button
														type="button"
														class="btn btn-default"
														data-dismiss="modal"
													>
														Close
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<h5 class="text-center h5 mb-0"><?php echo "$Fname $Mname $Sname"; ?></h5>
								<p class="text-center text-muted font-14">
									Learner ID: <?php echo "$LId"; ?>
								</p>
								<div class="profile-info">
									<h5 class="mb-20 h5 text-blue">User Information</h5>
									<ul>
										<li>
											<span>Email Address:</span>
											<?php echo "$Email"; ?>
										</li>
										<li>
											<span>Phone Number:</span>
											<?php echo "$PhoneNo"; ?>
										</li>
										<li>
											<span>Gender:</span>
											<?php echo "$Gender"; ?>
										</li>
										<li>
											<span>Birth Date:</span>
											<?php echo "$Dob"; ?>
										</li>
										<li>
											<span>State:</span>
											<?php echo "$State"; ?>
										</li>
										<li>
											<span>Lga:</span>
											<?php echo "$Lga"; ?>
										</li>
										<li>
											<span>Date Joined:</span>
											<?php echo "$DateJoin"; ?>
										</li>
										<li>
											<span>IP Address:</span>
											<?php echo "$UserIp"; ?>
										</li>
										<li>
											<span>Status:</span>
										<?php echo "$Status"; ?>
										</li>
									</ul>
								</div>
								
								
							</div>
						</div>
						
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
							<div class="card-box height-100-p overflow-hidden">
								<div class="profile-tab height-100-p">
									<div class="tab height-100-p">
										<ul class="nav nav-tabs customtab" role="tablist">
											<li class="nav-item">
												<a
													class="nav-link active"
													data-toggle="tab"
													href="#timeline"
													role="tab"
													>Courses</a
												>
											</li>
											<li class="nav-item">
												<a
													class="nav-link"
													data-toggle="tab"
													href="#tasks"
													role="tab"
													>Tasks</a
												>
											</li>
											<li class="nav-item">
												<a
													class="nav-link"
													data-toggle="tab"
													href="#setting"
													role="tab"
													>Settings</a
												>
											</li>
										</ul>
										<div class="tab-content">
											<!-- Timeline Tab start -->
											<div
												class="tab-pane fade show active"
												id="timeline"
												role="tabpanel"
											>
												<div class="pd-20">
													<div class="profile-timeline">
													<table width="100%">
													<tr><th>Date Enrolled</th><th>Course Code</th><th>Course Title</th><th>Status</th></tr>
													<?php
													$sqlb = " SELECT * FROM enrollment WHERE LId='$LId' OR Email='$Email'";	
													if($resultb = mysqli_query($link, $sqlb)){
													if(mysqli_num_rows($resultb)>0){		
													//if($rownum=mysqli_num_rows($result)){}
													while($rowb = mysqli_fetch_array($resultb)){
													echo"<tr><td>$rowb[SDate]</td><td>$rowb[CourseCode]</td><td>$rowb[CourseTitle]</td><td>$rowb[Status]</td></tr>";
													
													}
													}
													}
													?>
													</table>
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
		<script src="src/plugins/cropperjs/dist/cropper.js"></script>
		<script>
			window.addEventListener("DOMContentLoaded", function () {
				var image = document.getElementById("image");
				var cropBoxData;
				var canvasData;
				var cropper;

				$("#modal")
					.on("shown.bs.modal", function () {
						cropper = new Cropper(image, {
							autoCropArea: 0.5,
							dragMode: "move",
							aspectRatio: 3 / 3,
							restore: false,
							guides: false,
							center: false,
							highlight: false,
							cropBoxMovable: false,
							cropBoxResizable: false,
							toggleDragModeOnDblclick: false,
							ready: function () {
								cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
							},
						});
					})
					.on("hidden.bs.modal", function () {
						cropBoxData = cropper.getCropBoxData();
						canvasData = cropper.getCanvasData();
						cropper.destroy();
					});
			});
		</script>
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
