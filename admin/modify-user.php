<?php
require_once 'connectors/session.php';
require_once 'connectors/conn.php';
//require_once 'connectors/functions.php';


//AddCourse();
if(isset($_GET["UId"])){
$UserId =  strtoupper(mysqli_real_escape_string  ($link,$_GET['UId']));	
$Email =  strtoupper(mysqli_real_escape_string  ($link,$_GET['Email']));	
	
 $sql = " SELECT * FROM user WHERE UserId='$UserId' OR Email='$Email'";
	
		if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result)>0){
		
		if($rownum=mysqli_num_rows($result)){}
while($row = mysqli_fetch_array($result)){
	$UserId="$row[UserId]";
$Email="$row[Email]";
$Fname="$row[Fname]";
$Mname="$row[Mname]";
$Sname="$row[Sname]";
$Phoneno="$row[Phoneno]";
$Role="$row[Role]";
$Status="$row[Status]";


if($usercategory == A){
$usercategoryb='Administrator';	
}
if($usercategory == PU){
$usercategoryb='User';	
}
if($usercategory == MU){
$usercategoryb='Ministry User';	
}
if($usercategory == HE){
$usercategoryb='Excellency';	
}
}	
}
}
}

if(isset($_POST['Update'])){
$Fname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Fname'])));
$Sname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Sname'])));
$Mname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Mname'])));
$Email =  htmlspecialchars(strtolower(mysqli_real_escape_string  ($link,$_POST['Email'])));
$Fname =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Fname'])));
$Phoneno =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Phoneno'])));
$Role =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Role'])));
$Status =  htmlspecialchars(ucwords(mysqli_real_escape_string  ($link,$_POST['Status'])));
//$Password= MD5(Sha1('$Phoneno'));


		if (empty($_POST['Fname'])){
		$FnameError = "<spanb>Enter First Name</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Sname'])){
		$SnameError = "<spanb>Enter Surname</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Email'])){
		$EmailError = "<spanb>Enter Email</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Phoneno'])){
		$PhonenoError = "<spanb>Enter Phone Number</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Role'])){
		$RoleError = "<spanb>Select User Role</spanb>";
		$errors = 1;
		}
		if (empty($_POST['Status'])){
		$StatusError = "<spanb>Select User Status</spanb>";
		$errors = 1;
		}
		
		if($errors == 0){



$upd="UPDATE user SET Email='$Email',Fname='$Fname',Mname='$Mname',Sname='$Sname',Phoneno='$Phoneno', Role='$Role',Status='$Status' WHERE UserId='$UserId'";
	
	if(mysqli_query ($link, $upd)){

				$msg="<center><msg>Updated Successfully</msg></center>";
				}else{
				$msg="<center><spanb>Error Occured not updated</spanb></center>";
				}				
}
}
//else
//{
//echo "ERROR: could not be able to execute $sql." . mysqli_error($link);
//mysqli_close($link);
//}

//echo $sql;
//echo $upd;
//echo "$message   <p> $email";
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
									<h4>Modify User</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Modify
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
								<center><h4 class="text-blue h4">Modify User</h4></center>								
							</div>
							</br><?php echo $msg; ?>
							<div class="pull-right">
								<a
									href="users.php"
									class="btn btn-primary btn-sm scroll-click"
									rel="content-y"
									
									role="button"
									><i class="fa fa-code"></i> Back to users</a
								>
							</div>
						</div>
						<form name="Categoryform" method="post" class="" action="">						
													
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>First Name<spanb>*</spanb></label>
										<input type="text" class="form-control" name="Fname" value="<?php echo $Fname; ?>" />
										<?php echo "$FnameError $FnameErrorb  ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Surname<spanb>*</spanb></label>
										<input type="text" class="form-control" name="Sname" value="<?php echo $Sname; ?>" />
										<?php echo "$SnameError $SnameErrorb  ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Middle Name</label>
										<input type="text" class="form-control" name="Mname" value="<?php echo $Mname; ?>" />
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email<spanb>*</spanb></label>
										<input type="Email" class="form-control" name="Email" value="<?php echo $Email; ?>" />
										<?php echo "$EmailError $EmailErrorb  ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Phone No.<spanb>*</spanb></label>
										<input type="number" class="form-control" name="Phoneno" value="<?php echo $Phoneno; ?>" />
										<?php echo "$PhonenoError $PhonenoErrorb  ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Role<spanb>*</spanb></label>
										<select class="form-control" name="Role" name="Role">
										<?php echo"<option value='$Role'>$Role</option>"; ?>
										<option value="Administrator">Administrator</option>
										<option value="Instructor">Instructor</option>										
										</select>
										<?php echo "$RoleError ";   ?>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>User Status<spanb>*</spanb></label>
										<select class="form-control" name="Status" >
										<?php echo"<option value='$Status'>$Status</option>"; ?>
										<option value="Active">Active</option>
										<option value="Inactive">Inactive</option>										
										</select>
										<?php echo "$StatusError ";   ?>
									</div>
								</div>
								
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<button type="submit" name="Update"
										class="btn btn-success btn-lg btn-block">Submit</button>
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
