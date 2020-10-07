<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>TerbangKuy</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" />
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/style.css" />
	<!-- Icomoon Icon Fonts-->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
	<!-- Superfish -->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/superfish.css">
	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css">
	<!-- Date Picker -->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/cs-select.css">
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/cs-skin-border.css">
	
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/css/seat.css">


	<!-- Modernizr JS -->
	<script src="<?=base_url()?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<header>
			<nav class="navbar navbar-expand-md navbar-dark bg-dark absolute">
				<a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/logo.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url()?>">Home</a>
						</li>

						<?php if ($this->session->userdata('user')): ?>
							<li class="nav-item">
								<a class="nav-link" href="<?=base_url()?>reservation">Reservation</a>
							</li>
							<li class="header-username nav-link">
								<a href="#">Halo, <?php echo $this->session->userdata('user')['username']?></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?=base_url()?>account/logout">Log Out</a>
							</li>

							<?php else :?>
								<li class="nav-item">
									<a class="nav-link" href="<?=base_url()?>account/signup">Sign Up</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?=base_url()?>account/login">Login</a>
								</li>
							<?php endif; ?>
						</ul>
					</div>
				</nav>
			</header>