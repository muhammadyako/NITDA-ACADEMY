<?php
require_once 'connectors/conn.php';
require_once 'connectors/session.php'; 
//require_once 'connectors/adm-page.php';											
//require_once 'connectors/connection.php';


$i=0;


$start=0;
$limit=1;

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;
}
else{
	$id=1;
}

if(isset($_GET['ref'])){
	$ru= strtoupper(mysqli_real_escape_string ($link,$_GET['ru']));
	$sqls = " SELECT * FROM user WHERE UserId='$ru' ";
	
		$results = mysqli_query($link, $sqls);
		$rows = mysqli_fetch_array($results);
	$dl="
	<spanb>Are you sure you want to delete $rows[Fname] $rows[Mname] $rows[Sname] $rows[Email]?</spanb>
	<form name='delete' method='post' action='users.php'><input type='hidden' name='UserId' value='$ru'>
	<button type='submit'>Yes</button>	<button><a href='users.php'>No</button></form>	
	
	";
}

if(isset($_POST['UserId']))
{
	
$UserId = strtoupper(mysqli_real_escape_string ($link,$_POST['UserId']));
$action = strtoupper(mysqli_real_escape_string ($link,$_POST['action']));	
	


$apply= "DELETE FROM user WHERE UserId='$UserId'"; 
		
		if(mysqli_query ($link, $apply)){
			$msg='<center><msg>Deleted Successfully</msg></center>';
		}			
}

		
		
  
  
	 $sql = " SELECT * FROM user ";
	
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
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/dataTables.bootstrap4.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/datatables/css/responsive.bootstrap4.min.css"
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
									<h4>Users</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Users
										</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
					<!-- Simple Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">Users</h4>
							<p>
								<?php echo "$dl"; ?>
								<?php echo "$msg"; ?>
							</p>
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus datatable-nosort">Sn</th>
										<th>User Id</th>
										<th>Full Name</th>
										<th>Email</th>
										<th>Role</th>
										<th>Status</th>
										<th class="datatable-nosort"><spanb>Action<spanb></th>
									</tr>
								</thead>
								<tbody>
								
								<?php
                                          while($row = mysqli_fetch_array($result) AND $i<=$total){
												$i++; 
												$ref=time();

												 $ucat=$row['usercategory'];
												 if($ucat==A){
													$ucategory='Administrator';
												 }
												 if($ucat==PU){
													$ucategory='User';
												 }
												 if($ucat==MU){
													$ucategory='Ministry User';
												 }
									echo"
									<tr>
										<td class=table-plus>$i</td>
										<td>$row[UserId]</td>
										<td>$row[Fname] $row[Mname] $row[Sname]</td>
										<td>$row[Email]</td>
										<td>$row[Role]</td>";
										if($row[Status]=="Active"){
										echo"<td><msg>$row[Status]</msg></td>";
										}else{
											echo"<td><spanb>$row[Status]</spanb></td>";
										}
										echo "
										<td>
											<div class='dropdown'>
												<a
													class='btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle'
													href='#'
													role='button'
													data-toggle='dropdown'
												>
													<i class='dw dw-more'></i>
												</a>
												<div
													class='dropdown-menu dropdown-menu-right dropdown-menu-icon-list'
												>
													<a class='dropdown-item' href='user-profile.php?UId=$row[UserId]$Email=$row[Email]'
														><i class='dw dw-eye'></i> View</a
													>
													<a class='dropdown-item' href='modify-user.php?UId=$row[UserId]'
														><i class='dw dw-edit2'></i> Modify</a
													>
													<a class='dropdown-item' href='?ref=$ref&ru=$row[UserId]&s=$ref$row[UserId]$ref'
														><i class='dw dw-delete-3'></i> Delete</a
													>"; }
										
										
											?>
												</div>
											</div>
										</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
					<!-- Simple Datatable End -->
					<!-- multiple select row Datatable start -->
					
					<!-- multiple select row Datatable End -->
					<!-- Checkbox select Datatable start -->
					
					<!-- Checkbox select Datatable End -->
					<!-- Export Datatable start -->
					
					<!-- Export Datatable End -->
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
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<!-- buttons for Export datatable -->
		<script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.print.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
		<script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
		<script src="src/plugins/datatables/js/pdfmake.min.js"></script>
		<script src="src/plugins/datatables/js/vfs_fonts.js"></script>
		<!-- Datatable Setting js -->
		<script src="vendors/scripts/datatable-setting.js"></script>
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
