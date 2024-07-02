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
	$sqls = " SELECT * FROM category WHERE CategoryId='$ru' ";
	
		$results = mysqli_query($link, $sqls);
		$rows = mysqli_fetch_array($results);
	$dl="
	<spanb>Are you sure you want to delete $rows[CategoryName]?</spanb>
	<form name='delete' method='post' action='categories.php'><input type='hidden' name='CategoryIdId' value='$ru'>
	<button type='submit'>Yes</button>	<button><a href='categories.php'>No</button></form>	
	
	";
}

if(isset($_POST['CategoryId']))
{
	
$CategoryId = strtoupper(mysqli_real_escape_string ($link,$_POST['CategoryId']));
$action = strtoupper(mysqli_real_escape_string ($link,$_POST['action']));	
	


$apply= "DELETE FROM category WHERE CategoryId='$CategoryId'"; 
		
		if(mysqli_query ($link, $apply)){
			$msg='<center><msg>Deleted Successfully</msg></center>';
		}			
}

		
		
  
  
	 $sql = " SELECT * FROM category ";
	
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
			<div class="xs-pd-20-10 pd-ltr-20">							
				<div class="row">		
									
				</div>

				<div class="card-box pb-10">
					<div class="h5 pd-20 mb-0">Categories</div>
					<center><?php echo "$dl"; ?></center></br>
					<table class="data-table table nowrap">
						<thead>
							<tr>
								<th class="table-plus">Category</th>
								<th>Description</th>
								
								<th class="datatable-nosort">Actions</th>
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
								<td class='table-plus'>
									<div class='name-avatar d-flex align-items-center'>
										<div class='avatar mr-2 flex-shrink-0'>
											
										</div>
										<div class='txt'>
											<div class='weight-600'>$row[CategoryName]</div>
										</div>
									</div>
								</td>
								<td>$row[Description]</td>
								
								
								<td>
									<div class='table-actions'>
										<a href='modify-category.php?CId=$row[CategoryId]' data-color='#265ed7'
											><i class='icon-copy dw dw-edit2'></i
										></a>
										<a href='?ref=$ref&ru=$row[CategoryId]&s=$ref$row[CategoryId]$ref' data-color='#e95959'
											><i class='icon-copy dw dw-delete-3'></i
										></a>
									</div>
								</td>
										  </tr>"; }?>
							
						</tbody>
					</table>
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
		<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
		<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
		<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
		<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
		<script src="vendors/scripts/dashboard3.js"></script>
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
