<?php
require_once 'connectors/session.php';
require_once 'connectors/conn.php';
//require_once 'connectors/functions.php';


//AddCourse();
if(isset($_GET["CourseCode"])){
$Id =  strtoupper(mysqli_real_escape_string  ($link,$_GET['Id']));	
$CourseCode =  strtoupper(mysqli_real_escape_string  ($link,$_GET['CourseCode']));
$RefId =  strtoupper(mysqli_real_escape_string  ($link,$_GET['RefId']));	
	
 }

if(isset($_POST['Add'])){
$Id =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Id'])));
$CourseCode =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['CourseCode'])));
$RefId =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['RefId'])));
$Que =  mysqli_real_escape_string  ($link,$_POST['Que']);
$A =  mysqli_real_escape_string  ($link,$_POST['A']);
$B =  mysqli_real_escape_string  ($link,$_POST['B']);
$C =  mysqli_real_escape_string  ($link,$_POST['C']);
$D =  mysqli_real_escape_string  ($link,$_POST['D']);
$Ans =  ucwords(mysqli_real_escape_string  ($link,$_POST['Ans']));
//$Password= MD5(Sha1('$Phoneno'));


		
		if (empty($_POST['CourseCode'])){
		$CourseCodeError = "<spanb>Enter CourseCode</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Que'])){
		$QueError = "<spanb>Enter Question</spanb>";
		$errors = 1;
		}
		if (empty($_POST['A'])){
		$AError = "<spanb>Enter Option A</spanb>";
		$errors = 1;
		}
		if (empty($_POST['B'])){
		$BError = "<spanb>Enter Option B</spanb>";
		$errors = 1;
		}
		if (empty($_POST['C'])){
		$CError = "<spanb>Enter Option C</spanb>";
		$errors = 1;
		}
		if (empty($_POST['D'])){
		$DError = "<spanb>Enter Option D</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Ans'])){
		$AnsError = "<spanb>Enter Option Ans</spanb>";
		$errors = 1;
		}
		
		if($errors == 0){



$sql = " INSERT INTO myquiz (CourseCode,RefId,que,A,B,C,D,ans) VALUES 
('$CourseCode','$RefId', '$Que','$A','$B','$C','$D','$Ans')";	
if(mysqli_query ($link, $sql)){
$msg="<center><msg>Added Successfully</msg></center>";
				}else{
				$msg="<center><spanb>Error Occured not Added</spanb></center>";
				}		
}
}
echo $sql;
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
									<h4>Add Quiz</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Add
										</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
	

	

					<!-- Form grid Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<center><h4 class="text-blue h4">Add Question</h4></center>								
							</div>
							</br><?php echo $msg; ?>							
							<div class="pull-right">
								<a
									href="quiz.php?CourseCode=<?php echo $CourseCode;  ?>"
									class="btn btn-primary btn-sm scroll-click"
									rel="content-y"
									
									role="button"
									><i class="fa fa-code"></i> Back to Question</a
								>
							</div>
						</div>
						<form name="Categoryform" method="post" class="" action="">						
													
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Question<spanb>*</spanb></label>										
										<input type="hidden" class="form-control" name="CourseCode" value="<?php echo $CourseCode; ?>" />
										<input type="hidden" class="form-control" name="RefId" value="<?php echo $RefId; ?>" />
										<textarea class="form-control" style="height: 60px;" name="Que"><?php echo $Que; ?></textarea>
										
										<?php echo "$QueError $QueErrorb  ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Option A<spanb>*</spanb></label>
										<textarea class="form-control" style="height: 60px;" name="A"><?php echo $A; ?></textarea>										
										<?php echo "$AError $AErrorb  ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Option B</label>
										<textarea class="form-control" style="height: 60px;" name="B"><?php echo $B; ?></textarea>										
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Option C<spanb>*</spanb></label>
										<textarea class="form-control" style="height: 60px;" name="C"><?php echo $C; ?></textarea>										
										<?php echo "$CError $CErrorb  ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Option D<spanb>*</spanb></label>
										<textarea class="form-control" style="height: 60px;" name="D"><?php echo $D; ?></textarea>
										<?php echo "$DError $DErrorb  ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Answer<spanb>*</spanb></label>
										<select class="form-control" style="height: 60px;" name="Ans">
										<?php echo"<option value='$Ans'>$Ans</option>"; ?>
										<option value="A">A</option>
										<option value="B">B</option>
										<option value="C">C</option>
										<option value="D">D</option>
										</select>
										<?php echo "$AnsError ";   ?>
									</div>
								</div>
								
								
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<button type="submit" name="Add"
										class="btn btn-success btn-lg btn-block">Add</button>
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
