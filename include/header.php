<?php
	define( 'URL' , "http://" . $_SERVER['SERVER_NAME'] );
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" >
	<title>Health and Medical</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo URL; ?>/assets/images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo URL; ?>/style.css" />
</head>
<body>
<div class="wrapper">
	<header class="header">
		<div class="row">
			<div class="columns large-4 medium-12">
				<a href="index.php" class="logo">
					<img src="<?php echo URL; ?>/assets/images/logo.png" width="762" height="78" alt="Health &amp; Medical">
				</a>
			</div><!-- /.columns large-3 -->

			<div class="columns large-6 medium-8">
				<a href="#" class="btn-menu">
					<span></span>
				</a>

				<nav class="nav">
					<ul class="clearfix">
						<li>
							<a href="<?php echo URL; ?>/about-us.php">About</a>
						</li>
						
						<li>
							<a href="<?php echo URL; ?>/services.php">Services</a>
								<ul class="nav-dropdown">
									<li>
										<a href="<?php echo URL; ?>/services/knee.php">
											<i class="fa fa-plus"></i>
											Knee
										</a>
									</li>
									
									<li>
										<a href="<?php echo URL; ?>/services/shoulder.php">
											<i class="fa fa-plus"></i>
											Shoulder
										</a>
									</li>
									
									<li>
										<a href="<?php echo URL; ?>/services/hip.php">
											<i class="fa fa-plus"></i>
											Hip
										</a>
									</li>
									
									<li>
										<a href="<?php echo URL; ?>/services/elbow.php">
											<i class="fa fa-plus"></i>
											Elbow
										</a>
									</li>
									
									<li>
										<a href="<?php echo URL; ?>/services/hand-wrist.php">
											<i class="fa fa-plus"></i>
											Hand/Wrist
										</a>
									</li>
								</ul>
						</li>
						
						<li>
							<a href="<?php echo URL; ?>/patient-info.php">Patient Info</a>
							<ul class="nav-dropdown">
								<li>
									<a href="<?php echo URL; ?>/patient-info.php">
										<i class="fa fa-plus"></i>
										Appointments
									</a>
								</li>
								
								<li>
									<a href="<?php echo URL; ?>/faq.php">
										<i class="fa fa-plus"></i>
										FAQ
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php echo URL; ?>/contact.php">Contact</a>
						</li>
					</ul>
				</nav><!-- /.nav -->
			</div><!-- /.columns large-6 -->

			<div class="columns large-2 medium-4 mobile-hidden">
				<p class="phone">
					<i class="fa fa-mobile"></i>
					<small>Call Us</small>
					<a href='tel: 514 908 9010'>514 908 9010</a>					
				</p><!-- /.phone -->
			</div><!-- /.columns large-3 -->
		</div><!-- /.row -->
	</header><!-- /.header -->	
	
