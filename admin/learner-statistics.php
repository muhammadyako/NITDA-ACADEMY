<?php
require_once 'connectors/session.php';
require_once 'connectors/conn.php';

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
				<div class="title pb-20">
					<h2 class="h3 mb-0">Learner Statistics</h2>
				</div>
				<?php
				 $sql = "SELECT * FROM learner";
               $query=mysqli_query ($link, $sql);
			   $total=mysqli_num_rows($query);
			   $total= number_format($total);
			   ?>
			   <?php
				 $sql1 = "SELECT * FROM learner WHERE State='FCT'";
               $query1=mysqli_query ($link, $sql1);
			   $fct=mysqli_num_rows($query1);
			   $fct= number_format($fct);
			   ?>
			   <?php
				 $sql2 = "SELECT * FROM learner WHERE State='Abia'";
               $query2=mysqli_query ($link, $sql2);
			   $abia=mysqli_num_rows($query2);
			   $abia= number_format($abia);
			   ?>
			   <?php
				 $sql3 = "SELECT * FROM learner WHERE State='Adamawa'";
               $query3=mysqli_query ($link, $sql3);
			   $adamawa=mysqli_num_rows($query3);
			   $adamawa= number_format($adamawa);
			   ?>
			   <?php
				 $sql4 = "SELECT * FROM learner WHERE State='Akwa Ibom'";
               $query4=mysqli_query ($link, $sql4);
			   $akwaibom=mysqli_num_rows($query4);
			   $akwaibom= number_format($akwaibom);
			   ?>
			   <?php
				 $sql5 = "SELECT * FROM learner WHERE State='Anabra'";
               $query5=mysqli_query ($link, $sql5);
			   $anabra=mysqli_num_rows($query5);
			   $anabra= number_format($anabra);
			   ?>
			   <?php
				 $sql6 = "SELECT * FROM learner WHERE State='Bauchi'";
               $query6=mysqli_query ($link, $sql6);
			   $bauchi=mysqli_num_rows($query6);
			   $bauchi= number_format($bauchi);
			   ?>
			   <?php
				 $sql7 = "SELECT * FROM learner WHERE State='Bayelsa'";
               $query7=mysqli_query ($link, $sql7);
			   $bayelsa=mysqli_num_rows($query7);
			   $bayelsa= number_format($bayelsa);
			   ?>
			   <?php
				 $sql8 = "SELECT * FROM learner WHERE State='Benue'";
               $query8=mysqli_query ($link, $sql8);
			   $benua=mysqli_num_rows($query8);
			   $benue= number_format($benue);
			   ?>
			   <?php
				 $sql9 = "SELECT * FROM learner WHERE State='Borno'";
               $query9=mysqli_query ($link, $sql9);
			   $borno=mysqli_num_rows($query9);
			   $borno= number_format($borno);
			   ?>
			   <?php
				 $sql10 = "SELECT * FROM learner WHERE State='Cross River'";
               $query10=mysqli_query ($link, $sql10);
			   $crossriver=mysqli_num_rows($query10);
			   $crossriver= number_format($crossriver);
			   ?>
			   <?php
				 $sql11 = "SELECT * FROM learner WHERE State='Delta'";
               $query11=mysqli_query ($link, $sql11);
			   $delta=mysqli_num_rows($query11);
			   $delta= number_format($delta);
			   ?>
			   <?php
				 $sql12 = "SELECT * FROM learner WHERE State='Ebonyi'";
               $query12=mysqli_query ($link, $sql12);
			   $ebonyi=mysqli_num_rows($query12);
			   $ebonyi= number_format($ebonyi);
			   ?>
			   <?php
				 $sql13= "SELECT * FROM learner WHERE State='Enugu'";
               $query13=mysqli_query ($link, $sql13);
			   $enugu=mysqli_num_rows($query13);
			   $enugu= number_format($enugu);
			   ?>
			   <?php
				 $sql14 = "SELECT * FROM learner WHERE State='Edo'";
               $query14=mysqli_query ($link, $sql14);
			   $edo=mysqli_num_rows($query14);
			   $edo= number_format($edo);
			   ?>
			   <?php
				 $sql15 = "SELECT * FROM learner WHERE State='Ekiti'";
               $query15=mysqli_query ($link, $sql15);
			   $ekiti=mysqli_num_rows($query15);
			   $ekiti= number_format($ekiti);
			   ?>
			   <?php
				 $sql16 = "SELECT * FROM learner WHERE State='Gombe'";
               $query16=mysqli_query ($link, $sql16);
			   $gombe=mysqli_num_rows($query16);
			   $gombe= number_format($gombe);
			   ?>
			   <?php
				 $sql17 = "SELECT * FROM learner WHERE State='Imo'";
               $query17=mysqli_query ($link, $sql17);
			   $imo=mysqli_num_rows($query17);
			   $imo= number_format($imo);
			   ?>
			   <?php
				 $sql18 = "SELECT * FROM learner WHERE State='Jigawa'";
               $query18=mysqli_query ($link, $sql18);
			   $jigawa=mysqli_num_rows($query18);
			   $jigawa= number_format($jigawa);
			   ?>
			   <?php
				 $sql19 = "SELECT * FROM learner WHERE State='Kaduna'";
               $query19=mysqli_query ($link, $sql19);
			   $kaduna=mysqli_num_rows($query19);
			   $kaduna= number_format($kaduna);
			   ?>
			   <?php
				 $sql20 = "SELECT * FROM learner WHERE State='Kano'";
               $query20=mysqli_query ($link, $sql20);
			   $kano=mysqli_num_rows($query20);
			   $kano= number_format($kano);
			   ?>
			   <?php
				 $sql21 = "SELECT * FROM learner WHERE State='Katsina'";
               $query21=mysqli_query ($link, $sql21);
			   $katsina=mysqli_num_rows($query21);
			   $katsina= number_format($katsina);
			   ?>
			   <?php
				 $sql22 = "SELECT * FROM learner WHERE State='Kebbi'";
               $query22=mysqli_query ($link, $sql22);
			   $kebbi=mysqli_num_rows($query22);
			   $kebbi= number_format($kebbi);
			   ?>
			   <?php
				 $sql23 = "SELECT * FROM learner WHERE State='Kogi'";
               $query23=mysqli_query ($link, $sql23);
			   $kogi=mysqli_num_rows($query23);
			   $kogi= number_format($kogi);
			   ?>
			   <?php
				 $sql24 = "SELECT * FROM learner WHERE State='Kwara'";
               $query24=mysqli_query ($link, $sql24);
			   $kwara=mysqli_num_rows($query24);
			   $kwara= number_format($kwara);
			   ?>
			   <?php
				 $sql25 = "SELECT * FROM learner WHERE State='Lagos'";
               $query25=mysqli_query ($link, $sql25);
			   $lagos=mysqli_num_rows($query25);
			   $lagos= number_format($lagos);
			   ?>
			   <?php
				 $sql26 = "SELECT * FROM learner WHERE State='Nasarawa'";
               $query26=mysqli_query ($link, $sql26);
			   $nasarawa=mysqli_num_rows($query26);
			   $nasarawa= number_format($nasarawa);
			   ?>
			   <?php
				 $sql27 = "SELECT * FROM learner WHERE State='Niger'";
               $query27=mysqli_query ($link, $sql27);
			   $niger=mysqli_num_rows($query27);
			   $niger= number_format($niger);
			   ?>
			   <?php
				 $sql28 = "SELECT * FROM learner WHERE State='Ogun'";
               $query28=mysqli_query ($link, $sql28);
			   $ogun=mysqli_num_rows($query28);
			   $ogun= number_format($ogun);
			   ?>
			   <?php
				 $sql29 = "SELECT * FROM learner WHERE State='Ondo'";
               $query29=mysqli_query ($link, $sql29);
			   $ondo=mysqli_num_rows($query29);
			   $ondo= number_format($ondo);
			   ?>
			   <?php
				 $sql30 = "SELECT * FROM learner WHERE State='Osun'";
               $query30=mysqli_query ($link, $sql30);
			   $osun=mysqli_num_rows($query30);
			   $osun= number_format($osun);
			   ?>
			   <?php
				 $sql31 = "SELECT * FROM learner WHERE State='Oyo'";
               $query31=mysqli_query ($link, $sql31);
			   $oyo=mysqli_num_rows($query31);
			   $oyo= number_format($oyo);
			   ?>
			   <?php
				 $sql32 = "SELECT * FROM learner WHERE State='Plateau'";
               $query32=mysqli_query ($link, $sql32);
			   $plateau=mysqli_num_rows($query32);
			   $plateau= number_format($plateau);
			   ?>
			   <?php
				 $sql33 = "SELECT * FROM learner WHERE State='Rivers'";
               $query33=mysqli_query ($link, $sql33);
			   $rivers=mysqli_num_rows($query33);
			   $rivers= number_format($rivers);
			   ?>
			   <?php
				 $sql34 = "SELECT * FROM learner WHERE State='Sokoto'";
               $query34=mysqli_query ($link, $sql34);
			   $sokoto=mysqli_num_rows($query34);
			   $sokoto= number_format($sokoto);
			   ?>
			   <?php
				 $sql35 = "SELECT * FROM learner WHERE State='Taraba'";
               $query35=mysqli_query ($link, $sql35);
			   $taraba=mysqli_num_rows($query35);
			   $taraba= number_format($taraba);
			   ?>
			   <?php
				 $sql36 = "SELECT * FROM learner WHERE State='Yobe'";
               $query36=mysqli_query ($link, $sql36);
			   $yobe=mysqli_num_rows($query36);
			   $yobe= number_format($yobo);
			   ?>
			   <?php
				 $sql37 = "SELECT * FROM learner WHERE State='Zamfara'";
               $query37=mysqli_query ($link, $sql37);
			   $zamfara=mysqli_num_rows($query37);
			   $zamfara= number_format($zamfara);
			   ?>
			   <?php
			   $sum= $totalc * $totale;
			   $cpercent= $sum / 100;
			    $cpercent= number_format($cpercent);
			   ?>
				<div class="row pb-10">
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $total; ?></div>
									<div class="font-14 text-secondary weight-500">
										<msg><b>Total Users</b></msg>
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-user"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $fct; ?></div>
									<div class="font-14 text-secondary weight-500">
										FCT
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-user"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $abia; ?></div>
									<div class="font-14 text-secondary weight-500">
										Abia
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i
											class="icon-copy fa fa-user"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo "$adamawa"; ?></div>
									<div class="font-14 text-secondary weight-500">Adamawa</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="icon-copy fa fa-user" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div> 
					
					
					
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $akwaibom; ?></div>
									<div class="font-14 text-secondary weight-500">
										Akwa Ibom
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-user"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $anabra; ?></div>
									<div class="font-14 text-secondary weight-500">
										Anabra
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-user"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $bauchi; ?></div>
									<div class="font-14 text-secondary weight-500">
										Bauchi
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i
											class="icon-copy fa fa-user"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo "$bayelsa";; ?></div>
									<div class="font-14 text-secondary weight-500">Bayelsa</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="icon-copy fa fa-user" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div> 
					
					
					
					
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $benue; ?></div>
									<div class="font-14 text-secondary weight-500">
										Benue
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-user"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $borno; ?></div>
									<div class="font-14 text-secondary weight-500">
										Borno
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-user"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $crossriver; ?></div>
									<div class="font-14 text-secondary weight-500">
										Cross River
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i
											class="icon-copy fa fa-user"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo "$delta"; ?></div>
									<div class="font-14 text-secondary weight-500">Delta</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="icon-copy fa fa-user" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div> 
					
					
					
					
					
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $ebonyi; ?></div>
									<div class="font-14 text-secondary weight-500">
										Ebonyi
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-user"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $enugu; ?></div>
									<div class="font-14 text-secondary weight-500">
										Enugu
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-user"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $edo; ?></div>
									<div class="font-14 text-secondary weight-500">
										Edo
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i
											class="icon-copy fa fa-user"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo "$ekiti"; ?></div>
									<div class="font-14 text-secondary weight-500">Ekiti</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="icon-copy fa fa-user" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div> 
					
					
					
					
					
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $gombe; ?></div>
									<div class="font-14 text-secondary weight-500">
										Gombe
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-user"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $imo; ?></div>
									<div class="font-14 text-secondary weight-500">
										Imo
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-user"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $jigawa; ?></div>
									<div class="font-14 text-secondary weight-500">
										Jigawa
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i
											class="icon-copy fa fa-user"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo "$kaduna"; ?></div>
									<div class="font-14 text-secondary weight-500">Kaduna</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="icon-copy fa fa-user" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div> 
					
					
					
					
					
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $kano; ?></div>
									<div class="font-14 text-secondary weight-500">
										Kano
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-user"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $katsina; ?></div>
									<div class="font-14 text-secondary weight-500">
										Katsina
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-user"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $kebbi; ?></div>
									<div class="font-14 text-secondary weight-500">
										Kebbi
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i
											class="icon-copy fa fa-user"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo "$kogi"; ?></div>
									<div class="font-14 text-secondary weight-500">Kogi</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="icon-copy fa fa-user" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div> 
					
					
					
					
					
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $kwara; ?></div>
									<div class="font-14 text-secondary weight-500">
										Kwara
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-user"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $lagos; ?></div>
									<div class="font-14 text-secondary weight-500">
										Lagos
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-user"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $nasarawa; ?></div>
									<div class="font-14 text-secondary weight-500">
										Nasarawa
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i
											class="icon-copy fa fa-user"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo "$niger"; ?></div>
									<div class="font-14 text-secondary weight-500">Niger</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="icon-copy fa fa-user" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div> 
					
					
					
					
					
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $ogun; ?></div>
									<div class="font-14 text-secondary weight-500">
										Ogun
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-user"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $ondo; ?></div>
									<div class="font-14 text-secondary weight-500">
										Ondo
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-user"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $osun; ?></div>
									<div class="font-14 text-secondary weight-500">
										Osun
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i
											class="icon-copy fa fa-user"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo "$oyo"; ?></div>
									<div class="font-14 text-secondary weight-500">Oyo</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="icon-copy fa fa-user" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					
					
					
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $plateau; ?></div>
									<div class="font-14 text-secondary weight-500">
										Plateau
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-user"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $rivers; ?></div>
									<div class="font-14 text-secondary weight-500">
										Rivers
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-user"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $sokoto; ?></div>
									<div class="font-14 text-secondary weight-500">
										Sokoto
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon">
										<i
											class="icon-copy fa fa-user"
											aria-hidden="true"
										></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo "$taraba"; ?></div>
									<div class="font-14 text-secondary weight-500">Taraba</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#09cc06">
										<i class="icon-copy fa fa-user" aria-hidden="true"></i>
									</div>
								</div>
							</div>
						</div>
					</div> 
					
					
					
					
					
					
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $yobe; ?></div>
									<div class="font-14 text-secondary weight-500">
										Yobe
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#00eccf">
										<i class="icon-copy dw dw-user"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
						<div class="card-box height-100-p widget-style3">
							<div class="d-flex flex-wrap">
								<div class="widget-data">
									<div class="weight-700 font-24 text-dark"><?php echo $zamfara; ?></div>
									<div class="font-14 text-secondary weight-500">
										Zamfara
									</div>
								</div>
								<div class="widget-icon">
									<div class="icon" data-color="#ff5b5b">
										<span class="icon-copy ti-user"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
										
					
					
					
				</div>
				
				
				
				
				
				

				
				

				<div class="stablize">
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
